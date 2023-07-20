<?php 
  $host = "localhost";
  $username = "root";
  $password = "";
  $database = "siswa";
  
  // Membuat koneksi ke database
  $conn = mysqli_connect($host, $username, $password, $database);
  if (!$conn) {
      die("Koneksi gagal: " . mysqli_connect_error());
  }
?>