<?php
require_once __DIR__ . '/Database.php';
require_once __DIR__ . '/Buku.php';

$db     = (new Database())->getConnection();
$bukuMD = new buku($db);
$stmt   = $bukuMD->all();
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Perpustakaan Mini</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Daftar Buku</h1>
    <table>
      <thead>
        <tr>
          <th>#</th><th>Judul</th><th>Pengarang</th><th>Tahun</th><th>Kategori</th>
        </tr>
      </thead>
      <tbody>
        <?php $no=1; while ($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
        <tr>
          <td><?= $no++; ?></td>
          <td><?= htmlspecialchars($row['judul']); ?></td>
          <td><?= htmlspecialchars($row['pengarang']); ?></td>
          <td><?= $row['tahun_terbit']; ?></td>
          <td><?= htmlspecialchars($row['kategori']); ?></td>
        </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>
</body>
</html>