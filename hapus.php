<?php 
  include("koneksi.php");

  $id = $_GET['id'];

  $sql = "DELETE FROM pendaftaran WHERE id=$id";

  if (mysqli_query($conn, $sql)) {
    header("Location: index.php?status=sukses_hapus");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);


?>