<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include ('koneksi.php');
    ?>
    
    <form class="form" action="proses_tambah.php" method="POST">
       <h1 class="bantu">Beri Bantuan Shodaqoh</h1>
        <div class="input-container">
          <input name="nama" type="text" placeholder="Nama Donatur">
          <span>
          </span>
      </div>
      <div class="input-container">
          <input name="nodon" type="number" placeholder="Masukkan Donatur ID (8 Digit)">
        </div>
        <div class="input-container">
          <input name="paket" type="text" placeholder="Pilih Paket Anda (Paket 1 / Paket 2)">
        </div>
        <div class="input-container">
          <input name="kategori" type="text" placeholder="Pilih Kategori Anda (Uang / Barang)">
        </div>
        <div class="input-container">
          <input name="nominal" type="text" placeholder="Berikan Nominal/Barang">
        </div>
         <button type="submit" class="submit" name="proses">
        Simpan
      </button>
   </form>

</body>
<style>
    .form {
  background-color: #fff;
  display: block;
  padding: 3rem;
  max-width: 350px;
  border-radius: 0.5rem;
  box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
  margin-left: auto;
  margin-right: auto;
  font-family: sans-serif;
  margin-top: 3em;
} 
.bantu{
    text-align: center; 
}

.form-title {
  font-size: 1.25rem;
  line-height: 1.75rem;
  font-weight: 600;
  text-align: center;
  color: #000;
  font-family: sans-serif;
}

.input-container {
  position: relative;
}

.input-container input, .form button {
  outline: none;
  border: 1px solid #e5e7eb;
  margin: 8px 0;
}

.input-container input {
  background-color: #fff;
  padding: 1rem;
  padding-right: 3rem;
  font-size: 0.875rem;
  line-height: 1.25rem;
  width: 300px;
  border-radius: 0.5rem;
  box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
}

.submit {
  display: block;
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
  padding-left: 1.25rem;
  padding-right: 1.25rem;
  background-color: #1F3984;
  color: #ffffff;
  font-size: 0.875rem;
  line-height: 1.25rem;
  font-weight: 500;
  width: 100%;
  border-radius: 0.5rem;
  text-transform: uppercase;
}

.signup-link {
  color: #6B7280;
  font-size: 0.875rem;
  line-height: 1.25rem;
  text-align: center;
}

.signup-link a {
  text-decoration: underline;
}
</style>
</html>