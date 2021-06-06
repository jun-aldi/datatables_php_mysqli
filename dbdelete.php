<?php
    include "dbconfig.php";
    //koneksi
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    //pengecekan koneksi
    if ($conn->connect_error){
        die("koneksi gagal".$conn->connect_error);
    } else {
        //mendapat id 
        $id_tma = $_GET['id_tma']; 
        echo $id_tma;
        $query = "DELETE FROM `tma` WHERE `id_tma` = $id_tma";
        //jalankan query
        $result = $conn->query($query);
        $conn->close();
        //	Redirect kembali ke halaman utama 
        echo "data telah dihapus";
        //header("Location: index.php");

    }
?>