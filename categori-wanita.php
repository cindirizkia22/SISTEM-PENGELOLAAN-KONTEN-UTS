<?php 
include 'koneksi.php';
$sql= 'select * from produk where kategori="wanita" ';
$query = mysql_query($sql);
echo '<div class="sub">
<h1>SEMUA PRODUK</h1>';
while ($row = mysql_fetch_array($query)){
  echo '
        <div class="produk">
                <img src="'.$row['poto'].'" alt="batik modern">
                <div class="nama" >'.$row['nama'].'</div>
                <div class="harga">Rp.'.$row['harga'].'</div>
         
         </div>';
}
echo '</div>';
?>