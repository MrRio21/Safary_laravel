{{-- @extends('') --}}

@section('navbar')
    

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./assets/nav/fonts/icomoon/style.css">

    <link rel="stylesheet" href="./assets/nav/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./assets/nav/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="./assets/nav/css/style.css">

{{-- ==========================================================================================================================+++++++++++++++++++++++++====== --}}
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title> Savary </title>

    <link rel="stylesheet" href="assets//asset/css/index.css">
    <link id="u-page-google-font" rel="stylesheet"+
        href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700">

 

    <!--- custom css link-->
    <link rel="stylesheet" href="assets//asset/css/css1/landing.css">

    <!-- - google font link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Comforter+Brush&family=Heebo:wght@400;500;600;700&display=swap"
        rel="stylesheet">


    <!-- Favicons -->
    <!-- <link href="assets/img/favicon.png" rel="icon"> -->
    <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/asset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/asset/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/asset/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/asset/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Variables CSS Files. Uncomment your preferred color scheme -->
    <link href="assets/asset/css/css1/variables.css " rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="assets/asset/css/css1/main.css" rel="stylesheet">

    <title>Safary Travel</title>
  </head>
  <body>


    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <div class="site-navbar-wrap">
      <div class="site-navbar-top">
        <div class="container py-3">
          <div class="row align-items-center">
            <div class="col-6">
              <div class="d-flex mr-auto">
                <a href="#" class="d-flex align-items-center mr-4">
                  <span class="icon-envelope mr-2"></span>
                  <span class="d-none d-md-inline-block">info@domain.com</span>
                </a>
                <a href="#" class="d-flex align-items-center mr-auto">
                  <span class="icon-phone mr-2"></span>
                  <span class="d-none d-md-inline-block">+1 234 4567 8910</span>
                </a>
              </div>
            </div>
            <div class="col-6 text-right">
              <div class="mr-auto">
                <a href="#" class="p-2 pl-0"><span class="icon-twitter"></span></a>
                <a href="#" class="p-2 pl-0"><span class="icon-facebook"></span></a>
                <a href="#" class="p-2 pl-0"><span class="icon-linkedin"></span></a>
                <a href="#" class="p-2 pl-0"><span class="icon-instagram"></span></a>
              </div>
              
            </div>
          </div>
        </div>
      </div>

      <div class="site-navbar site-navbar-target js-sticky-header">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-2">
              <h1 class="my-0 site-logo"><a href="index.html">Brand</a></h1>
            </div>
            <div class="col-10">
              <nav class="site-navigation text-right" role="navigation">
                <div class="container">
                  <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                  <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
                    <li class="active"><a href="#home-section" class="nav-link">Home</a></li>
                    <li><a href="#classes-section" class="nav-link">Classes</a></li>
                    <li class="has-children">
                      <a href="#" class="nav-link">Pages</a>
                      <ul class="dropdown arrow-top">

                        <li><a href="{{route('AdminDash')}}" class="nav-link">dashboardAdmin</a></li>
                        <li><a href="{{route('TourguideProfile.index')}}" class="nav-link">dashboardTourguide</a></li>
                        <li><a href="{{route('driverprofileDash.index')}}" class="nav-link">dashboardDriver</a></li>
                        <li><a href="{{route('hotelOwnerDashboard')}}" class="nav-link">dashboardHotelOwner</a></li>
                        {{-- <li class="has-children">
                          <a href="#">dashbourd</a>
                          <ul class="dropdown">
                            <li><a href="dashboardAdmin.admin.html" class="nav-link">dashboardAdmin</a></li>
                            <li><a href="dashboardTourguide.dashboardview.html" class="nav-link">dashboardTourguide</a></li>
                            <li><a href="dashboardDriver.dashboardView.html" class="nav-link">dashboardDriver</a></li>
                            <li><a href="dashboardHotelOwner.index.html" class="nav-link">dashboardHotelOwner</a></li>
                          </ul>
                        </li> --}}
                      </ul>
                    </li>
                    <li><a href="url('allPlaces/allPlaces.html')" class="nav-link">places</a></li>
                    <li><a href="allTourguide/allTourguide.html" class="nav-link">allTourguide</a></li>
                    <li><a href="dashboardAdmin/admin.html" class="nav-link">dashboardAdmin</a></li>
                    <li><a href="#contact-section" class="nav-link">Contact</a></li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    

  


    <script src="./assets/nav/js/jquery-3.3.1.min.js"></script>
    <script src="./assets/nav/js/popper.min.js"></script>
    <script src="./assets/nav/js/bootstrap.min.js"></script>
    <script src="./assets/nav/js/jquery.sticky.js"></script>
    <script src="./assets/nav/js/main.js"></script>





    <div class="hero" style="background-image: url('./assets/aswan_overview_3.jpg');"></div>






