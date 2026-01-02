<?php 
require "../models/Admin.php";

class AdminController{
    private $model;

    public function __construct($conn){
        $this->model = new Admin($conn);
    }

    public function loginPage(){
        include "../views/admin/login.php";

    }

    public function login(){
        if(!isset($_POST['login'])){
            header("Location: index.php?url=admin/loginPage");
            exit;
        }

        $result = $this->model->login(
            $_POST['username'],
            $_POST['password']
        );

        if ($result && $result->num_rows > 0){
            $_SESSION['admin'] = true;
            header("Location: index.php?url=admin/index");
        }else{
            echo "Login gagal";
        }
    }

    public function index(){
        include "../views/admin/index.php";
    }
    
}
?>