<?php
require 'functions.php';
$data=$_GET["id"];
mysqli_query($conn,"DELETE FROM mahasiswa WHERE id=$data");
header("location:index.php");
?>