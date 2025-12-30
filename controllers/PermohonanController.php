<?php
class PermohonanController{
    private $db;
    private $permohonan;

    public function __construct($conn){
        $this->db = $conn;

        require "../models/Permohonan.php";

        $this->permohonan = new Permohonan($this->db);
    }

    public function index(){
        $data = $this->permohonan->all();

        require "../views/permohonan/index.php";
    }
    
}
?>