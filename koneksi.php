<?php
    // ini yang dipecah dulu
    $host   = "localhost";      // ini url database
    $user   = "root";           // ini user database
    $pass   = "";               // ini pass database
    $db     = "ukm";   // ini nama databasenya

    $conn = new mysqli($host, $user, $pass, $db); // ini perintah bikin koneksinya
    // $conn = mysqli_connect($host, $user, $pass, $dbname); // ini perintah bikin koneksinya
   
    if(!$conn){
        echo 'Error : '.mysqli_connect_error($conn);
    }
?>