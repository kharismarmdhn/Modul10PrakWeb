<!DOCTYPE html>
<html>
    <head>
        <title>INSERT DATA JADWAL MATKUL</title>
    </head>
    <body>
        <form action="aksi_jadwal.php" method="POST">
            <table>
                <tr>
                    <td>Hari :</td>
                    <td><select name="hari" required>
                        <option value="Senin">Senin</option>
                        <option value="Selasa">Selasa</option>
                        <option value="Rabu">Rabu</option>
                        <option value="Kamis">Kamis</option>
                        <option value="Jumat">Jumat</option>
                    </select>
                </td>
                </tr>
                <tr>
                    <td>Jam :</td>
                    <td><input type="text" name="jam" required></td>
                </tr>
                <tr>
                    <td>Ruangan :</td>
                    <td><input type="text" name="ruang" required></td>
                </tr>
                 <tr>
                    <td>Mata Kuliah :</td>
                    <td>
                    <select name="matkul" required>
                        <?php
                        include 'koneksi.php'; // Menghubungkan ke database

                        $query = "SELECT id_matkul, nm_matkul FROM matkul";
                        $result = mysqli_query($koneksi, $query);

                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<option value='" . $row['id_matkul'] . "'>" . $row['nm_matkul'] . "</option>";
                        }
                        ?>
                    </select>
                </td>
                </tr>
                <tr>
                    <td><input type="submit" value="SAVE"></td>
                    <td><input type="reset" value="CANCEL"></td>
                </tr>
            </table>
        </form>
    </body>
</html>