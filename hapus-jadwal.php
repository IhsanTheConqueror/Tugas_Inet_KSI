<?php
    session_start();
    include 'koneksi.php';
    if($_SESSION['stat_login'] != true){
        echo '<script>window.location="jadwal.php"</script>';
      }
   
    if(isset($_GET['id'])){
        $delete = mysqli_query($conn, "DELETE FROM tb_kegiatan
            WHERE id = ".$_GET['id']." ");

            echo '<script>window.location = "jadwal.php"</script>';
    }

?>