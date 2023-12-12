<?php
class database{
    var $host       = "localhost";
    var $username   = "root";
    var $password   = "";
    var $database   = "information";
    var $koneksi    = "";

    function __construct()
    {
        $this->koneksi = mysqli_connect($this->host,$this->username,$this->password,$this->database);
        if(mysqli_connect_errno()){
            echo "Koneksi gagal : ".mysqli_connect_error();
        }
    }

    function view_data(){
        $data = mysqli_query($this->koneksi,"select * FROM tb_peserta");
        $hasil = array(); // Initialize the array
        while($row = mysqli_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil;
    }

    function tambah_data($judul,$gambar,$deskripsi,$tanggal){
        mysqli_query($this->koneksi,"insert into tb_peserta (judul, gambar, deskripsi, tanggal) values ('$judul','$gambar','$deskripsi','$tanggal')");
    }

    function get_id($id){
        $query = mysqli_query($this->koneksi,"select * from tb_peserta where no='$id'");
        return $query->fetch_array();
    }

    function update_data($id,$judul,$gambar,$deskripsi,$tanggal){
        mysqli_query($this->koneksi,"update tb_peserta set judul='$judul', gambar='$gambar', deskripsi ='$deskripsi', tanggal='$tanggal' where no='$id'");
    }

    function delete_data($id){
        mysqli_query($this->koneksi,"delete from tb_peserta where no='$id'");
    }
}
?>