@yield("bodyContent")





    


    <footer>
      <div class="waves">
          <div class="wave" id="wave1"></div>
          <div class="wave" id="wave2"></div>
          <div class="wave" id="wave3"></div>
          <div class="wave" id="wave4"></div>
      </div>
      <div class="container">
         




<!-- 
  - #FOOTER
-->

<footer class="footer" style="background-color:rgba(20, 118, 255, 0.102); margin-top: 200px;">
  <div class="container">

    <div class="footer-top">

      <ul class="footer-list">

        <li>
          <p class="footer-list-title">Top destination</p>
        </li>

        <li>
          <a href="#" class="footer-link">Indonesia, Jakarta</a>
        </li>

        <li>
          <a href="#" class="footer-link">Maldives, Malé</a>
        </li>

        <li>
          <a href="#" class="footer-link">Australia, Canberra</a>
        </li>

        <li>
          <a href="#" class="footer-link">Thailand, Bangkok</a>
        </li>

        <li>
          <a href="#" class="footer-link">Morocco, Rabat</a>
        </li>

      </ul>

      <ul class="footer-list">

        <li>
          <p class="footer-list-title">Categories</p>
        </li>

        <li>
          <a href="#" class="footer-link">Travel</a>
        </li>

        <li>
          <a href="#" class="footer-link">Lifestyle</a>
        </li>

        <li>
          <a href="#" class="footer-link">Fashion</a>
        </li>

        <li>
          <a href="#" class="footer-link">Education</a>
        </li>

        <li>
          <a href="#" class="footer-link">Food & Drink</a>
        </li>

      </ul>

      <ul class="footer-list">

        <li>
          <p class="footer-list-title">Quick links</p>
        </li>

        <li>
          <a href="#" class="footer-link">About</a>
        </li>

        <li>
          <a href="#" class="footer-link">Contact</a>
        </li>

        <li>
          <a href="#" class="footer-link">Tours</a>
        </li>

        <li>
          <a href="#" class="footer-link">Booking</a>
        </li>

        <li>
          <a href="#" class="footer-link">Terms & Conditions</a>
        </li>

      </ul>

      <div class="footer-list">

        <p class="footer-list-title">Get a newsletter</p>

        <p class="newsletter-text">
          For the latest deals and tips, travel no further than your inbox
        </p>

        <form action="" class="newsletter-form">
          <input type="email" name="email" required placeholder="Email address" class="newsletter-input" >

          <button type="submit" class="btn btn-primary">Subscribe</button>
        </form>

      </div>

    </div>

    <div class="footer-bottom">

      <a href="#" class="logo">Tourest</a>

      <p class="copyright">
        &copy; 2022 <a href="#" class="copyright-link">codewithsadee</a>. All Rights Reserved
      </p>

      <ul class="social-list">

        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-facebook"></ion-icon>
          </a>
        </li>

        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-twitter"></ion-icon>
          </a>
        </li>
        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-instagram"></ion-icon>
          </a>
        </li>
        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-linkedin"></ion-icon>
          </a>
        </li>
        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-google"></ion-icon>
          </a>
        </li>
      </ul>
    </div>

  </div>
</footer>
      </div>
  </footer>


  <!-- <script src="./assets/js/index.js"></script> -->



  <script src="assets/asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/asset/vendor/aos/aos.js"></script>
  <script src="assets/asset/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/asset/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/asset/vendor/swiper/swiper-bundle.min.js"></script>
  <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->

  <!-- Main JS File -->
  <script src="assets//asset/js/main.js"></script>


  <!-- 
  - custom js link
-->
  <script src="assets//asset/js/landing.js"></script>

  <!-- 
  - ionicon link
-->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    
  </body>
</html>

