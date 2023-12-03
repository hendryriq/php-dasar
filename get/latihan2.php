<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hasil Get Data</title>
</head>

<body>
  <h1>Detail Produk</h1>
  <table border="1px" cellSpacing="0">
    <tr>
      <td>Nama Produk</td>
      <td>Harga</td>
      <td>Qty</td>
      <td>Kategori</td>
      <td>Alamat</td>
    </tr>
    <tr>
      <td><?= $_GET["nama_produk"] ?></td>
      <td><?= $_GET["harga"] ?></td>
      <td><?= $_GET["qty"] ?></td>
      <td><?= $_GET["kategori"] ?></td>
      <td><?= $_GET["alamat"] ?></td>
    </tr>
  </table>

</body>

</html>