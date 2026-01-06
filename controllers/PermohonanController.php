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

    public function edit($id_permohonan){
        $permohonan = $this->permohonan->find($id_permohonan);
        require "../views/admin/edit-sambungan.php";
    }

    public function update($id, $data){
        if($this->permohonan->update($id, $data)){
            $_SESSION['success'] = "Permohonan anda berhasil Diubah!";
            header("Location:" . BASE_URL ."/admin/sambungan-baru");
            exit;
         } else{
            $_SESSION['error'] = "Permohonan gagal diubah!";
            header("Location:" . BASE_URL . "/admin/edit/$id");
            exit;
         }

    }
    public function delete($id){
        $this->permohonan->deleteById($id);
        $_SESSION['success'] = "Data berhasil dihapus!";
        header("Location:" . BASE_URL ."/admin/sambungan-baru");
        exit;
    }

    public function cekStatusPage(){
        require "../views/permohonan/cek-status.php";
        
    }

    public function cekStatus(){
        if(isset($_POST['cek-status'])){
            $id = $_POST['id-permohonan'];

            $data = [
            'permohonan' => $this->permohonan->cekStatusbyId($id),
            'showModal' => true
            ];

            extract($data);
            require "../views/permohonan/cek-status.php";
            return;
        }
       
        require "../views/permohonan/cek-status.php";

    }
}
?>