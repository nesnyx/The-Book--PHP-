<?php
include "../layout/header.php";
require '../../functions.php';
// Relasi dari tabel
$buku = query("SELECT master_buku.kode_buku as kode_buku, master_buku.judul_buku as judul_buku, master_buku.kategori as kategori, master_buku.pengarang as pengarang, master_buku.penerbit as penerbit, master_buku.tahun as tahun, master_buku.deskripsi as deskripsi, master_buku.harga as harga, kategori.nama_kategori as nama_kategori, pengarang.nama_pengarang as nama_pengarang, penerbit.nama_penerbit as nama_penerbit 
FROM penerbit INNER JOIN(pengarang INNER JOIN(kategori INNER JOIN master_buku
ON kategori.kode_kategori = master_buku.kategori)
ON pengarang.kode_pengarang = master_buku.pengarang)
ON penerbit.kode_penerbit = master_buku.penerbit");

$total = count(query("SELECT * FROM master_buku"));
$no = '';
?>


<div class="container my-5">
  <h2 class="light mb-5 center">Data Buku</h2>
  <!-- Pesan yang akan muncul ketika berhasil menghapus data -->
  <?php if (isset($_GET['remove'])) { ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        <span class="sr-only">Close</span>
      </button>
      <strong>Data</strong> Berhasil dihapus
    </div>
  <?php } ?>
  <!-- Pesan yang akan muncul ketika berhasil menambah data -->
  <?php if (isset($_GET['success'])) { ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        <span class="sr-only">Close</span>
      </button>
      <strong>Data</strong> Berhasil ditambah
    </div>
  <?php } ?>
  <!-- Pesan yang akan muncul ketika berhasil mengedit data -->
  <?php if (isset($_GET['change'])) { ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        <span class="sr-only">Close</span>
      </button>
      <strong>Data</strong> Berhasil diedit
    </div>
  <?php } ?>
  
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Kode Buku</th>
        <th>Judul Buku</th>
        <th>Kategori</th>
        <th>Pengarang</th>
        <th>Penerbit</th>
        <th>Tahun</th>
        <th>Deskripsi</th>
        <th>Harga</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <?php if ($total > 0) : ?>
      <?php foreach ($buku as $row) : ?>
        <tbody>
          <tr>
            <td>B-<?= $row['kode_buku']; ?></td>
            <td><?= $row['judul_buku']; ?></td>
            <td><?= $row['nama_kategori']; ?></td>
            <td><?= $row['nama_pengarang']; ?></td>
            <td><?= $row['nama_penerbit']; ?></td>
            <td><?= $row['tahun']; ?></td>
            <td><?= $row['deskripsi']; ?></td>
            <td>Rp. <?= number_format($row['harga']); ?></td>
            <td>
              <a href="edit.php?kode_buku=<?= $row['kode_buku']; ?>" class="btn btn-warning">Edit</a>
              <a href="hapus.php?id=<?= $row['kode_buku']; ?>" class="btn btn-danger">Hapus</a>
            </td>
          </tr>
        </tbody>
      <?php endforeach; ?>
    <?php else : ?>
      <tbody>
        <tr>
          <td colspan="9">Data tidak ditemukan di database</td>
        </tr>
      </tbody>
    <?php endif; ?>
  </table>

  <div class="row">
    <div class="col-10">
      <h4>Jumlah Data: <?= $total; ?></h4>
    </div>
    <div class="col-2">
      <a class="btn btn-primary" href="add.php" role="button">Tambah Data</a>
    </div>
  </div>
</div>
<?php
include "../layout/footer.php";
?>