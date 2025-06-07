<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Kegiatan</title>
</head>
<body>
    <h2>Daftar Kegiatan</h2>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>NO</th>
                <th>Kegiatan</th>
                <th>Foto</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $query = mysqli_query($conn, "SELECT * FROM kegiatan");
            while ($data = mysqli_fetch_assoc($query)) {
                echo "<tr>
                        <td>{$no}</td>
                        <td><strong>{$data['judul']}</strong><br>{$data['deskripsi']}</td>
                        <td><img src='{$data['foto']}' width='150'></td>
                      </tr>";
                $no++;
            }
            ?>
        </tbody>
    </table>
</body>
</html>
