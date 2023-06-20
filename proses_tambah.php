<?php
include('koneksi.php');

$nama = $_POST['nama'];
$nodon = $_POST['nodon'];
$paket = $_POST['paket'];
$kategori = $_POST['kategori'];
$nominal = $_POST['nominal'];

if(isset($_POST['proses'])){
    mysqli_query($conn,"insert into data_donatur set
    Nama = '$_POST[nama]',
    nodon = '$_POST[nodon]',
    paket = '$_POST[paket]',
    kategori = '$_POST[kategori]',
    nominal = '$_POST[nominal]'");

    echo "<script>alert('Terima Kasih, Data berhasil disimpan!');window.location='index.php';</script>";
}
else{
    echo "<script>alert('Data anda gagal disimpan, Coba lagi!');window.location='index.php';</script>";
}
?>