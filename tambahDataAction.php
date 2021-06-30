<?php
    if(isset($_POST["Kirim"])) {
        $nama = $_POST["Nama"];
        $password = $_POST["Password"];

        require("database.php");
        // Menselect data yang sesuai dari tabel user.
        $sql = "SELECT*FROM user WHERE user.nama_user = '$nama' AND user.password_user = '$password'";
        $query = mysqli_query($koneksi, $sql);
        
        // Menghitung jumlah baris hasil dari select.
        if(mysqli_num_rows($query) > 0) {
            echo "<script>alert('Login Berhasil');location='homepage.html';</script>";
        } else {
            echo "<script>alert('Error');window.history.go(-1);</script>";
        }
    }
?>