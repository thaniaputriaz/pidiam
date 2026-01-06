<?php
session_start();

$base_url = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');
define('BASE_URL', $base_url);


require "../config/database.php";
require "../controllers/PermohonanController.php";
require "../controllers/HomeController.php";
require "../controllers/AuthController.php";


$url = $_GET['url'] ?? 'home';
$parts = explode("/", $url);

$controller = $parts[0] ?? 'home';
$method = $parts[1] ?? 'index';
$id = $parts[2] ?? null;

if (
    $controller === 'admin' &&
    (
        !isset($_SESSION['user']) ||
        $_SESSION['user']['role'] !== 'admin'
    ) &&
    !in_array($method, ['login', 'loginPage'])
) {
    header("Location: " . BASE_URL . "/admin/loginPage"
);
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
            case 'cek-status' :
                if ($_SERVER['REQUEST_METHOD'] === 'POST'){
                    $ctrl->cekStatus();
                } else {
                    $ctrl->cekStatusPage();
                }
                break;
           
        }
        break;
    
    case 'admin' :
        
        switch($method){
            case 'index' :
                $ctrl = new AuthController($conn);
                $ctrl->index();
                break;
            case 'loginPage' :
                $ctrl = new AuthController($conn);
                $ctrl->loginPage();
                break;
            case 'login' :
                $ctrl = new AuthController($conn);
                $ctrl->login();
                break;
            case 'dashboard' :
                $ctrl = new AuthController($conn);
                $ctrl->dashboardAdmin();
                break;
            case 'sambungan-baru':
                $ctrl = new PermohonanController($conn);
                $ctrl->sambunganBaru($_POST);
                break;
            case 'edit':
                $ctrl = new PermohonanController($conn);
                $ctrl->edit($id);
                break;
            case 'update':
                $ctrl = new PermohonanController($conn);
                $ctrl->update($id,$_POST);
                break;
            case 'delete':
                $ctrl = new PermohonanController($conn);
                $ctrl->delete($id);
                break;
            default:
                echo "404 Admin Page";
                break;
        }
    case 'petugas' :
        switch($method){
            case 'dashboard' :
                $ctrl = new AuthController($conn);
                $ctrl->dashboardPetugas();
                break;
        }


}
?>