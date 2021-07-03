<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $koneksi = mysqli_connect($host, $user, $pass);
    session_start();
    if(!$koneksi) {
        die ("Gagal menyambungkan koneksi: ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
    }

    //memilih database library
    $result = mysqli_select_db($koneksi, "library");
    if(!$result){
        die ("Gagal memilih database: ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
    }
?>