<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Data Barang</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { background: linear-gradient(135deg, #74ebd5, #ACB6E5); min-height: 100vh; }
    .container { margin-top: 50px; }
    .card { border-radius: 20px; box-shadow: 0 8px 20px rgba(0,0,0,0.2); }
    .btn-custom { border-radius: 30px; }
    table th { background: #6c63ff; color: white; }
    table tr:hover { background: #f1f1f1; }
  </style>
</head>
<body>
<div class="container">
  <div class="card p-4">
    <h2 class="text-center mb-4">📦 Data Barang</h2>
    <a href="tambah.php" class="btn btn-success btn-custom mb-3">➕ Tambah Barang</a>
    <table class="table table-bordered table-striped">
      <tr>
        <th>ID</th>
        <th>Nama Barang</th>
        <th>Stok</th>
        <th>Harga</th>
        <th>Aksi</th>
      </tr>
      <?php
      $sql = "SELECT * FROM barang ORDER BY id_barang DESC";
      $query = mysqli_query($koneksi, $sql);
      while ($data = mysqli_fetch_array($query)) {
      ?>
      <tr>
        <td><?= $data['id_barang']; ?></td>
        <td><?= $data['nama_barang']; ?></td>
        <td><?= $data['stok']; ?></td>
        <td>Rp <?= number_format($data['harga'],0,',','.'); ?></td>
        <td>
          <a href="ubah.php?id=<?= $data['id_barang']; ?>" class="btn btn-warning btn-sm btn-custom">✏️ Ubah</a>
          <a href="hapus.php?id=<?= $data['id_barang']; ?>" class="btn btn-danger btn-sm btn-custom" onclick="return confirm('Yakin hapus?')">🗑️ Hapus</a>
        </td>
      </tr>
      <?php } ?>
    </table>
  </div>
</div>
</body>
</html>
