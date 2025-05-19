<!DOCTYPE html>
<html>
<head>
    <title>Hasil Jadwal Matkul</title>
</head>
<body>
    <a href='form_tambah.php'>Tambah</a>
    <table border="1">
        <thead>
            <tr>
                <th>No.</th>
                <th>Mata Kuliah</th>
                <th>Hari</th>
                <th>Jam</th>
                <th>Ruangan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            include "koneksi.php";

            // JOIN tabel jadwal dengan matkul
            $sql = "SELECT jadwal.*, matkul.nm_matkul 
                    FROM jadwal 
                    JOIN matkul ON jadwal.id_matkul = matkul.id_matkul";

            $b = $koneksi->query($sql);
            while ($c = $b->fetch_array()) { ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $c['nm_matkul']; ?></td>
                    <td><?php echo $c['hari']; ?></td>
                    <td><?php echo $c['jam']; ?></td>
                    <td><?php echo $c['ruang']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
