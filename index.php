<?php
require 'functions.php';
$query = mysqli_query($conn, "SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan CRUD + Bootstrap</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        
        <!--  -->
        <div class="card mt-4">
            <div class="card-header bg-primary text-white">
                DATA MAHASISWA
            </div>
            <div class="card-body">
                <table class="table table-border table-striped">


                    <tr>
                        <th>ID</th>
                        <th>Nim</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Prodi</th>
                        <th>Actions</th>
                    </tr>
                    <?php foreach ($query as $row) : ?>
                        <tr>
                            <td><?= $row["id"]; ?></td>
                            <td><?= $row["nim"]; ?></td>
                            <td><?= $row["nama"]; ?></td>
                            <td><?= $row["alamat"]; ?></td>
                            <td><?= $row["prodi"]; ?></td>
                            <td>
                                <a href="hapus.php?id=<?= $row["id"]; ?>" class="btn btn-danger">Hapus</a>
                                <a href="edit.php?id=<?= $row["id"]; ?>" class="btn btn-warning">Edit</a>
                            </td>
                        </tr>

                    <?php endforeach ?>

                </table>
                <a href="tambah.php" class="btn btn-success">Tambah Data</a>


            </div>
            <!--  -->

        </div>





        <script src="js/bootstrap.min.js"></script>
</body>

</html>