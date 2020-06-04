<?php

    $con = mysqli_connect("localhost","root","");
    $dbname="artikel_db";
    mysqli_select_db($con, $dbname);

    // hapus table
    $delete = mysqli_query($con, "DROP TABLE articles") or die ("Tidak Dapat Menghapus Tabel");
    if($delete){
        echo "Table berhasil dihapus <br>";
    }

    // hapus db
    $delete_db = mysqli_query($con, "DROP DATABASE $dbname") or die ("Tidak Dapat Menghapus Database $dbname");
    if($delete_db){
        echo "Database $dbname berhasil dihapus";
    }
    
    // close db
    mysqli_close($con); 
?> 
