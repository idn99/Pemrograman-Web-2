<?php 
include "koneksi.php";

// sql menampilkan isi dari tabel articles
$perintah = "SELECT * FROM articles ORDER BY articleID DESC";

// run sql pakai mysqli
$hasil = mysqli_query($koneksi, $perintah);
echo (" <h2>List Artikel</h2> <br><UL> ");

// menampilkan ke layar
while ($row = mysqli_fetch_array($hasil)) {
    echo ("  <LI>$row[1] &nbsp;$row[2] &nbsp; $row[waktu] &nbsp;<a href=\"edit_article.php?articleID=$row[0]\">Edit</a>  &nbsp;<a href=\"delete.php?articleID=$row[0]\">Hapus</a></LI><br>");
}
echo ("</table>");
echo "<br><a href=\"add_article.php\">Tambah</a>";
echo "<br><a href=\"adminpanel.php\">Admin Panel</a>";
?>