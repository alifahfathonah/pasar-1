<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Buah</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script type="application/javascript" src="js/jquery.min.js"></script>
</head>

<body>
<?php require_once 'proses.php'; ?>
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
        <div class="card">
            <div class="card-header">
                Tambah Buah
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <form action="proses.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php echo $id; ?> ">
                            <div class="form-group">
                                <label for="nama_buah">Nama Buah</label>
                                <input type="text" class="form-control" name="nama_buah" placeholder="Nama Buah" value="<?php echo $namaBuah; ?>">
                            </div>
                            <div class="form-group">
                                <label for="jenis_buah">Jenis Buah</label>
                                <input type="text" class="form-control" name="jenis_buahrx" placeholder="Jenis Buah" value="<?php echo $jenisBuah; ?>">
                            </div>
                            <div class="form-group">
                                <label for="stok_buah">Stok Buah</label>
                                <input type="number" class="form-control" name="stok_buahy" placeholder="Stok Buah" value="<?php echo $stokBuah; ?>">
                            </div>
                            <div class="form-group">
                                <label for="harga_buah">Harga Buah</label>
                                <input type="number" class="form-control" name="harga_buah" placeholder="Harga Buah" value="<?php echo $hargaBuah; ?>">
                            </div>
                            <div class="form-group">
                                <label for="harga_buah">Gambar</label>
                                <input type="file" class="form-control" name="gambar" >
                            </div>
                            <div class="form-group">
                            <?php if($update == true): ?>
                            <button type="submit" class="btn btn-primary float-right" name="update">Ubah</button>
                            <?php else: ?>
                                <button type="submit" class="btn btn-primary float-right" name="save">Simpan</button>
                            <?php endif; ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <table class="table table-hover">
            <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Nama Buah</th>
                <th>Jenis Buah</th>
                <th>Stock</th>
                <th>Harga</th>
                <th>Gambar</th>
                <th>Action</th>

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
                <td><img src="<?php echo $row['foto']?>" style="width:128px;height:128px;"></td>
                <td>
                    <a href="tambah_buah.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a>
                    <a href="proses.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>

            <?php
                $no++;
                endwhile;?>
            </tbody>
        </table>
    </div>

    
    <footer>
        <div class="container-fluid text-center">
            <hr>
            Copyright &copy Azmi 2019
            <hr>
        </div>
    </footer>

</body>

</html>