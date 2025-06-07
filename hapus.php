<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = mysqli_query($conn, "DELETE FROM kegiatan WHERE id = '$id'");

if ($query) {
    header("Location: view.php");
} else {
    echo "Gagal menghapus data.";
}
?>
