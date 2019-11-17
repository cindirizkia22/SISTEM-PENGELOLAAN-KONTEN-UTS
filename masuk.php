<?php
session_start();

include 'koneksi.php'; 

$username = $_POST['username'];
$password = $_POST['password'];


$sql = mysql_query("SELECT * FROM user WHERE username='".$username."' AND password='".$password."'");
$data = mysql_fetch_array($sql); 


if( ! empty($data)){
	$_SESSION['username'] = $data['username']; 
	$_SESSION['id'] = $data['nama'];
	$_SESSION['pic'] = $data['foto'];
	
	setcookie("message","delete",time()-1);
	
	header("location: akun.php");
}else{
	setcookie("message", "Maaf, Username atau Password salah", time()+3600);
	
	header("location: login.php");
}
?>
