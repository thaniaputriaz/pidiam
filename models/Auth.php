<?php 
class Auth{
    private $db;
    public function __construct($conn){
        $this->db = $conn;
    }

    public function login($username, $password){
        $sql = "SELECT * FROM tb_admins WHERE username='$username' AND password='$password'";

        $result = $this->db->query($sql);
        return $result->fetch_assoc();
    }

    public function allSambunganBaru(){
        $sql = "SELECT * FROM permohonan_sambungan";

        $result = $this->db->query($sql);
        return $result->fetch_assoc();
    }
}
?>