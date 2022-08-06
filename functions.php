<?php

require 'koneksi.php';

function query($query)
{
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}
function tambahbuku($data)
{
  global $conn;
  $judul_buku = $data["judul_buku"];
  $kategori = $data["kategori"];
  $pengarang = $data["pengarang"];
  $penerbit = $data["penerbit"];
  $tahun = $data["tahun"];
  $deskripsi = $data["deskripsi"];
  $harga = $data["harga"];

  $query = "INSERT into master_buku (judul_buku, kategori, pengarang, penerbit, tahun, deskripsi, harga) VALUES ('$judul_buku','$kategori','$pengarang','$penerbit','$tahun','$deskripsi','$harga')";
  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}

function hapusbuku($id)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM master_buku WHERE kode_buku=$id");
  return mysqli_affected_rows($conn);
}

function editbuku($edit)
{
  global $conn;
  $kode_buku = htmlspecialchars($edit["kode_buku"]);
  $judul_buku = $edit["judul_buku"];
  $kategori = $edit["kategori"];
  $pengarang = $edit["pengarang"];
  $penerbit = $edit["penerbit"];
  $tahun = $edit["tahun"];
  $deskripsi = $edit["deskripsi"];
  $harga = $edit["harga"];

  $query = "UPDATE master_buku SET judul_buku = '$judul_buku', kategori = '$kategori', pengarang = '$pengarang', penerbit = '$penerbit', tahun = '$tahun', deskripsi = '$deskripsi', harga = '$harga' WHERE kode_buku = $kode_buku";
  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}
