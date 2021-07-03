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
            padding: 0;
            background: #090a0d;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            color: white;
            align-items: center;
            gap: 50px;
        }
        .tulisan {
            padding-top: 130px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }
        .tebal {
            font-weight: bold;
            font-size: 64px;
            line-height: 75px;
            text-align: center;
        }
        .tipis {
            font-weight: 200;
            font-size: 36px;
            line-height: 42px;
            text-align: center;
        }
        button {
            background: #C3262E;
            padding: 20px 30px;
            border-radius: 20px;
            border: none;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-style: normal;
            font-weight: bold;
            font-size: 24px;
            line-height: 28px;
            color: white;
            width: 100%;
            align-self: center;
        }
        a {
            text-decoration: none;
            color: white;
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
    <?php
        include "database.php";
        $id = $_GET['id'];
        $sql = "SELECT*FROM user WHERE id_user=2;";
        $sql .= "INSERT iNTO pinjam VALUES ('', 1, $id, NOW()";
        $no = 1;
        
        if(mysqli_multi_query($koneksi, $sql)) {
            do{
                if($result = mysqli_store_result($koneksi)) {
                    while($row = mysqli_fetch_array($result)) {            
    ?>
    <div class="mid">
        <div class="tulisan">
            <h5 class="tebal">Thank You <?php echo $row['nama_user'];?></h5>
            <h6 class="tipis">for borrowing a books from us</h6>
        </div>
        <div class="submit">
            <button>
                <a href="dashboard.php">Dashboard</a>
            </button>
        </div>
    </div>
    <?php
                    }
                    mysqli_free_result($result);
                }
            } while(mysqli_next_result($koneksi));
        }
    ?>
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