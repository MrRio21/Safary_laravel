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
                        <li><a href="#" class="nav-link">Team</a></li>
                        <li><a href="#" class="nav-link">Pricing</a></li>
                        <li><a href="#" class="nav-link">FAQ</a></li>
                        <li class="has-children">
                          <a href="#">More Links</a>
                          <ul class="dropdown">
                            <li><a href="#">Menu One</a></li>
                            <li><a href="#">Menu Two</a></li>
                            <li><a href="#">Menu Three</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li><a href="#about-section" class="nav-link">About</a></li>
                    <li><a href="#events-section" class="nav-link">Events</a></li>
                    <li><a href="#gallery-section" class="nav-link">Gallery</a></li>
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


@endsection


    <div class="hero" style="background-image: url('./assets/R (1).jpg');"></div>
  </body>
</html>

