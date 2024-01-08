<?php
    $conn = mysqli_connect("localhost", "root", "", "db_cantin");
    if(!$conn){
      echo "Gagal Koneksi";
    }
?>