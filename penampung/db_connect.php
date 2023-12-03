<?php

$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// $result = mysqli_query($conn, "SELECT * FROM pegawai");

function query($query){
   global $conn;
   $result = mysqli_query($conn, $query);
   $rows = [];
   while($data = mysqli_fetch_assoc($result)){
      $rows[] = $data;
   }
   return $rows;
}
?>