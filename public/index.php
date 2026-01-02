<?php
session_start();

$base_url = dirname($_SERVER['SCRIPT_NAME']);
define('BASE_URL', $base_url == '/' ? '' : $base_url);

require "../config/database.php";
require "../controllers/PermohonanController.php";
require "../controllers/HomeController.php";
require "../controllers/AdminController.php";


$url = $_GET['url'] ?? 'home';
$parts = explode("/", $url);

$controller = $parts[0] ?? 'home';
$method = $parts[1] ?? 'index';
$id = $parts[2] ?? null;

if (
    $controller === 'admin' &&
    !isset($_SESSION['admin']) &&
    !in_array($method, ['login', 'loginPage'])
) {
    header("Location: index.php?url=admin/loginPage");
    exit;
}

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
    
    case 'admin' :
        $ctrl = new AdminController($conn);
        switch($method){
            case 'index' :
                $ctrl->index();
                break;
            case 'loginPage' :
                $ctrl->loginPage();
                break;
            case 'login' :
                $ctrl->login();
                break;
        }


}
?>