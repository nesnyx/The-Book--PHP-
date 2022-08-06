
<?php
require '../../functions.php';
include "../layout/header.php";

$id = $_GET['id'];
if (hapusbuku($id) > 0) {
  echo '<script>window.location="index.php?remove=hapus-data"</script>';
} else {
  echo '<div class="alert alert-danger"><strong>Data Buku</strong> Gagal dihapus!</div>';
}
include "../layout/footer.php";
