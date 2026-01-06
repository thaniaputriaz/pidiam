<?php 
require "../models/Auth.php";

class AuthController{
    private $model;

    public function __construct($conn){
        $this->model = new Auth($conn);
    }

    public function loginPage(){
        include "../views/auth/login.php";

    }

    public function login(){

        if(!isset($_POST['login'])){
            header("Location: " . BASE_URL . "/admin/loginPage");
            exit;

        }

        $user = $this->model->login(
            $_POST['username'],
            $_POST['password']
        );

        if (!$user){
            $error = "Username atau password salah";
            include "../views/auth/login.php";
            return;
        }
        if ($user){
            $_SESSION['user'] = [
                'id' => $user['id'],
                'username' => $user['username'],
                'role' => $user['role']
            ];

            if($user['role'] === 'admin'){
                header("Location: " . BASE_URL . "/admin/dashboard");
            } elseif($user['role'] == 'petugas'){
                header("Location: " . BASE_URL . "/petugas/dashboard.");
            }
            exit;

        }else{
            echo "Login gagal";
        }
    }

    public function index(){
        include "../views/auth/login.php";
    }
    
    public function dashboardAdmin(){
        include "../views/admin/dashboard.php";
    }

    public function dashboardPetugas(){
        include "../views/petugas/dashboard.php";
    }
}
?>