<html>

<head>
    <title>Cindi Batik</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="wrap">
        <div class="header">
            <img src="img/logo.png" alt="">
        </div>
        <div class="menu">
            <ul>
                <li><a href="index.php">Product</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="akun.php">Akun</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
            <form action="cari.php">
                <input class="cari" type="text" name="car" placeholder="Cari...">
            </form>
        </div>
        
        <div class="container">
            <?php 
            $pilih = 'categori-all.php';
             if (isset($_GET['page'])) {
                $page = $_GET['page'];
                switch ($page) {
                    case 'all':
                        $pilih = 'categori-all.php';
                    break;
                    case 'keluarga':
                    $pilih = 'categori-keluarga.php';
                    break;
                    case 'pasangan':
                    $pilih = 'categori-pasangan.php';
                    break;
                    case 'wanita':
                    $pilih = 'categori-wanita.php';
                    break;
                    case 'pria':
                    $pilih = 'categori-pria.php';
                    break;
      
                default:
                    echo '<h3>maaf halamanya tidak ada</h3>';
                    break;
                }
                }  
                include $pilih;
                ?>
        </div>
        <div class="kategori">
            <P>MENU</P>
            <hr size="15px" color="palevioletred">
            <ul>
                <li><a href="index.php?page=all">SEMUA PRODUK</a></li>
                <hr size="10px" color="pink">
                <li><a href="index.php?page=keluarga">BATIK KELUARGA</a></li>
                <hr size="10px" color="pink">
                <li><a href="index.php?page=pasangan">BATIK PASANGAN</a></li>
                <hr size="10px" color="pink">
                <li><a href="index.php?page=wanita">BATIK WANITA</a></li>
                <hr size="10px" color="pink">
                <li><a href="index.php?page=pria">BATIK PRIA</a></li>
                <hr size="10px" color="pink">
            </ul>
            </div>
    </div>
</body>

</html>