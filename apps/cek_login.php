<?php
    $username = $_GET['username'];
    $password = $_GET['password'];

    if($username == "admin" && $password=="bpsdmp")
        header("location:../dashboard.php");
        else
        echo '<script>alert("Silakah masukkan Ysername dan Password yang Benar");window.location.href="../index.php"</script>';
?>