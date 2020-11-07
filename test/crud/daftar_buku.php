<?php
include "../connection.php";
include "function.php";


if(isset($_GET['delete'])){
    deleteSiswa($_GET);
    header('Location:daftar_buku.php');
}
if(isset($_POST['add'])){
    inputData($_POST);
    header('Location:daftar_buku.php');
}
if(isset($_POST['tambah'])){
    edit($_POST);
    header('location:daftar_buku.php');
}

$accommodated=[];

if(isset($_POST['cari'])){    
$accommodated=searching($_POST['search']);
if(!empty($accommodated)){
    $data=$accommodated;
}elseif(empty($accommodated)){
    $eror = "maaf ,input data ".$_POST['search']." tidak ditemukan";
 }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="..\asset\css\all.css">
    <link rel="stylesheet" href="..\asset\css\bootstrap.min.css"> 
</head>
<style> 
    .navbar{
            background-image: url(../img/backg.jpg);
        }
</style>
<body>


<div class="row">
    <div class="col">
        <nav class="navbar navbar-expand-lg navbar-light shadow-lg fixed-top">
            <a style="color: white;" class="navbar-brand mt-3 mb-3" href="../index.php"><b>Perpustakaan.com</b></a>
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
                <li class="nav-item">
                    <a style="color: white;" class="nav-link" href="../tentang.php">Tentang kami <span class="sr-only">(current)</span></a>
                </li>
                <li>
                  <div class="col-10" style="margin-left:260px;">
                    <form class="form-inline my-2 my-lg-0 " method="POST" action="">
                        <input class="form-control mr-sm-2 w-75" type="search" placeholder="Search" name="search" autocomplete="off">
                        <button class="btn btn-outline-primary my-2 my-sm-0"  name="cari" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>  
               </li>
                </ul>
            </div>
        </nav>
    </div>
</div>

<br>
<br>
<br>
<br>

<div class="col-3 ml-4" style="margin-top: 10px;">
    <div class="row mt-4 border rounded border-secondary" style="position: fixed;">
        <div class="col p-3 mx-auto">
            <form action="daftar_buku.php" method="POST">
                <div class="form-group">
                    <h3>Tambahkan buku baru</h3>
                    <label>Nama buku</label>
                    <input type="text" name="judul" class="form-control" required placeholder="judul" autocomplete="off">
                </div>
                <div class="form-group">
                    <label>Halaman</label>
                    <input type="number" id="halaman" name="halaman" class="form-control" required placeholder="Halaman" autocomplete="off">
                </div>
                <div class="form-group">
                    <label>Penulis</label>
                    <input type="text" name="penulis" class="form-control" required placeholder="Penulis" autocomplete="off">
                </div>
                    <button type="submit" name="add" class="btn btn-primary">Kirim Data</button>
            </form>  
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-4 mx-auto">
            <div class="col-12 ml-6">     
                 <?php if(isset($eror)) :?>
                     <div role="alert" class="alert alert-primary">
                         <?php echo $eror;?>
                     </div>
                 <?php endif;?>
            </div>         
        <?php foreach($data as $key) :?>
            <div class="card">
                <h5 class="card-header mx-auto">Buku</h5>
                <div class="card-body">
                    <p class="card-title" style="text-align: center;"><?php echo $key['judul'];?></p>
                        <hr width="100%">
                    <p class="card-text" style="text-align: center;"><?php echo $key['halaman'];?> - Halaman</p>
                        <hr width="40%">
                    <p class="card-text" style="text-align: center;"><?php echo $key['penulis'];?></p>
                        <hr width="30%">
                    <div style="text-align: center;">
                    <a class="btn btn-light" onclick="return confirm('Apakah Kamu Ingin Menghapus Data?')"  href="daftar_buku.php?delete=&id=<?php echo $key['id']?>">Delete</a> | <a class="btn btn-light" href="edit.php?id=<?php echo $key['id']; ?>">Edit</a>
                    </div>
                </div>
                </div>
        <?php endforeach;?>
        </div>
    </div>
</div>

    <script src="..\asset\js\jquery-3.5.1.slim.min.js"></script>
    <script src="..\asset\js\popper.min.js"></script>
    <script src="..\asset\js\bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $("p").click(function(){
            swal({
                showCancelButton: true,
                closeOnConfirm: false,
                closeOnCancel: false
            });
            });
        });
</script>
</body>
</html>