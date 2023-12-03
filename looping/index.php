<?php
//For
$data = 0;
for ($i = 0; $i < 5; $i++) {
  echo "Angka : $i <br>";
}

$dataArray = [10, "Cobra", 5.5, "Senin"];
for ($i = 0; $i < count($dataArray); $i++) {
  echo "Hasil data : $i <br>";
}
while ($data <= 10) {
  echo "data diatas : $data <br>";
  $data++;
}

$count = 5;
do {
  echo "Ini adalah do while " . $count . "<br>";
  $count++;
}
while ($count <= 3) ;


$makanan = array("Bakso", "Mie ayam", "Bubur ayam", "Sate ayam");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div>
    <h1>Daftar makanan</h1>

    <?php
    $food = array("Bakso", "Mie ayam", "Bubur ayam", "Sate ayam");
    echo "<ul>";
    foreach ($food as $foods)
      echo "<li>$foods </li>";
    echo "</ul>";
    ?>

    <h3>Menggunakan For</h3>
    <ul>
      <?php for ($i = 0; $i < count($food); $i++) : ?>
        <li><?= $food[$i] ?></li>
      <?php endfor; ?>
    </ul>

    <h3>Menggunakan foreach</h3>
    <ul>
      <?php foreach ($food as $foods) : ?>
        <li><?= $foods ?></li>
      <?php endforeach; ?>
    </ul>
  </div>


</body>

</html>