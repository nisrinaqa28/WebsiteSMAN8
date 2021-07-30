<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/images/logoDelta.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>SMAN 8 KOTA TANGERANG</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
<!--

TemplateMo 565 Onix Digital

https://templatemo.com/tm-565-onix-digital

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="?callHome=true" class="logo">
              <img src="assets/images/logoDelta.png" >
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li><a href="?callHome=true">Home</a></li>
              <li><a href="?callBerita=true">Berita</a></li>
              <li><a>Kegiatan</a></li>
              <li><a>Kepegawaian</a></li>
              <li><a>Galeri</a></li> 
              <li><a ></a></li> 
              <li><div class="main-red-button-hover"><a >Contact Us Now</a></div></li> 
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="content">
    <?php
      if(isset($_GET["callHome"])){
          include 'home.php';
      }else if(isset($_GET["callBerita"])){
          include 'berita.php';
      }else if(isset($_GET["callDetail"])){
        include 'detailBerita.php';
      }else if(isset($_GET["callDetail2"])){
        include 'detailBerita2.php';
      }else if(isset($_GET["callDetail3"])){
        include 'detailBerita3.php';
      }else if(isset($_GET["callDetail4"])){
        include 'detailBerita4.php';
      }else if(isset($_GET["callDetail5"])){
        include 'detailBerita5.php';
      }else if(isset($_GET["callDetail6"])){
        include 'detailBerita6.php';
      }
    ?>
  </div>

  <div class="footer-dec">
    <img src="assets/images/footer-dec.png" alt="">
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="about footer-item">
            <div class="logo">
              <a href="?callHome=true"><img src="assets/images/logoDelta.png" alt="Onix Digital TemplateMo"></a>
            </div>
            <a>sman8delta@gmail.com</a>
            <ul>
              <li><a href="https://www.facebook.com/smandelta8"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://www.instagram.com/smandelta/"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="services footer-item">
            <h4>About Us</h4>
            <ul>
              <li><a>Profile</a></li>
              <li><a>Visi Misi</a></li>
              <li><a>Galeri Foto</a></li>
              <li><a>Galeri Video</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="community footer-item">
            <h4>Tags</h4>
            <ul>
              <li><a>Pengumuman</a></li>
              <li><a>Berita</a></li>
              <li><a>Sekilas Info</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="copyright">
            <p>Copyright © 2021 Onix Digital Co., Ltd. All Rights Reserved. 
            <br>
            Designed by <a rel="nofollow" href="https://templatemo.com" title="free CSS templates">TemplateMo</a><br>
            Distributed by <a href="https://themewagon.com">Themewagon</a>
          </p>
          </div>
        </div>

      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>

  <script>
  // Acc
    $(document).on("click", ".naccs .menu div", function() {
      var numberIndex = $(this).index();

      if (!$(this).is("active")) {
          $(".naccs .menu div").removeClass("active");
          $(".naccs ul li").removeClass("active");

          $(this).addClass("active");
          $(".naccs ul").find("li:eq(" + numberIndex + ")").addClass("active");

          var listItemHeight = $(".naccs ul")
            .find("li:eq(" + numberIndex + ")")
            .innerHeight();
          $(".naccs ul").height(listItemHeight + "px");
        }
    });
  </script>
</body>
</html>