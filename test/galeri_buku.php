<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri buku</title>
    <link rel="stylesheet" href="..\asset\css\all.css">
   <link rel="stylesheet" href="..\asset\css\bootstrap.min.css"> 
</head>
<style>
    body {
            background-image: url(img/back.jpg);   
        }
   .navbar{
            background-image: url(img/backg.jpg);
        }
  .text-center {
  opacity: 0.6;
  }
  .text-light{
      opacity: 0.6;
  }
  .nav-link{
      opacity: 0.8;
  }
  .navbar-brand{
      opacity: 0.8;
  }
</style>
<body>


<div class="row">
    <div class="col">
        <nav class="navbar navbar-expand-lg navbar-light shadow-lg">
            <a style="color: white;" class="navbar-brand mt-3 mb-3" href="../index.php"><b>Perpustakaan.com</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a style="color: white;" class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a style="color: white;" class="nav-link" href="crud/daftar_buku.php">Daftar Buku <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a style="color: white;" class="nav-link" href="galeri_buku.php">Galeri Buku <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a style="color: white;" class="nav-link" href="tentang.php">Tentang Kami <span class="sr-only">(current)</span></a>
                </li>
                </ul>
            </div>
        </nav>
    </div>
</div>

<div class="container">
  <div class="col-2 mx-auto">
    <h6 class="text-light mt-3"><b>Galeri perpustakaan</b></h6>
  </div>
    <div class="row">
      <div class="col-3">
                  <div class="card mt-3">
                    <img src="img\img_perpus\gambar3.jpg" class="card-img-top" alt="..." width="250px" height="250px">
                  </div>
                 </div>
                 <div class="col-3">
                  <div class="card mt-3">
                    <img src="img\img_perpus\gambar1.jpeg" class="card-img-top" alt="...">
                  </div>
                 </div>
                 <div class="col-3">
                  <div class="card mt-3">
                    <img src="img\img_perpus\gambar2.jpeg" class="card-img-top" alt="...">
                  </div>
                 </div>
               <div class="col-3">
                  <div class="card mt-3">
                    <img src="img\img_perpus\gambar4.jpg" class="card-img-top" alt="..." width="250px" height="250px">
                  </div>
              </div>
        </div>
    </div>
</div>
    
<div class="container">
  <div class="col-2 mx-auto">
    <h3 class=" text-center mt-3" style="color: white"><b>Galeri Buku</b></h3>
  </div>
    <div class="row">
      <div class="col-3">
                  <div class="card mt-3">
                    <img src="img\buku1.jpeg" class="card-img-top" alt="..." width="2500px" height="250">
                  </div>
                 </div>
                 <div class="col-3">
                  <div class="card mt-3">
                    <img src="img\buku2.jpg" class="card-img-top" alt="...">
                  </div>
                 </div>
                 <div class="col-3">
                  <div class="card mt-3">
                    <img src="img\buku3.jpg" class="card-img-top" alt="...">
                  </div>
                 </div>
               <div class="col-3">
                  <div class="card mt-3">
                    <img src="img\buku4.jpg" class="card-img-top" alt="...">
                  </div>
              </div>
              <div class="col-3">
                  <div class="card mt-3">
                    <img src="img\buku5.jpg" class="card-img-top" alt="...">
                  </div>
              </div>
              <div class="col-3">
                  <div class="card mt-3">
                    <img src="img\buku6.jpg" class="card-img-top" alt="...">
                  </div>
              </div>
              <div class="col-3 mt-3">
                  <div class="card">
                    <img src="img\buku7.jpg" class="card-img-top" alt="...">
                  </div>
              </div>
              <div class="col-3">
                  <div class="card mt-3">
                    <img src="img\buku8.jpg" class="card-img-top" alt="...">
                  </div>
              </div>
        </div>
    </div>
</div>


  <!--footer-->

  <div class="row mt-1">
    <div class="col bg-dark">
        <div class="container">
            <div class="row">
                <div class="col text-white">
                    <p class="mt-3" style="text-align: center;"> &copy; CopyRight by : Sudiyono</p>
                    <p style="text-align: center;"><a style="text-decoration: none;" class="text-white" href="https://wa.me/6288228674906">Whatshapp : 088228674906</a> || <a style="text-decoration: none;" class="text-white" href="https://www.instagram.com/">Instragram : @sudi.yono.750546</a> || <a style="text-decoration: none;" class="text-white" href="https://web.facebook.com/sudiyono">Facebook : sudiyono</a> ||  <a style="text-decoration: none;" class="text-white" href="https://github.com/bandhot">github : @bandhot</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

 
<script src="..\asset\js\jquery-3.5.1.slim.min.js"></script>
<script src="..\asset\js\popper.min.js"></script>
<script src="..\asset\js\bootstrap.min.js"></script>
</body>
</html>