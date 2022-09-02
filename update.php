<?php
require 'functions.php';

$id=$_POST["id"];
$nim=$_POST["nim"];
$nama=$_POST["nama"];
$alamat=$_POST["alamat"];
$prodi=$_POST["prodi"];

mysqli_query($conn,"UPDATE mahasiswa SET nim='$nim',nama='$nama', alamat='$alamat',prodi='$prodi' WHERE id='$id'");
header("location:index.php");
?>