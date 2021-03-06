<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Toko Buah</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
<?php require_once 'koneksi.php'; ?>
<?php
$mysqli = new mysqli('localhost','root','','pasar');
$result = $mysqli->query('SELECT * FROM tb_buah')or die($mysqli->error);
?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <a class="navbar-brand" href="#">
            <img src="http://pngimg.com/uploads/apple_logo/apple_logo_PNG19673.png" height="30"
                class="d-inline-block align-top" alt=""> Toko Buah</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="daftar_buah.php">Daftar Buah</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="tentang.html">Tentang Kami</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Toko Buah</h1>
            <p class="lead">Belilah Apple.</p>
        </div>
    </div>
    <div class="container">
        <h3 class="text-center">Daftar Buah</h3>
        <a href="tambah_buah.php" class="btn btn-success btn-sm float-right m-2">Tambah</a>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Buah</th>
                        <th>Jenis Buah</th>
                        <th>Stock</th>
                        <th>Harga</th>

                    </tr>
                </thead>
                <tbody>
                <?php
                $no = 1;
                while ($row = $result->fetch_assoc()):
                ?>
                <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $row['nama_buah']?></td>
                    <td><?php echo $row['jenis_buah']?></td>
                    <td><?php echo $row['stok_buah']?></td>
                    <td><?php echo $row['harga_buah']?></td>

                </tr>

                <?php
                $no++;
                endwhile;?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>