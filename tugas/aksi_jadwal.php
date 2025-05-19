<?php
include "koneksi.php";

//buat ambil data dari form
$id_matkul = $_POST['matkul'];
$hari = $_POST['hari'];
$jam = $_POST['jam'];
$ruang = $_POST['ruang'];

//simpan tb_jadwal
$sql="INSERT INTO jadwal (id_matkul, hari, jam, ruang) VALUES ('$id_matkul', '$hari', '$jam', '$ruang')";

$a=$koneksi->query($sql);
    
if($a === true) {
    header('location: viewmatkul.php');
}else {
    echo "erooooorr";
}
?>