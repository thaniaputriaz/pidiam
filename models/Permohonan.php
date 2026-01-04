<?php
class Permohonan {
    private $db;
    public function __construct($conn){
        $this->db = $conn;
    }

    public function all(){
        $result = mysqli_query($this->db, "SELECT * FROM permohonan_sambungan" );
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    public function create($data){
        $nik = $data['nik'];
        $nama = $data['nama'];
        $no_hp = $data['no_hp'];
        $alamat = $data['alamat'];
        $latitude = $data['latitude'];
        $longitude = $data['longitude'];

        $query = mysqli_query($this->db,
            "INSERT INTO permohonan_sambungan (nik, nama, no_hp, alamat, latitude, longitude) VALUES('$nik', '$nama', '$no_hp', '$alamat', '$latitude', '$longitude')"
        );

        if(!$query){
            die(mysqli_error($this->db));
        }

        return $query;
    }
}
?>