<?php include "../koneksi/db.php"; ?> 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
  <title>Data Mahasiswa</title> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous"/>
</head> 
<body class="container mt-5"> 
  <h2>Data Mahasiswa</h2> 
  <a href="proses.php" class="btn btn-primary mb-3">+ Tambah 
Mahasiswa</a> 
  <table class="table table-bordered"> 
    <thead class="table-dark"> 
      <tr><th>No</th><th>Nama</th><th>NIM</th><th>Aksi</th></tr> 
    </thead> 
    <tbody> 
      <?php 
      $no = 1; 
      $result = mysqli_query($conn, "SELECT * FROM mahasiswa"); 
      while ($row = mysqli_fetch_assoc($result)) { 
        echo "<tr> 
                <td>$no</td> 
                <td>{$row['nama']}</td> 
                <td>{$row['nim']}</td> 
                <td> 
                  <a href='edit.php?id={$row['id']}' class='btn btn warning btn-sm'>Edit</a> 
                  <a href='delete.php?id={$row['id']}' class='btn btn danger btn-sm' onclick='return confirm(\"Hapus data  ini?\")'>Hapus</a> 
                </td> 
              </tr>"; 
        $no++; 
      } 
      ?> 
    </tbody> 
  </table> 
</body> 
</html>