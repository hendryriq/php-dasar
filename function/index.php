<?php
date_default_timezone_set("Asia/Jakarta");


function getDataPenduduk($nama, $umur, $alamat, $tgllahir)
{
         return "Selamat Datang $nama dengan umur $umur beralamat di $alamat dan lahir pada $tgllahir";
}

// sapa("", date("h:i"));
function sapa($waktu, $time)
{
         $jam = date("H");
         if (
                  $jam >= 5 and $jam <= 12
         ) {
                  $waktu = "Pagi";
         } else if ($jam >= 12 and $jam <= 18) {
                  $waktu = "Siang";
         } else {
                  $waktu = "malam";
         }
         return "Selamat $waktu Sekarang jam $time";
}

function getTime($waktu, $jam)
{
         if ($waktu == date("h:i:s", mktime(6, 0, 0, 0, 0, 0)) || $waktu <= date("h:i:s", mktime(10, 0, 0, 0, 0, 0))) {
                  $waktu = "Pagi";
                  return "Selamat $waktu, sekarang jam $jam";
         } else if ($waktu > date("h:i:s", mktime(10, 1, 0, 0, 0, 0)) || $waktu <= date("h:i:s", mktime(15, 0, 0, 0, 0, 0))) {
                  $waktu = "Siang";
                  return "Selamat $waktu, sekarang jam $jam";
         } else if ($waktu > date("h:i:s", mktime(15, 1, 0, 0, 0, 0)) || $waktu < date("h:i:s", mktime(6, 0, 0, 0, 0, 0))) {
                  $waktu = "Malam";
                  return "Selamat $waktu, sekarang jam $jam";
         } else {
                  return "waktu gak jelas";
         }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Function pada PHP</title>
</head>

<body>
         <h3>Data Penduduk</h3>
         <ul>
                  <li><?= getDataPenduduk("Ariq", "22", "Ciputat", "21 November 2000") ?></li>
                  <li><?= getDataPenduduk("Budi", "29", "Padang", "1 Januari 2002") ?></li>
                  <li><?= getDataPenduduk("Doremi", "24", "Aceh", date('d m y', time() - 60 * 60 * 24 * 100)) ?></li>
                  <li><?= getDataPenduduk("Makan", "24", "Aceh", date('d m y', time() - 885327200)) ?></li>

         </ul>
         <h3>Tugas</h3>
         <h4><?= sapa("", date("H:i")) ?></h4>
         <h3>Review</h3>
         <h4><?= getTime(date("h:i:s"), date("h:i:s")) ?></h4>
</body>

</html>