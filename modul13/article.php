<?php 
include "koneksi.php";

// ambil data dari form
$judul = $_POST['title'];
$penulis = $_POST['author'];
$lead = $_POST['abstraksi'];
$isi = $_POST['content'];
$time = date("Y-m-d");

// merapihkan lead dan kontent
$lead = str_replace("\r\n", "<br>", $lead);
$isi = str_replace("\r\n", "<br>", $isi);

// menambahkan query untuk add data dengan menggunakan mysqli
$result = mysqli_query($koneksi, "insert into articles values('','$judul','$penulis','$lead','$isi','$time')") or die ("Sql salah");

// pengecekan query
if ($result) {
    echo "<h3 align=center>Proses penambahan artikel berhasil</h3>";
    echo "<A href=\"tampil_articles.php\">List</A>";
} else {
    echo "<h2 align=center>Proses penambahan artikel tidak berhasil</h2>";
}
?>
