<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
<link rel="stylesheet" href="{{asset('assets/css/nav.css')}}">
<!-- <link rel="stylesheet" href="{{asset("assets/css/footer.css")}}"> -->


    <title>{{config('app.name')}}</title>
</head>

<body>
  @include('sweetalert::alert');


<!-- ====================================================================================== -->
    <!-- Header section -->
    <header class="header py-5 ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">SAFARI ASWAN</h2>
                </div>
            </div>
        </div>
        <div class="container-fluid px-md-5">
            <div class="row justify-content-between">
                <!-- LOGO & SEARCH -->
                <div class="col-md-8 order-md-last">
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <a class="navbar-brand" href="index.html">Discover the Land of Gold
                                <span>Tourism Agency</span></a>
                        </div>
                        <!-- SEARCH -->
                        <div class="col-md-6 d-md-flex justify-content-end mb-md-0 mb-3">
                            <form action="#" class="searchform order-lg-last">
                                <div class="form-group d-flex">
                                    <input type="text" class="form-control pl-3" placeholder="Search">
                                    <button type="submit" placeholder="" class="form-control search"><span
                                            class="fa fa-search"></span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- FONTAWSOME -->
                <div class="col-md-4 d-flex">
                    <div class="social-media">
                        <p class="mb-0 d-flex">
                            <a href="#" class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Implement the Navbar -->
    <nav class="navbar navbar-expand-sm sticky-top navbar-dark m-0" id="ftco-navbar">
        <!-- <div class="container"> -->
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Custom Trip</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="#">Check your trip</a>
                            <a class="dropdown-item" href="#">Check your Hotel</a>
                            <a class="dropdown-item" href="#">Check your Places</a>
                            <a class="dropdown-item" href="#">Check your Tour gide</a>
                        </div>
                    </li> 
                    <li class="nav-item"><a href="{{url('allHotel')}}" class="nav-link">Hotels</a></li>
                    <li class="nav-item"><a href="{{url('allPlaces')}}"  class="nav-link">Places</a></li>
                    <li class="nav-item"><a href="{{url('allTourguide')}}" class="nav-link">Tour gides</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Transportation</a></li>
                    <li class="nav-item"><a href="{{url('aboutUs')}}" class="nav-link">About Us</a></li>
                    <!-- AUTH -->
                    <li class="nav-item">
                        <!-- <ul class="navbar-nav ms-auto">
                          @guest
                              @if (Route::has('login'))
                                  <li class="nav-item">
                                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                  </li>
                              @endif
          
                              @if (Route::has('register'))
                                  <li class="nav-item">
                                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                  </li>
                              @endif
                          @else
                              <li class="nav-item dropdown">
                                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                      {{ Auth::user()->name }}
                                  </a>
          
                                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item" href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                       document.getElementById('logout-form').submit();">
                                          {{ __('Logout') }}
                                      </a>
          
                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                          @csrf
                                      </form>
                                  </div>
                              </li>
                          @endguest
                      </ul> -->
                    </li>
                </ul>
            </div>
        </div>
        </div>
    </nav>
    <main>
        @yield("body")
    </main>

<!--  #FOOTER -->

<!-- <footer class="footer" style="background-color:rgba(20, 118, 255, 0.102); margin-top: 200px;">
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
</footer> -->



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

    <!-- Bootstrap Javascript bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
</body>
</html>