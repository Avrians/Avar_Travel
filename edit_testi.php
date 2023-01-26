<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Testimonial</title>
    <link 
    rel="stylesheet" href="asset/libraries/bootstrap/css/bootstrap.css" 
    />
    <link rel="stylesheet" href="asset/libraries/xzoom/dist/xzoom.css">
    <link 
    href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"
    />
    <link 
    rel="stylesheet" href="asset/styles/main.css"
    />
  </head>
  <body>
  <?php $koneksi = mysqli_connect("localhost", "root","","uasweb");?>
    <!-- Navbar -->
    <div class="container">
      <nav class="row navbar navbar-expand-lg navbar-light bg-white">
        <a href="#" class="navbar-brand">
          <img src="asset/images/logo.png" alt="Logo" />
        </a>
        <button 
          class="navbar-toggler navbar-toggler-right"
          type="button"
          data-toggle="collapse"
          data-target="#navb"
        >
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navb">
          <ul class="navbar-nav ml-auto mr-3">
            <li class="nav-item mx-md-2">
              <a href="index.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item mx-md-2">
              <a href="testimonial.html" class="nav-link active">Testimonial</a>
            </li>
            <li class="nav-item mx-md-2">
              <a href="about.html" class="nav-link">About</a>
            </li>
          </ul>

          <!-- Mobile Button -->
          <form class="form-inline d-sm-block d-md-none">
            <button class="btn btn-login my-2 my-sm-0 px-4">
              <a href="login.html">
                Masuk
              </a>
            </button>
          </form>

          <!-- Desktop Button -->
          <form class="form-inline my-2 my-lg-0 d-none d-md-block">
            <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4">
              <a href="login.html">
                Masuk
              </a>
            </button>
          </form>


        </div>
      </nav>
    </div>

    <main>
      <section class="section-details-header"></section>
      <section class="section-details-content">
        <div class="container">
          <div class="row">
            <div class="col p-0">
              <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    Paket Travel
                  </li>
                  <li class="breadcrumb-item active">
                    Testimonial
                  </li>
                </ol>
              </nav>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-8 pl-lg-0">
              <div class="card card-details">
                
                    <h1>Testimonal AVAR TRAVEL</h1>
                    <h1></h1>

                    <?php
                      include "koneksi.php"; 
                    //ambil data dari hasil klik Edit
                    $id=$_GET['id'];

                    $edit="SELECT * FROM testimoni WHERE id_testimoni='$id'";
                    $hasil=mysqli_query($koneksi,$edit);
                    $data=mysqli_fetch_array($hasil);

                    $nama = $data['nama'];
                    $pesan = $data['kesan'];
                    $tempat = $data['tempat'];

                    ?>
                    <h2>Edit Testimonial</h2>
                    <form method="GET" action="edit_simpan.php">
                  <div class="form-group">
                    <input type="hidden" name="id" value="<?php echo $id?>">
                    <p> Nama Lengkap </p>
                    <input type="text" name="namaLeng" class="form-control" value="<?php echo $nama?>" required>
                  </div>
                  
                  <div class="form-group">
                    <p>Tempat yang dikunjungi </p>
                    <input type="text" name="tempatKunj" class="form-control" value="<?php echo $tempat?>" required>
                    
                   
                  </div>
                  <div class="form-group">
                    <p> Kesan Pesan </p>
                    <textarea name="kesanPesan" id="" cols="40" rows="10" required><?php echo $pesan?></textarea>
                    <br>
                    <a href="#">
                      <input type="submit" value="Save Testimonial" class="btn btn-block btn-join-now mt-3 py-2">
                    </a>
                    <!-- <a href="sukses_Simpan.php" class="btn btn-block btn-join-now mt-3 py-2">
                      Share Your Testimonial
                    </a>   -->
                  </div>
                </form>
                    </div>
                        
                  
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <?php
    include "footer.php";
    ?>
  </body>
</html>
