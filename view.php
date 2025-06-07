<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>View Kegiatan</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Tambah CSS -->
</head>
<body>
    <div class="container">
        <h2>Daftar Kegiatan</h2>
        <a href="tambah.php" class="btn">+ Tambah Kegiatan Baru</a><br><br>

        <table class="tabel-kegiatan">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
            include 'koneksi.php';
            $no = 1;
            $query = mysqli_query($conn, "SELECT * FROM kegiatan");
            while ($data = mysqli_fetch_assoc($query)) {
                echo "<tr>
                        <td>{$no}</td>
                        <td>{$data['judul']}</td>
                        <td>{$data['deskripsi']}</td>
                        <td><img src='{$data['foto']}' width='100'></td>
                        <td>
                            <a href='hapus.php?id={$data['id']}' class='hapus'>Hapus</a>
                        </td>
                      </tr>";
                $no++;
            }
            ?>
            </tbody>
        </table>
    </div>

    <script src="js/main.js"></script> <!-- Tambah JS -->
</body>
</html>
