<?php

include '../connection.php';
include 'function.php';  

$buku=$db->prepare("SELECT * from perpustakaan where id=".$_GET['id']);
$buku->execute();
$data=$buku->fetchAll(); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="..\asset\css\all.css">
    <link rel="stylesheet" href="..\asset\css\bootstrap.min.css">
</head>
<body>


<div class="row">
    <div class="col">
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <a style="color: white;" class="navbar-brand" href="../index.php">Perpustakaan.com</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a style="color: white;" class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a style="color: white;" class="nav-link" href="daftar_buku.php">Daftar Buku <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a style="color: white;" class="nav-link" href="../galeri_buku.php">Galeri Buku <span class="sr-only">(current)</span></a>
                </li>
                    <a style="color: white;" class="nav-link" href="../tentang.php">Tentang kami <span class="sr-only">(current)</span></a>
                </li>
                </ul>
            </div>
        </nav>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col"> 
            <h3 style="text-align: center;" >Perpustakaan</h3>
        </div>
    </div>
</div>

    <div class="container">
        <div class="row">
            <div class="col-3">
                <h4>Selamat Datang</h4>
                <div class="border rounded p-4" style="background-color: #221177;">
                    <h5 class="text-light" style="text-align: center;">menu</h5>
                    <hr width="75%">
                    <p style="text-align: center;"><a class="text-light" style="text-decoration: none;" href="../index.php">Home</a></p>
                    <p style="text-align:center;"><a class="text-light" style="text-decoration: none;" href="daftar_buku.php">Daftar buku</a></p>
                </div>
            </div>
                <div class="col-6">
        <div style="margin-top: 50px;" class=" border rounded p-4 mx-auto">
        <h5 style="text-align: center;">Edit Judul Buku</h5>
        <form action="daftar_buku.php" method="POST">
            <div class="form-group">
                <input type="name" name="judul" class="form-control" autocomplete="off" value="<?php echo $data[0]['judul']; ?>">
                <input type="hidden" name="id" value="<?php echo $data[0]['id']; ?>">
            </div>
            <button type="submit" name="tambah" class="btn btn-primary">Submit</button>
        </form>
        </div>
            </div>
            <div class="col-3">
                <h4>Selamat datang</h4>
                <div class="border rounded p-4"  style="background-color: #221177;">
                <h5 class="text-light" style="text-align: center;">Tentang Kami</h5>
                    <hr width="75%">
                    <p style="text-align: center;"><a class="text-light" style="text-decoration: none;" href="../galeri_buku.php">Galeri buku</a></p>
                    <p style="text-align: center;"><a class="text-light" style="text-decoration: none;" href="../tentang.php">Tentang kami</a></p>
                </div>
            </div>
        </div>
    </div>

<div class="container">
    <h3 style="text-align: center;">Tambahkan judul buku baru</h3>
   <div class="row">
         <div class="col-4">
            <div class="card mt-3">
            <img src="../img\buku5.jpg" class="card-img-top" alt="..." width="2500px" height="250">
            </div>
         </div>
         <div class="col-4">
            <div class="card mt-3">
            <img src="../img\g2.jpg" class="card-img-top" alt="..." width="2500px" height="250">
            </div>
         </div>
         <div class="col-4">
            <div class="card mt-3">
            <img src="../img\g3.jpeg" class="card-img-top" alt="..." width="2500px" height="250">
            </div>
         </div>
   </div>
</div>

<script src="..\asset\js\jquery-3.5.1.slim.min.js"></script>
<script src="..\asset\js\popper.min.js"></script>
<script src="..\asset\js\bootstrap.min.js"></script>

</body>
</html>