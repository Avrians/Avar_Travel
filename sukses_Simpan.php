<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    <link 
    rel="stylesheet" href="asset/libraries/bootstrap/css/bootstrap.css" 
    />
    <link rel="stylesheet" href="asset/libraries/xzoom/dist/xzoom.css">
    <link rel="stylesheet" href="asset/libraries/gijgo/css/gijgo.min.css">
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
        <div class="navbar-nav ml-auto mr-auto mr-sm-auto mr-lg-0 mr-md-auto">
          <a href="index.html" class="navbar-brand">
            <img src="asset/images/logo.png" alt="">
          </a>
        </div>
        <ul class="navbar-nav mr-auto d-none d-lg-block">
          <li>
            <span class="text-muted">
              | &nbsp;Beyond the explorer of the world
            </span>
          </li>
        </ul>
      </nav>
    </div>




    <main>
    <?php
        //koneksi ke database
        include "koneksi.php"; 

        //ambil variabel
        $nama = $_POST['namaLeng'];
        $pesan = $_POST['kesanPesan'];
        $tempat = $_POST['tempatKunj'];

        //membaca lokasi file dari form (fupload)
        $lokasi_file = $_FILES['fupload']['tmp_name'];
        $nama_file = $_FILES['fupload']['name'];

        //tentukan folder untuk menyimpan file
        $folder="files/$nama_file";


        if(move_uploaded_file($lokasi_file,"$folder")){
          //masukkan  informasi file ke database
          $input = "INSERT INTO testimoni(nama, tempat, kesan,foto) 
                  VALUES ('$nama','$tempat','$pesan','$nama_file')";
           $hasil = mysqli_query($koneksi,$input);
      }else {
          echo"File gagal di upload";
      }
      ?>
      <div class="section-success d-flex align-items-center">
        <div class="col text-center">
          <img src="asset/images/ic_mail.png" alt="">

          
          <?php 
          //query input data benar
            if ($hasil){
              echo "
              <h1>Yay! Success</h1>
              <p>
                Terima kasih atas telah mengisi testimonial
              </p>
              ";
            }
            else{
              echo "
              <h1>Sorry! Failed</h1>
              <p>
                Maaf testimonial yang anda masukan salah mohon masukan kembali
              </p>
              
              ";
            }
          ?>
              <a href='testimonial.php' class='btn btn-home-page mt-3 px-5'>
                LIHAT TESTIMONIAL
              </a>
          
        </div>
      </div>
    </main>

    <script src="asset/libraries/jquery/jquery-3.4.1.min.js"></script>
    <script src="asset/libraries/bootstrap/js/bootstrap.js"></script>
    <script src="asset/libraries/retina/retina.min.js"></script>
    <script src="asset/libraries/xzoom/dist/xzoom.min.js"></script>
   <script src="asset/libraries/gijgo/js/gijgo.min.js"></script>
   <script>
      $(document).ready(function(){
        $('.xzoom, .xzoom-gallery').xzoom({
          zoomWidth:500,
          title:false,
          tint: '#333',
          Xoffset: 15
        });

        $('.datepicker').datepicker({
          uiLibrary: 'bootstrap4',
          icons: {
            rightIcon: '<img src="asset/images/ic_doe.png"/>'
          }
        })
      });
      
    </script>
  </body>
</html>
