<?php
session_start(); // Start session nya

// Kita cek apakah user sudah login atau belum
// Cek nya dengan cara cek apakah terdapat session username atau tidak
if( ! isset($_SESSION['username'])){ // Jika tidak ada session username berarti dia belum login
	header("location: login.php"); // Kita Redirect ke halaman index.php karena belum login
}?>
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
            <form action="search.php">
                <input class="cari" type="text" name="car" placeholder="Cari...">
            </form>
        </div>
        <div class="saya">
        <h1>Selamat datang di Cindi Batik</h1>
        <p><?php echo $_SESSION['id']; ?></p>
        <p><img src="<?php echo $_SESSION['pic'];?>" alt="<?php echo $_SESSION['id'];?>"></p>
        <a href="logout.php"><button>Logout</button></a>
        </div>
    </div>
</body>

</html>

