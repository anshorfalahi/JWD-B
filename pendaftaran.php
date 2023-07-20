<?php 
  include("koneksi.php");

  $sql = "SELECT * FROM pendaftaran";

  $result = mysqli_query($conn, $sql);
?>

  <html>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <body>
  <div class="container" style="background-color: cyan; padding: 20px; border-radius: 10px; margin-top: 13rem;"> 
    <h2>Siswa Yang Mendaftar</h2>
    <a href="form-daftar.php" class="btn btn-primary mb-2">[+] Tambah Data</a>
    <a href="index.php" class="btn btn-success mb-2">Kembali</a>
    <table class="table table-striped">
      <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>
        <th>Agama</th>
        <th>Sekolah Asal</th>
        <th>Aksi</th>
      </tr>
      <?php
        if(mysqli_num_rows($result) > 0) {
          $i = 1;
          while($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
              <td><?php echo $i ?></td>
              <td><?php echo $row['nama']; ?></td>
              <td><?php echo $row['alamat']; ?></td>
              <td><?php echo $row['jenis_kelamin']; ?></td>
              <td><?php echo $row['agama']; ?></td>
              <td><?php echo $row['sekolah_asal']; ?></td>
              <td>
                <a href="form-edit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a>
                <a href="hapus.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Hapus</a>
            </tr>
            <?php
            $i++;
          }
        }
      ?>
    </table>
    <?php
      echo "Total Data: " . mysqli_num_rows($result) . "<br>";
      if (isset($_GET['status'])) {
        if ($_GET['status'] == 'sukses_edit'){
          echo "Data berhasil diubah";
        }else{
          echo "Data gagal diubah";
        }
      }
    ?>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
  </html>

<?php
  if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      print_r($row);
    }
  }
  mysqli_close($conn);
?>