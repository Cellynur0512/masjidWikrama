<?php
include ('koneksi.php');

if(isset($_POST['proses'])){
    mysqli_query($conn,"insert into pesan set
    Nama = '$_POST[nama]',
    email = '$_POST[email]',
    pesan = '$_POST[pesan]'");

    echo "<script>alert('Pesan anda telah dikirim');window.location='index.php';</script>";
}
else{
    echo "<script>alert('Gagal mengirim pesan, Coba lagi!!');window.location='index.php';</script>";
}