<?php
    if(isset($_POST["Kirim"])) {
        $nama = $_POST["Nama"];
        $password = $_POST["Password"];

        require('database.php');
        $sql = "insert into user values('','$nama','$password')";
        $query = mysqli_query($koneksi, $sql);
        
        if($query) {
            echo "<script>alert('Data Berhasil Disimpan');location='homepage.html';</script>";
        } else {
            echo "<script>alert('Error');window.history.go(-1);</script>";
        }
    }
?>