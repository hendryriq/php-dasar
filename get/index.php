<?php
$daftarProduk = [
  [
    "nama_produk" => "keyboard", "kode_produk" => 01,
    "harga" => "Rp. 150.000", 
    "qty" => "100 pcs", 
    "kategori" => "Laptop And Komputer",
    "alamat" => [
      "desa" => "tiga",
      "kelurahan" => "Cikolle",
      "kabupaten" => "Bekasi",
    ]
  ],
  [
    "nama_produk" => "Mouse", "kode_produk" => 01, "harga" => "Rp. 250.000", "qty" => "100 pcs", "kategori" => "Laptop And Komputer",
    "alamat" => [
      "desa" => "ada",
      "kelurahan" => "Halo",
      "kabupaten" => "Makan",
    ]
  ],
  [
    "nama_produk" => "Laptop", "kode_produk" => 01, "harga" => "Rp. 15.000.000", "qty" => "100 pcs", "kategori" => "Laptop And Komputer",
    "alamat" => [
      "desa" => "tiga",
      "kelurahan" => "Cikolle",
      "kabupaten" => "Bekasi",
    ]
  ],
  [
    "nama_produk" => "T-Shirt", "kode_produk" => 01, "harga" => "Rp. 100.000", "qty" => "100 pcs", "kategori" => "Laptop And Komputer",
    "alamat" => [
      "desa" => "tiga",
      "kelurahan" => "Cikolle",
      "kabupaten" => "Bekasi",
    ]
  ],
  [
    "nama_produk" => "Colokan", "kode_produk" => 01, "harga" => "Rp. 50.000", "qty" => "100 pcs", "kategori" => "Laptop And Komputer",
    "alamat" => [
      "desa" => "tiga",
      "kelurahan" => "Cikolle",
      "kabupaten" => "Bekasi",
    ]
  ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Get data Using method GET</title>
</head>

<body>
  <h1>Daftar Produk</h1>
  <ul style="list-style-type: none;">
    <?php foreach ($daftarProduk as $produk) : ?>
      <li>
        <a href="latihan2.php?nama_produk=<?= $produk["nama_produk"] ?>
        &harga=<?= $produk["harga"] ?>&qty=<?= $produk["qty"] ?>
        &kategori=<?= $produk["kategori"] ?>
        &alamat=<?= $produk["alamat"]["kabupaten"] ?>" 
        style="text-decoration: none;">
        <?= $produk["nama_produk"] ?></a>
      </li>
    <?php endforeach; ?>
  </ul>
</body>

</html>