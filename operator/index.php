<?php
//Operator pada php

//Operator aritmatika, +,-,*,/,%
$angka_satu = 10;
$angka_dua = 23;
$hasil = $angka_satu + $angka_dua;

echo "Hasil dari penjumlahan angka satu dan dua adalah = $hasil <br>";

//Operator assigment, =, +=, -=, *=, dll
$satu = 80;
$satu *=63;
echo "Hasil dari Operator assignment : $satu <br>";

//Operator perbandingan , <, >, <=, =>, =
$coba = 10;
if($coba < 5 ){
         echo "true <br>";
}else{
         echo "false <br><br>";
}

//Operator Logika, $$ || !

$nilai = 9;
$nilai2 = 3; 
if ($nilai < 10 && $nilai >5 ) {
         echo "lulus <br>";
} else {
         echo "tidak lulus <br>";
}
if ($nilai2 < 10 || $nilai2 > 5) {
         echo "lulus <br>";
} else {
         echo "tidak lulus <br>";
}

// $c = $coba && $coba2;
// echo "hasil and adalah $c <br>";

// $a = true;
// $b = false;

// $d = $a && $b;
// printf("%b && %b = %b", $a, $b, $d);
// echo "<hr>";

$score = 0;
$score++;
$score++;
$score++;

echo $score;


?>
