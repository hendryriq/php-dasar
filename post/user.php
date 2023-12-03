<?php
if (isset($_POST['add'])) {
  $nama = $_POST['nama'];
  $harga = $_POST['harga'];
  $qty = $_POST['qty'];
  $kategori = $_POST['kategori'];
  $alamat = $_POST['alamat'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User View</title>
</head>

<body>
  <h1>Selamat Datang, <?= $_REQUEST["username"] ?></h1>
  <table border="1px">
    <thead cellSpacing="0">
      <tr>
        <td>Nama Produk</td>
        <td>Harga</td>
        <td>Qty</td>
        <td>Kategori</td>
        <td>Alamat</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $nama ?></td>
        <td><?php echo $harga ?></td>
        <td><?php echo $qty ?></td>
        <td><?php echo $kategori ?></td>
        <td><?php echo $alamat ?></td>
      </tr>
    </tbody>
  </table>
  <br><br>


  <table>
    <form action="" method="post">
      <tr>
        <td><label for="nama">Nama Produk</label></td>
        <td><input type="text" name="nama" id="nama"></td>
      </tr>
      <tr>
        <td><label for="harga">Harga</label></td>
        <td><input type="text" name="harga" id="harga"></td>
      </tr>
      <tr>
        <td><label for="qty">Qty</label></td>
        <td><input type="text" name="qty" id="qty"></td>
      </tr>
      <tr>
        <td><label for="kategori">Kategori</label></td>
        <td><input type="text" name="kategori" id="kategori"></td>
      </tr>
      <tr>
        <td><label for="alamat">Alamat</label></td>
        <td><textarea name="alamat" id="alamat"></textarea></td>
      </tr>
      <tr>
        <td colspan="2"><button type="submit" name="add">Submit</button></td>
      </tr>
    </form>
  </table>
  <br><br>
  <button><a href="login.php">Logout</a></button>
</body>
</html>