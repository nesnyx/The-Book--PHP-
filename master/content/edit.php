<?php
include "../layout/header.php";
require '../../functions.php';

$kategori = query("SELECT * FROM kategori");
$penerbit = query("SELECT * FROM penerbit");
$pengarang = query("SELECT * FROM pengarang");
if (isset($_GET['kode_buku'])) {
  $id = $_GET['kode_buku'];
}
$buku = query("SELECT * FROM master_buku WHERE kode_buku=$id")[0];
?>

<div class="container">
  <h1>Edit Data</h1>
  <?php
  if (isset($_POST['submit'])) {
    if (editbuku($_POST) > 0) {
      // echo '<div class="alert alert-success"><strong>Data Siswa</strong> berhasil ditambahkan!</div>';
      echo '<script>window.location="index.php?change=edit-data"</script>';
    } else {
      echo '<div class="alert alert-danger"><strong>Data Siswa</strong> Gagal ditambahkan!</div>';
    }
  }
  ?>
  <form action="" method="post">
    <div class="form-group">
      <input type="hidden" class="form-control" name="kode_buku" value="<?= $buku['kode_buku']; ?>" id="kode_buku">
    </div>
    <div class="form-group">
      <label for="judul_buku">Judul Buku</label>
      <input type="text" class="form-control" name="judul_buku" id="judul_buku" placeholder="Judul" value="<?= $buku['judul_buku']; ?>">
    </div>
    <div class="form-group">
      <label for="kategori">Kategori</label>
      <select class="form-control" name="kategori" id="kategori">
        <option value="">Silahkan Pilih Kategori</option>
        <?php foreach ($kategori as $row) : ?>
          <option value="<?= $row['kode_kategori'] ?>"><?= $row['nama_kategori'] ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="form-group">
      <label for="pengarang">Pengarang</label>
      <select class="form-control" name="pengarang" id="pengarang">
        <option value="">Silahkan Pilih Pengarang</option>
        <?php foreach ($pengarang as $row) : ?>
          <option value="<?= $row['kode_pengarang'] ?>"><?= $row['nama_pengarang'] ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="form-group">
      <label for="penerbit">Penerbit</label>
      <select class="form-control" name="penerbit" id="penerbit">
        <option value="">Silahkan Pilih Penerbit</option>
        <?php foreach ($penerbit as $row) : ?>
          <option value="<?= $row['kode_penerbit'] ?>"><?= $row['nama_penerbit'] ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="form-group">
      <label for="tahun">Tahun</label>
      <input type="text" class="form-control" name="tahun" id="tahun" placeholder="Tahun" value="<?= $buku['tahun']; ?>">
    </div>
    <div class="form-group">
      <label for="deskripsi">Deskripsi</label>
      <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3"><?= $buku['deskripsi']; ?></textarea>
    </div>
    <div class="form-group">
      <label for="harga">Harga</label>
      <input type="text" class="form-control" name="harga" id="harga" value="<?= $buku['harga']; ?>" placeholder="Harga">
    </div>
    <button type="submit" name="submit" class="btn btn-warning">Edit</button>
  </form>
</div>

<?php
include "../layout/footer.php";
?>