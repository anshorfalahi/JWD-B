<?php 
  include("koneksi.php");

  $id = $_POST['id'];
  
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $agama = $_POST["agama"];
    $sekolah_asal = $_POST["sekolah_asal"];

    $sql = "UPDATE pendaftaran SET nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin', agama='$agama', sekolah_asal='$sekolah_asal' WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
      header("Location: pendaftaran.php?status=sukses_edit");
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
  }
?>