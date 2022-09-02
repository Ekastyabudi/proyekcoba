<?php
require 'functions.php';
    $id=$_GET["id"];
    $query=mysqli_query($conn,"SELECT * FROM mahasiswa where id='$id'");


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
    UBAH DATA MAHASISWA
  </div>
  <div class="card-body">

  <?php while($row = mysqli_fetch_array($query)):?>

   <form action="update.php" method="post">
    <div class="form-group">
    <input type="hidden" name="id" value="<?=$row["id"];?>"></input>

        <label for="nim">NIM</label>
        <input type="text" name="nim" value="<?=$row["nim"];?>" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" name="nama" value="<?=$row["nama"];?>" class="form-control required">
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea class="form-control" value="<?=$row["alamat"];?>" name="alamat"><?=$row["alamat"];?></textarea>
    </div>
    <div class="form-group mb-3">
        <label for="Prodi">Program Study</label>
        <select class="form-control" name="prodi" value="<?=$row["prodi"];?>">
           
            <option >D3-MI</option>
            <option >S1-SI</option>
            <option >S1-TI</option>

        </select>
        <?php endwhile?>

    </div>
    <button type="submit" class="btn btn-success" name="submit">Ubah</button>
    <a href="index.php " class="btn btn-primary">Lihat data</a>

   </form>
  </div>
</div>

<script src="js/bootstrap.min.js"></script>    
</body>
</html>