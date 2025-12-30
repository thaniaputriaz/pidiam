<?php
class Permohonan {
    private $db;
    public function __construct($conn){
        $this->db = $conn;
    }

    public function all(){
        return mysqli_query($this->db, "SELECT * FROM permohonan_sambungan" );
    }
}
?>