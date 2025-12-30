<?php
session_start();

$base_url = dirname($_SERVER['SCRIPT_NAME']);
define('BASE_URL', $base_url == '/' ? '' : $base_url);

require "../config/database.php";
require "../controllers/PermohonanController.php";
require "../controllers/HomeController.php";


$url = $_GET['url'] ?? 'home';
$parts = explode("/", $url);

$controller = $parts[0] ?? 'home';
$method = $parts[1] ?? 'index';
$id = $parts[2] ?? null;

switch($controller){
    case 'home':
        $ctrl = new HomeController();
        $ctrl->index();
        break;

    case 'permohonan':
        $ctrl = new PermohonanController($conn);
        switch($method){
            case 'index' :
                $ctrl->index();
                break;
            case 'create' :
                $ctrl->create();
                break;
            case 'store' :
                $ctrl->store($_POST);
                break;
            case 'edit' :
                $ctrl->edit($id);
                break;
            case 'update' :
                $ctrl->update($id, $_POST);
                break;
            case 'delete' :
                $ctrl->delete();
                break;
        }
        break;
    
    case 'pelanggan' :


}
?>