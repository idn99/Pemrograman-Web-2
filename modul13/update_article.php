<?php 
include "koneksi.php";

// ubah format waktu
$time = date("Y-m-d");

$ID = $_POST['ID'];
$title = $_POST['title'];
$author = $_POST['author'];
$abstraksi = $_POST['abstraksi'];
$content = $_POST['content'];

$update="UPDATE articles SET judul='$title', 
            penulis='$author', 
            lead='$abstraksi',  
            content='$content', 
            waktu='$time' WHERE articleID ='$ID'";

//ubah ke mysqli
$hasil=mysqli_query($koneksi,$update) or die ("Sql Salah"); 

if ($hasil) {
    echo "Artikel berhasil di update<br>";
    echo "<a href=\"tampil_articles.php\">List</a>";
} else {
    echo "Artikel gagal di update";
}
?>