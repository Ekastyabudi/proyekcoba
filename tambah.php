<?php
require 'functions.php';
if(isset($_POST["submit"])){
    $nim=$_POST["nim"];
    $nama=$_POST["nama"];
    $alamat=$_POST["alamat"];
    $prodi=$_POST["prodi"];

    mysqli_query($conn,"INSERT INTO mahasiswa VALUES('','$nim','$nama','$alamat','$prodi')");

}

     

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="card mt-4" >
  <div class="card-header bg-primary text-white">
    TAMBAH DATA MAHASISWA
  </div>
  <div class="card-body">
   <form action="" method="post">
    <div class="form-group">
        <label for="nim">NIM</label>
        <input type="text" name="nim" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" name="nama" class="form-control required">
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea class="form-control"  name="alamat"></textarea>
    </div>
    <div class="form-group mb-3">
        <label for="Prodi">Program Study</label>
        <select class="form-control" name="prodi" >
           
            <option >D3-MI</option>
            <option >S1-SI</option>
            <option >S1-TI</option>

        </select>
    </div>
    <button type="submit" class="btn btn-success" name="submit">Simpan</button>
    <a href="index.php " class="btn btn-primary">Lihat data</a>

   </form>
  </div>
</div>

<script src="js/bootstrap.min.js"></script>    
</body>
</html>