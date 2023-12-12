<?php
    include('koneksi.php'); // Make sure this includes the database connection properly

    $db = new database();

    if(isset($_GET['action'])) {
        $action = $_GET['action'];

        if($action == "add" && $_SERVER['REQUEST_METHOD'] == 'POST') {
            $judul = $_POST['judul'];
            $gambar = $_POST['gambar'];
            $deskripsi = $_POST['deskripsi'];
            $tanggal = $_POST['tanggal'];

            // Perform data validation here if needed

            $db->tambah_data($judul, $gambar, $deskripsi, $tanggal);
            header("location:../insert.php");
            exit();
        } elseif($action == "update" && $_SERVER['REQUEST_METHOD'] == 'POST') {
            $no = $_POST['no'];
            $judul = $_POST['judul'];
            $gambar = $_POST['gambar'];
            $deskripsi = $_POST['deskripsi'];
            $tanggal = $_POST['tanggal'];

            // Perform data validation here if needed

            $db->update_data($no, $judul, $gambar, $deskripsi, $tanggal);
            header("location:../insert.php");
            exit();
        } elseif($action == "delete" && isset($_GET['no'])) {
            $no = $_GET['no'];

            // Validate and sanitize $no before using it in the query

            $db->delete_data($no);
            header("location:../insert.php");
            exit();
        } else {
            // Handle invalid action
            echo "Invalid action.";
            exit();
        }
    } else {
        // Handle missing action
        echo "Action not specified.";
        exit();
    }
    // apps/proses.php

    // Cek apakah action adalah update
    if ($_GET['action'] == 'update') {
    // Ambil data dari form
    $no = $_POST['no'];
    $judul = $_POST['judul'];
    // Lanjutkan dengan mengambil data lainnya (gambar, deskripsi, tanggal, dll)

    // Lakukan query update ke database
    $query = "UPDATE nama_tabel SET judul='$judul' WHERE no='$no'";
    // Lanjutkan dengan query untuk mengupdate data lainnya

    // Eksekusi query
    $result = mysqli_query($koneksi, $query);

    // Cek apakah query berhasil
    if ($result) {
        // Redirect ke halaman view.php atau halaman lain yang sesuai
        header("Location: view.php");
        exit();
    } else {
        // Handle jika query gagal
        echo "Error: " . mysqli_error($koneksi);
    }
}

?>
