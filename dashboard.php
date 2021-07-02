<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Library Project</title>
</head>
<body>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        body{
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            justify-content: space-between;
        }
        nav {
            height: 100%;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            background: #090a0d;
        }
        .topbar {
            bottom: 100px;
            display: flex;
            flex-direction: row;
            align-items: center;
            gap: 200px;
            background: none;
        }
        .text {
            display: flex;
            flex-direction: row;
            gap: 50px;
            font-size: 28px;
            background: none;
            color: white;
        }
        .logo {
            padding: 20px;
        }
        .mid {
            margin: 0;
            padding-top: 100px;
            background: #090a0d;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            color: white;
            align-items: center;
            gap: 50px;
        }
        table { 
            border-collapse:collapse;
            border-spacing:0;    
            font-size:16px;
            color: black;
            }

        table th {
            font-weight:bold;
            padding:10px;
            color:#fff;
            background-color:#2A72BA;
            border-top:1px black solid;
            border-bottom:1px black solid;
            }
        table td {
            padding:10px;
            border-top: 1px black solid;
            border-bottom: 1px black solid;
            text-align: center;
            }         
        table tr {
            background-color: #DFEBF8;
            }
        footer {
            padding: 5px;
            height: 82px;
            max-width: 100vw;
            background-color: #111;
            color: white;
            display: flex;
            flex-direction: row;
            gap: 600px;
        }
        .kanan {
            display: flex;
            flex-direction: row;
            align-items: center;
            gap: 20px;
            padding-top: 5px;
            padding-left: 50px;
        }
        .kiri {
            display: flex;
            flex-direction: row;
            align-items: center;
            gap: 20px;
            padding-top: 5px;
            padding-left: 50px;
        }
    </style>
    <nav>
        <div class="bg-color"></div>
        <div class="topbar">
            <div class="logo">
                <img src="logo.png" alt="The Library Project">
            </div>
            <div class="text">
                <h3>Home</h3>
                <h3>About</h3>
                <h3>Catalog</h3>
            </div>
            <span class="iconify" data-inline="false" data-icon="mdi:account-circle-outline" style="color: #ffffff; font-size: 95px;"></span>
        </div>
    </nav>
    <div class="mid">
        <?php
            require ("database.php");
            $sql = "SELECT pinjam.id_pinjam, user.nama_user, buku.judul, tanggal
                    FROM pinjam JOIN user ON pinjam.id_user = user.id_user
                    JOIN buku ON pinjam.id_buku = buku.id_buku";
            $query = mysqli_query($koneksi, $sql);
        ?>
            <table border="1">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Buku</th>
                    <th>Tanggal</th>
                </tr>
        <?php		
                $no = 1;
                // error nya di sini padahal dh bener menurutku :(
                while($data = mysqli_fetch_array($query)) {
                extract($data);
        ?>
                <tr>
                    <td><?=$no++?></td>
                    <td><?=$data['nama_user'];?></td>
                    <td><?=$data['judul'];?></td>
                    <td><?=date("d M Y");?></td>
                </tr>
        <?php
            }
        ?>
            </table>
    </div>
    <footer>
        <div class="kanan">
            <h5 class="bold" style="font-weight: bold;
            font-size: 18px;
            line-height: 21px;
            text-align: center;">The Library Project</h5>
            <h6 class="thin" style="font-weight: 300;
            font-size: 18px;
            line-height: 21px;
            text-align: center;"> © 2021 | Privacy Policy</h6>
        </div>
        <div class="kiri">
            <img src="icon-footer/facebook.png" alt="facebook">
            <img src="icon-footer/instagram.png" alt="instagram">
            <img src="icon-footer/twitter.png" alt="twitter">
        </div>
    </footer>
</body>
</html>

<!-- Icon Topbar -->
<script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>