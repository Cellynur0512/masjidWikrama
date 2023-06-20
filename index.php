<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="beranda">
        <div class="beranda-satu">
        <header class="header">
    <a href=""><img src="foto/wikrama-removebg-preview.png" class="logo"></a>
    <h3 class="judul">SMK WIKRAMA BOGOR</h3>
    <div class="nav-awal">
    <ul>
        <li><a href="#beranda">Beranda</a></li>
        <li><a href="#caraWakaf">Cara Wakaf</a></li>
        <li><a href="#dataWakaf">Data Wakaf</a></li>
        <li><a href="#gallery">Gallery</a></li>
        <li><a href="#webWikrama">Web Wikrama</a></li>
    </ul>
    </div>
    </header>
            <section class="banner"></section>
            <script>
                var .awal = document.querySelector(".awal")
                window.addEventListener("scroll", ()=> {
                    if(document.documentElement.scrollTop > 20 ){
                        .awal.classList.add("sticky");
                    }else{
                        .awal.classList.remove("sticky");
                    }
                });
            </script>
            <div>
                <h3 class="masjid"><b>Masjid Besar SMK Wikrama Bogor</b></h3>
                <h1 class="mari">Mari <span class="text-tingatkan">Tingkatkan Keimanan</span> Masyarakat SMK Wikrama Bogor.</h1>
            </div>
            <img class="foto-ss" src="foto/WhatsApp Image 2023-06-15 at 17.29.24.jpg" alt="">
            <button class="btn-beri"><a class="link" href="tambah_bantuan.php">Beri Bantuan Shodaqoh</a></button>
        </div>
        <div class="beranda-dua">
            
        <div class="box">
                <h5 class="total1"><b>Total Target Dana</b></h5>
                <h5 class="total2"><b>Total Dana Terkumpul</b></h5>
                <h5 class="total3"><b>Total Donatur</b></h5>
                <h3 class="rp1">Rp.40.000,000</h3>
                <h3 class="rp2">Rp.4.000,000</h3>
                <h3 class="rp3">34 Orang</h3>
                <div class="garis"></div>
                <div class="prog"></div>
                <div class="res"></div>
                <h3 class="persen">30,0%</h3>
                <h5 class="terpenuhi">Terpenuhi</h5>
            </div>
            <marquee class="text-berjalan"><a class="text-jalan">Muhammad Ridwan - <span class="text-yellow">Uang:Rp.2.000,000</span> * Hamba Allah - <span class="text-yellow">Barang:Emas </span>* Siti Aisyah - <span class="text-yellow">Uang:Rp.2.000,000 </span>* Orang Kaya - <span class="text-yellow">Barang:Emas </span>* Anak Baik - <span class="text-yellow">Uang:Rp.5.000,000 </span>* Fatimah - <span class="text-yellow">Uang:Rp.20.000,000</span></a></marquee>
        </div>
        <div class="beranda-tiga">
        <style>
.mySlides {display:none;}
</style>
<body>

<center><div class="slide">
  <img class="mySlides" src="foto/1. Gedung 1.JPG" style="width:90%, height:30%">
  <img class="mySlides" src="foto/3. Gedung 3.JPG" style="width:90%, height:30%">
  <img class="mySlides" src="foto/10. Lab RPL dan Multimedia.JPG" style="width:90% height:30%">

  <button id="klik" class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button id="klik" class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>
</center>
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

