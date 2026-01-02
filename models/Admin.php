<?php 
class Admin{
    private $db;
    public function __construct($conn){
        $this->db = $conn;
    }

    public function login($username, $password){
        $sql = "SELECT * FROM tb_admins WHERE username='$username' AND password='$password'";

        return $this->db->query($sql);
    }
}
?>