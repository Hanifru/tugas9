<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tambah Barang</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { background: linear-gradient(135deg, #F6D365, #FDA085); min-height: 100vh; }
    .container { margin-top: 100px; max-width: 600px; }
    .card { border-radius: 20px; padding: 20px; }
  </style>
</head>
<body>
<div class="container">
  <div class="card">
    <h3 class="text-center">➕ Tambah Barang</h3>
    <form method="POST">
      <div class="mb-3">
        <label>Nama Barang</label>
        <input type="text" name="nama_barang" class="form-control" required>
      </div>
      <div class="mb-3">
        <label>Stok</label>
        <input type="number" name="stok" class="form-control" required>
      </div>
      <div class="mb-3">
        <label>Harga</label>
        <input type="number" name="harga" class="form-control" required>
      </div>
      <button type="submit" name="simpan" class="btn btn-success w-100">Simpan</button>
      <a href="index.php" class="btn btn-secondary w-100 mt-2">Kembali</a>
    </form>
    <?php
    if (isset($_POST['simpan'])) {
      $nama = $_POST['nama_barang'];
      $stok = $_POST['stok'];
      $harga = $_POST['harga'];

      $sql = "INSERT INTO barang (nama_barang, stok, harga) VALUES ('$nama','$stok','$harga')";
      mysqli_query($koneksi, $sql);
      echo "<script>alert('Data berhasil disimpan!');window.location='index.php';</script>";
    }
    ?>
  </div>
</div>
</body>
</html>
