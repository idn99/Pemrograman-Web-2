<?php

    $link = mysqli_connect("localhost", "root", "", "lat_dbase"); 

    if($link === false){ 
        die("ERROR: Could not connect. " 
                    . mysqli_connect_error()); 
    } 

    $sql = "UPDATE tbl_mhs SET FirstName='Ilham',LastName='Nugraha',Age=21 WHERE mhsID=3"; 
    if(mysqli_query($link, $sql)){ 
        echo "Record was updated successfully."; 
    } else { 
        echo "ERROR: Could not able to execute $sql. " 
                                . mysqli_error($link); 
    } 
    mysqli_close($link); 

?> 
