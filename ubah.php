<?php include "koneksi.php"; 
$id = $_GET['id'];
$sql = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_barang='$id'");
$data = mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Ubah Barang</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { background: linear-gradient(135deg, #84fab0, #8fd3f4); min-height: 100vh; }
    .container { margin-top: 100px; max-width: 600px; }
    .card { border-radius: 20px; padding: 20px; }
  </style>
</head>
<body>
<div class="container">
  <div class="card">
    <h3 class="text-center">✏️ Ubah Barang</h3>
    <form method="POST">
      <div class="mb-3">
        <label>Nama Barang</label>
        <input type="text" name="nama_barang" class="form-control" value="<?= $data['nama_barang']; ?>" required>
      </div>
      <div class="mb-3">
        <label>Stok</label>
        <input type="number" name="stok" class="form-control" value="<?= $data['stok']; ?>" required>
      </div>
      <div class="mb-3">
        <label>Harga</label>
        <input type="number" name="harga" class="form-control" value="<?= $data['harga']; ?>" required>
      </div>
      <button type="submit" name="ubah" class="btn btn-primary w-100">Simpan Perubahan</button>
      <a href="index.php" class="btn btn-secondary w-100 mt-2">Kembali</a>
    </form>
    <?php
    if (isset($_POST['ubah'])) {
      $nama = $_POST['nama_barang'];
      $stok = $_POST['stok'];
      $harga = $_POST['harga'];

      $sql = "UPDATE barang SET nama_barang='$nama', stok='$stok', harga='$harga' WHERE id_barang='$id'";
      mysqli_query($koneksi, $sql);
      echo "<script>alert('Data berhasil diubah!');window.location='index.php';</script>";
    }
    ?>
  </div>
</div>
</body>
</html>
