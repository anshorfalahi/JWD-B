<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Daftar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
  <div class="container" style="background-color: cyan; padding: 20px; border-radius: 10px; margin-top: 13rem;"> 
    <h2>Formulir Siswa Baru</h2>
    <form action="proses-form.php" method="POST">
      <label class="form-label" for="nama">Nama Lengkap: </label>
      <input class="form-control" type="text" name="nama" id="nama" required>
      <br>
      <label class="form-label" for="alamat">Alamat: </label>
      <input class="form-control" type="text" name="alamat" id="alamat" required>
      <br>

      <label for="jenis_kelamin">Jenis Kelamin: </label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="laki-laki" required> Laki-laki
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="perempuan" required> Perempuan
      </div>
      <br>
      <label for="agama">Agama: </label>
      <select class="form-select" name="agama" id="agama" required>
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Katolik">Katolik</option>
        <option value="Hindu">Hindu</option>
        <option value="Budha">Budha</option>
      </select>
      <br>
      <label class="form-label"  for="sekolah_asal">Sekolah Asal: </label>
      <input class="form-control" type="text" name="sekolah_asal" id="sekolah_asal" required>

      <input type="submit" value="Daftar" name="daftar" class="btn btn-primary mt-3">
      <a href="pendaftaran.php" class="btn btn-danger mt-3">Batal</a>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>