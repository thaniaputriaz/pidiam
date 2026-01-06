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

    public function find($id){
        return mysqli_fetch_assoc(
            mysqli_query($this->db, "SELECT * FROM permohonan_sambungan WHERE id_permohonan='$id'")
        );
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

    public function update($id, $data){
        $nik = $data['nik'];
        $nama = $data['nama'];
        $no_hp = $data['no_hp'];
        $alamat = $data['alamat'];
        $latitude = $data['latitude'];
        $longitude = $data['longitude'];
        $status = $data['status_permohonan'];

        $query = "UPDATE permohonan_sambungan SET 
                    nik='$nik',
                    nama='$nama',
                    no_hp='$no_hp',
                    alamat='$alamat',
                    latitude='$latitude',
                    longitude='$longitude',
                    status_permohonan='$status' 
                  WHERE id_permohonan='$id'";
        return mysqli_query($this->db, $query);
    }

    public function deleteById($id){
        $query = "DELETE FROM permohonan_sambungan WHERE id_permohonan='$id'";
        return mysqli_query($this->db, $query);
    }

    public function cekStatusbyId($id){
        $query = "SELECT * FROM permohonan_sambungan WHERE id_permohonan='$id'";
        $result = mysqli_query($this->db, $query);
        return mysqli_fetch_assoc($result);
    }
}
?>