</body>
        </div>
        <div class="beranda-empat">
            <h1 class="text-wakaf"><span class="text-manfaat">Manfaat</span> Wakaf, Infaq Shodakoh.</h1>
            <h3 class="text-berikut">Berikut adalah beberapa keutamaan wakaq, infaq shodaqoh yang akan anda dapatkan.</h3>
            <img class="foto-tangan" src="foto/c3bcced111682001bbe44179183123e3.jpeg" alt="">
            <div class="manfaat-satu">
                <img class="icon-satu" src="foto/White & Black Introduce Yourself Instagram Post.png" alt="">
                <h3 class="text-menjadikan">Menjadikan hati lebih tenang</h3>
                <h4 class="text-kami">Kami memberikan harga yang terbaik dibandingkan dengan Kompetitor kami.</h4>
            </div>
            <div class="manfaat-dua">
                <img class="icon-dua" src="foto/White & Black Introduce Yourself Instagram Post (1).png" alt="">
                <h3 class="text-terbukanya">Terbukanya pintu rezeki</h3>
                <h4 class="text-allah">Allah SWT akan membuka pintu</h4>
            </div>
            <div class="manfaat-tiga">
                <img class="icon-tiga" src="foto/White & Black Introduce Yourself Instagram Post (2).png" alt="">
                <h3 class="text-menjauhkan">Menjauhkan Dari Bahaya</h3>
                <h4 class="text-rasulullah">Rasulullah SAW pernah bersabda:"Bersegeralah untuk bersedekah, karena musibah dan bencana tidak bisa mendahului sedekah."</h4>
            </div>
            <div class="manfaat-empat">
                <img class="icon-empat" src="foto/White & Black Introduce Yourself Instagram Post (3).png" alt="">
                <h3 class="text-pahala">Pahala Yang Tak Terputus</h3>
                <h4 class="text-ini">Ini akan menolong kita di akhirat nantinya, juga dapat menyelamatkannya dari api neraka.</h4>
            </div>
        </div>
    </div>
    <div class="cara-wakaf" id="caraWakaf">
        <h1 class="text-infaq"><span class="text-cara">Cara Melakukan </span>Wakaf, Infaq Shodaqoh.</h1>
        <h3 class="text-adalah">Berikut Adalah Cara Melakukan Wakaf, Infaq Shadaqoh Untuk Membantu Pembangunan Masjid Besar SMK Wikrama Bogor</h3>
        <div class="cara-satu">
            <h3 class="no">01</h3>
            <h3 class="text-isi">Isi Form Data Diri</h3>
            <h4 class="text-aturan">Isikan form pengisian yang disediakan di form data diri, isikan dengan data diri anda dengan teliti.</h4>
        </div>
        <div class="cara-dua">
            <h3 class="no">02</h3>
            <h3 class="text-isi">Isikan Nominal Shodaqoh</h3>
            <h4 class="text-aturan">Isikan nominal yang akan anda shodaqohkan, pastikan isi nominal dengan seikhlasnya tanpa ada paksaan apapun</h4>
        </div>
        <div class="cara-tiga">
            <h3 class="no">03</h3>
            <h3 class="text-isi">Upload Bukti Pembayaran</h3>
            <h4 class="text-aturan">Pilih metode pembayaran dan upload bukti pembayaranya.</h4>
        </div>
        <div class="cara-empat">
            <h3 class="no">04</h3>
            <h3 class="text-isi">Verivikasi Pembayaran</h3>
            <h4 class="text-aturan">Pembayaran anda akan di verifikasi oleh admin dan jika terverifikasi nama anda akan tampil.</h4>
        </div>
    </div>
    <div class="data-wakaf" id="dataWakaf">
        <h1 class="data-infaq"><span class="data-data">Data Donatur </span>Wakaf, Infaq Shodaqoh</h1>
        <h3 class="data-berikut">Berikut Adalah Data Donatur Wakaf, Infak Shodaqok Untuk Mesjid Besar SMK Wikrama Bogor.</h3>
        <table class="tbl" border="1" cellspacing="0">
            <tr class="tbl-tr">
                <td class="tbl-td">Nama Donatur</td>
                <td class="tbl-td">Donatur ID</td>
                <td class="tbl-td">Paket</td>
                <td class="tbl-td">Kategori</td>
                <td class="tbl-td">Nominal/Barang</td>
            </tr>
            <?php
                include "koneksi.php";
                $query = "SELECT * FROM data_donatur ORDER BY nama ASC";
                $result = mysqli_query($conn, $query);

                if(!$result) {
                    die("Query Error : ".mysqli_errno($conn)." - ".mysqli_error($conn));
                }

                while ($row = mysqli_fetch_assoc($result)) {

            ?>
            <tr>
                <td class="ata"><?php echo $row['nama']; ?></td>
                <td class="ata"><?php echo $row['nodon']; ?></td>
                <td class="ata"><?php echo $row['paket']; ?></td>
                <td class="ata"><?php echo $row['kategori']; ?></td>
                <td class="ata"><?php echo $row['nominal']; ?></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
    <div class="gallery" id="gallery">
        <h1 class="judul-gallery"><span class="text-gallery">Gallery </span>Masjid Besar SMK Wikrama Bogor.</h1>
        <h3 class="text-gallery2">Berikut Adalah Gallery Masjid Besar SMK Wikrama Bogor.</h3>
        <div class="img-mesjid">
            <img class="img-1" src="foto/d521548bf49b3cd7294caf7186078c73.jpeg" alt="">
            <img class="img-2" src="foto/e5d4e9624cc0a2fe2db1342eb22da728.jpeg" alt="">
            <img class="img-3" src="foto/b66dad9d76916ece36f6d45c23836ace.jpeg" alt="">
            <img class="img-4" src="foto/9a65907ad68fa3606e03d8271e936d00.jpeg" alt="">
            <img class="img-5" src="foto/5b0ddc8e3b9aa67edb4379ab8b86a4da.jpeg" alt="">
        </div>
        <div class="box-gallery">
        <div class="card">
  <div class="first-content">
    <span>Buka Gallery</span>
  </div>
  <div class="second-content">
<span>___</span>
  </div>


</div>
        </div>
    </div>
    <div class="web_wikrama" id="webWikrama">
        <footer class="footer">
            <img class="img-footer" src="foto/wikrama-removebg-preview.png" alt="">
            <h5 class="wk-footer">SMK WIKRAMA BOGOR</h5>
            <p class="alamat"><b>Alamat</b></p>
            <p class="text-footer">Jl.Raya Wagun<br>Kelurahan Sindangsari<br>Bogor Timur 16720</p>
            <hr>
            <p class="telepon"><b>Telepon</b></p>
            <p class="text-footer">0251-8242411 / <br>082221718035 (WhatsApp)</p>
            <hr>
            <div class="tentang">
                <p class="tentang-footer"><b>Tentang Wikrama</b></p>
                <ul class="list-tentang">
                    <li>Sejarah</li>
                    <li>Peraturan Sekolah</li>
                    <li>Rencana Strategi & Prestasi</li>
                    <li>Yayasan</li>
                    <li>Struktur Organisasi</li>
                    <li>Cabang</li>
                    <li>Penghargaan</li>
                    <li>Kerjasama</li>
                </ul>
            </div>
            <p class="pesan"><b>Kirim Pesan</b></p>
            <div class="box-pesan">
                <form action="pesan.php" method="post">
                    <input class="input-pesan1" type="text" name="nama" id="" placeholder="Nama"><br><br>
                    <input class="input-pesan2" type="text" name="email" id="" placeholder="Email"><br><br>
                    <input class="input-pesan3" type="text" name="pesan" id="" placeholder="Pesan Anda"><br><br>
                    <button class="btn-pesan" type="submit" name="proses">Submit</button>
                </form>
            </div>
            <div class="logo">
                <img class="fb" src="foto/facebook-icon-white.png" alt="">
                <img class="tw" src="foto/th.jpeg" alt="">
                <img class="ig" src="foto/th (1).jpeg" alt="">
                <img class="yt" src="foto/th (2).jpeg" alt="">
            </div>
        </footer> 
        <p class="coppyright">Coppyright © 2023 - SMK Wikrama Bogor. ALL Right Reserved.</p>
    </div>
</body>

</html>