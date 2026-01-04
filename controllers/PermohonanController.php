<?php
class PermohonanController{
    private $db;
    private $permohonan;

    public function __construct($conn){
        $this->db = $conn;

        require "../models/Permohonan.php";

        $this->permohonan = new Permohonan($this->db);
    }
    
    public function store($data){
        $nik = $data["nik"];

        if($this->permohonan->create($data)){
            $_SESSION['success'] = "Permohonan anda berhasil terkirim!";
            header("Location:" . BASE_URL ."/home");
            exit;
        } else {
            $_SESSION['error'] = "Permohonan anda gagal terkirim!";
            header("Location:" . BASE_URL ."/home");
            exit;
        }

    }

    public function index(){
        require "../views/permohonan/index.php";
    }

    public function sambunganBaru(){
        $data = $this->permohonan->all();
        require "../views/admin/sambungan-baru.php";
    }
}
?>