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
              <a href="testimonial.php" class="nav-link active">Testimonial</a>
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
                    <h2>Members are going</h2>
                    <p> Beberapa pengamalaman dan kesan - pesan pelanggan ketika traveling menggunakan AVAR TRAVEL. </p>  

                    
                    <?php
                    include "koneksi.php"; 
                    //query untuk menampilkan data
                    $tampil = "SELECT * FROM testimoni 
                              ORDER BY id_testimoni";
                    $hasil = mysqli_query($koneksi,$tampil);
                    ?>
                    <div class="members my-2">
                      <?php
                      //menampilkan hasil di halaman web
                      while($data=mysqli_fetch_array($hasil)){
                        echo "
                      <img src='asset/images/$data[foto]' class='member-image mr-1'>
                        $data[nama] <br>
                      <p>Trip to $data[tempat]</p>
                      Kesan : $data[kesan] <br>
                      <a href='edit_testi.php?id=$data[id_testimoni]' class='btn btn-primary'> EDIT </a>                   
                      <a href='testi_hapus.php?id=$data[id_testimoni]' class='btn btn-primary'> HAPUS </a>                   
                      <hr>
                        ";
                      }
                      ?>
                    </div>
                        
                  
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card card-details card-right">
                <h2>Bagikan pengamalamanmu</h2>
                <form method="POST" action="sukses_Simpan.php" enctype="multipart/form-data">
                  
                  <div class="form-group">
                    <p> Nama Lengkap </p>
                    <input type="text" name="namaLeng" class="form-control" required>
                  </div>
                  
                  <div class="form-group">
                    <p>Tempat yang dikunjungi </p>
                    <input type="text" name="tempatKunj" class="form-control" required>
                    
                   
                  </div>
                  <div class="form-group">
                    <p> Kesan Pesan </p>
                    <textarea name="kesanPesan" id="" cols="40" rows="10" required></textarea>
                  </div>

                  
                  <div class="form-group">
                    Tambahkan Foto Profile : <input type="file" name="fupload"><br>
                    <input type="submit" value="Share Your Testimonial" class="btn btn-block btn-join-now mt-3 py-2">
                  </div>
                </form>
                
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
