<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Kegiatan</title>
</head>
<body>
    <h2>Form Tambah Kegiatan</h2>
    <form method="POST">
        <label>Judul:</label><br>
        <input type="text" name="judul" required><br><br>

        <label>Deskripsi:</label><br>
        <textarea name="deskripsi" required></textarea><br><br>

        <label>Foto (path relatif):</label><br>
        <input type="text" name="foto" placeholder="contoh: Gambar/G2.jpg" required><br><br>

        <input type="submit" name="simpan" value="Simpan">
    </form>

    <?php
    if (isset($_POST['simpan'])) {
        $judul = $_POST['judul'];
        $deskripsi = $_POST['deskripsi'];
        $foto = $_POST['foto'];

        $query = mysqli_query($conn, "INSERT INTO kegiatan (judul, deskripsi, foto) VALUES ('$judul', '$deskripsi', '$foto')");
        if ($query) {
            echo "<p>Berhasil disimpan. <a href='view.php'>Lihat Data</a></p>";
        } else {
            echo "Gagal menyimpan data.";
        }
    }
    ?>
</body>
</html>
