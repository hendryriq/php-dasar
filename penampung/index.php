<?php
//koneksi
require 'db_connect.php';

$pegawai = query("SELECT * FROM  pegawai");


// var_dump($result);

//mysqli_fetch_row() -> Mengembalikan nilai numerik(indexing)
//mysqli_fetch_assoc() -> mengembalikan nilai array asosiatif
//mysqli_fetch_array()
//mysqli_fetch_object()

// $hasil = mysqli_fetch_row($result);

//menampilkan semua data
// while ($a = mysqli_fetch_assoc($result)) {
//    var_dump($a);
// }


?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Data Pegawai</title>
</head>

<body>
   <h1>Data Pegawai Udacoding</h1>
   <table border="1px" cellSpacing="0">
      <tr>
         <td>No</td>
         <td>NIP</td>
         <td>Nama</td>
         <td>Email</td>
         <td>Jabatan</td>
      </tr>
      <?php $i =1;?>
      <?php foreach ($pegawai as $p ) : ?>
         <tr>
            <td><?= $i ?></td>
            <td><?= $p["nip"]?></td>
            <td><?= $p["nama"] ?></td>
            <td><?= $p["email"]?></td>
            <td><?= $p["jabatan"] ?></td>
         </tr>
         <?php $i++; ?>
      <?php endforeach; ?>
   </table>

</body>

</html>