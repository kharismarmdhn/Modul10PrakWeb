<!DOCTYPE html>
<html>
    <head>
        <title>Hasil Buku Tamu</title>
    </head>
    <body>
        <a href='form_6.php'>tambah</a>
        <table border="1">
            <tr>
                <thead>
                    <td>No.</td>
                    <th>Nama Tamu</th>
                    <th>Email</th>
                    <th>Komentar</th>
                </thead>
            </tr>
            <tbody>
                <?php
                $no=1;
                include "koneksi.php";
                $a="SELECT * FROM bukutamu";
                $b=$koneksi->query( $a);
                while ($c=$b->fetch_array()) { ?>
                <tr>
                    <th><?php echo $no++; ?></th>
                    <th><?php echo $c['nama']; ?></th>
                    <th><?php echo $c['email']; ?></th>
                    <th><?php echo $c['komentar']; ?></th>
                </tr>
                <?php
                }
                ?>
                </tbody>
            </table>
        </body>
        </html>