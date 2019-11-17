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
            <form action="cari.php" >
                <input class="cari" type="text" name="car" placeholder="Cari...">
            </form>
        </div>
        
        <div class="container">
            <?php 
            include 'categori-cari.php';
                ?>
        </div>
    </div>
</body>

</html>