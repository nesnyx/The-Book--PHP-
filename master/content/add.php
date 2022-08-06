<?php
// untuk memanggil file header.php
include "../layout/header.php";
// untuk memanggil file functions.php
require '../../functions.php';
// supaya bisa memanggil isi2 yang ada di dalam tabel
$kategori = query("SELECT * FROM kategori");
$penerbit = query("SELECT * FROM penerbit");
$pengarang = query("SELECT * FROM pengarang");

?>
<div class="container">
  <h1>Tambah Data</h1>
  <!-- ketika tombol yg bernama submit di click maka akan menjalan fungsi tambahbuku(bisa diliat di file functions.php) -->
  <?php
  if (isset($_POST['submit'])) {
    if (tambahbuku($_POST) > 0) {
      // untuk pindah kehalaman index.php dan unuk mengirimkan pesan kalau pesan sudah ditambah (silahkan cek di file index.php)
      echo '<script>window.location="index.php?success=Tambah-data"</script>';
    } else {
      // untuk menampilkan pesan kalau ada kegagalan dalam menambahkan data
      echo '<div class="alert alert-danger"><strong>Data Buku</strong> Gagal ditambahkan!</div>';
    }
  }
  ?>
  <form action="add.php" method="post">
    <div class="form-group">
      <label for="judul_buku">Judul Buku</label>
      <input type="text" class="form-control" name="judul_buku" id="judul_buku" placeholder="Judul">
    </div>
    <div class="form-group">
      <label for="kategori">Kategori</label>
      <select class="form-control" name="kategori" id="kategori">
        <option value="">Silahkan Pilih Kategori</option>
        <!-- untuk menampilkan data yang ada di tabel kategori (silahkan cek database) -->
        <?php foreach ($kategori as $row) : ?>
          <option value="<?= $row['kode_kategori'] ?>"><?= $row['nama_kategori'] ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="form-group">
      <label for="pengarang">Pengarang</label>
      <select class="form-control" name="pengarang" id="pengarang">
        <option value="">Silahkan Pilih Pengarang</option>
        <!-- untuk menampilkan data yang ada di tabel pengarang (silahkan cek database) -->
        <?php foreach ($pengarang as $row) : ?>
          <option value="<?= $row['kode_pengarang'] ?>"><?= $row['nama_pengarang'] ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="form-group">
      <label for="penerbit">Penerbit</label>
      <select class="form-control" name="penerbit" id="penerbit">
        <option value="">Silahkan Pilih Penerbit</option>
        <!-- untuk menampilkan data yang ada di tabel penerbit (silahkan cek database) -->
        <?php foreach ($penerbit as $row) : ?>
          <option value="<?= $row['kode_penerbit'] ?>"><?= $row['nama_penerbit'] ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="form-group">
      <label for="tahun">Tahun</label>
      <input type="text" class="form-control" name="tahun" id="tahun" placeholder="Tahun">
    </div>
    <div class="form-group">
      <label for="deskripsi">Deskripsi</label>
      <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label for="harga">Harga</label>
      <input type="text" class="form-control" name="harga" id="harga" placeholder="Harga">
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
  </form>
</div>
<!-- untuk memanggil file footer.php -->
<?php
include "../layout/footer.php";
?>