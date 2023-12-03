<?php
$satu = ["Mangga", "Strawberry", "Anggur"];
$daftarMakanan = [
         ["Mie Ayam", "Bakso", "Sate", "Steak"],
         ["Nasi Bakar", "Bakso", "Sate", "Steak"]
];

$daftarProduk = [
         ["nama_produk" => "keyboard", "kode_produk" => 01, "harga" => "Rp. 150.000", "qty" => "100 pcs", "kategori" => "Laptop And Komputer"],
         ["nama_produk" => "Mouse", "kode_produk" => 01, "harga" => "Rp. 250.000", "qty" => "100 pcs", "kategori" => "Laptop And Komputer"],
         ["nama_produk" => "Laptop", "kode_produk" => 01, "harga" => "Rp. 15.000.000", "qty" => "100 pcs", "kategori" => "Laptop And Komputer"],
         ["nama_produk" => "T-Shirt", "kode_produk" => 01, "harga" => "Rp. 100.000", "qty" => "100 pcs", "kategori" => "Laptop And Komputer"],
         ["nama_produk" => "Colokan", "kode_produk" => 01, "harga" => "Rp. 50.000", "qty" => "100 pcs", "kategori" => "Laptop And Komputer"]
];

$daftarSiswa = [
         ["nama" => "Muhammad Ariq Hendry", "username" => "hendryriq", "email" => "hendryriq@gmail.com", "nilai" => ["matematika" => 100, "fisika" => 100, "bahasa" => 100]],
         ["nama" => "Ervin Howel", "username" => "antonette", "email" => "shanna@gmail.com", "nilai" => ["matematika" => 80, "fisika" => 40, "bahasa" => 69]],
         ["nama" => "Clementine Bauch", "username" => "samantha", "email" => "nathan@gmail.com", "nilai" => ["matematika" => 88, "fisika" => 50, "bahasa" => 96]],
         ["nama" => "Patricia Lebsack", "username" => "karianne", "email" => "juliane@gmail.com", "nilai" => ["matematika" => 87, "fisika" => 80, "bahasa" => 49]],
         ["nama" => "Chelshey Deitrich", "username" => "kamren", "email" => "lucio@gmail.com", "nilai" => ["matematika" => 40, "fisika" => 90, "bahasa" => 20]],
]

?>

<!DOCTYPE html>
<html>

<head>
         <title>Judul</title>
</head>

<body>
         <h1>Daftar Satu</h1>
         <ol>
                  <?php foreach ($satu as $one) : ?>
                           <li><?= $one ?></li>
                  <?php endforeach ?>
         </ol>

         <h1>Daftar Makanan</h1>

         <?php foreach ($daftarMakanan as $makanan) : ?>
                  <ol>
                           <li><?= $makanan[0] ?></li>
                           <li><?= $makanan[1] ?></li>
                  </ol>
         <?php endforeach ?>

         <h1>Daftar Produk</h1>

         <?php foreach ($daftarProduk as $produk) : ?>
                  <ul style="list-style-type: number;">
                           <li><?= $produk["nama_produk"] ?></li>
                           <li><?= $produk["harga"] ?></li>
                           <li><?= $produk["qty"] ?></li>
                           <li><?= $produk["kategori"] ?></li>
                  </ul>
         <?php endforeach; ?>

         <h3>Daftar Siswa</h3>
         <?php foreach ($daftarSiswa as $siswa) : ?>
                  <ul style="list-style-type: number;">
                           <li><?= $siswa["nama"] ?></li>
                           <li><?= $siswa["username"] ?></li>
                           <li><?= $siswa["email"] ?></li>
                           <li>Nilai Matematika = <?= $siswa["nilai"]["matematika"] ?>,
                                    Nilai Fisika = <?= $siswa["nilai"]["fisika"] ?>,
                                    Nilai Bahasa = <?= $siswa["nilai"]["bahasa"] ?> </li>

                  </ul>
         <?php endforeach; ?>
</body>

</html>