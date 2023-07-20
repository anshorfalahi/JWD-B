<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pendaftaran Siswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
  <div class="container" style="background-color: cyan; padding: 20px; border-radius: 10px; margin-top: 13rem;"> 
    <h2 style="text-align: center">Pendaftaran Siswa Baru</h2>
    <h1 style="text-align: center">Digital Talent</h1>
    <h4 style="text-align: center">Menu</h4>
    <div style="text-align: center"> 
      <a type="button" class="btn btn-primary" href="form-daftar.php">Daftar Baru</a>     
      <a type="button" class="btn btn-success" href="pendaftaran.php">Pendaftar</a>
    </div>

    <?php 
      if (isset($_GET['status'])) {
        if ($_GET['status'] == 'sukses') {
          echo "Pendaftaran siswa baru berhasil!";
        }elseif($_GET['status'] == 'sukses_hapus') {
          echo "Data siswa berhasil dihapus!";
        }
        else {
          echo "Pendaftaran gagal!";
        }
      }
    ?>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>