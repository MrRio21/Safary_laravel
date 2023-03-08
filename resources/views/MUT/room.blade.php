<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <title>Hotel Booking Website</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
  integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/room.css">


  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
  <link rel="stylesheet" href="./assets/css/sidebar.css">
  <link rel="stylesheet" href="./assets/css/cards.css">

</head>

<body>

  <section class="head">
    <div class="container flex1">
      <div class="scoial">
        <i class="fab fa-facebook-f"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-youtube"></i>
      </div>
      <!-- <div class="logo">
        <img src="./images/Aswan_logo.png" style="height: 60px;" alt="">
      </div> -->
      <div class="address">
        <i class="fas fa-map-marker-alt"></i>
        <span>Aswan, Egypt</span>
      </div>
    </div>
  </section>


  <header class="header">
    <div class="container">
      <nav class="navbar flex1">
        <div class="sticky_logo logo">
          <img src="./assets/hotel&roomImgs/logo.png" alt="">
        </div>

        <ul class="nav-menu">
          <li> <a href="#home">Home</a> </li>
          <li> <a href="#about">Hotels</a> </li>
          <li> <a href="#room">room</a> </li>
          <li> <a href="#services">services</a> </li>
          <li> <a href="#shop">shop</a> </li>
          <li> <a href="#testimonials">testimonials</a> </li>
          <li> <a href="#gallary">gallary</a> </li>
          <li> <a href="#blog">blog</a> </li>
          <li> <a href="#contact">contact</a> </li>
        </ul>
        <div class="hamburger">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>

        <div class="head_contact">
          <i class="fas fa-phone-volume"></i>
          <span>+000 1234 5678</span>
        </div>
      </nav>
    </div>
  </header>




  <section class="home" id="home">
    <div class="container">
      <h1>Make Memories</h1>
      <p>Discover the place where you have fun & enjoy a lot</p>


    </div>
  </section>



  <section class="room wrapper2 top" id="room">
    <div class="container">
      <div class="heading">
        <h5>OUR ROOMS</h5>
        <h2>Fascinating rooms & suites </h2>
      </div>
      <div class="content flex mtop">
        <div class="left grid2">
          <div class="box">
            <i class="fas fa-desktop"></i>
            <p>Free Cost</p>
            <h3>No booking fee</h3>
          </div>
          <div class="box">
            <i class="fas fa-dollar-sign"></i>
            <p>Free Cost</p>
            <h3>Best rate guarantee</h3>
          </div>
          <div class="box">
            <i class="fab fa-resolving"></i>
            <p>Free Cost</p>
            <h3>Reservations 24/7</h3>
          </div>
          <div class="box">
            <i class="fal fa-alarm-clock"></i>
            <p>Free Cost</p>
            <h3>High-speed Wi-Fi</h3>
          </div>
          <div class="box">
            <i class="fas fa-mug-hot"></i>
            <p>Free Cost</p>
            <h3>Free breakfast</h3>
          </div>
          <div class="box">
            <i class="fas fa-user-tie"></i>
            <p>Free Cost</p>
            <h3>One person free</h3>
          </div>
        </div>
        <div class="right">
          <img src="./assets/hotel&roomImgs/r.jpg" alt="">
        </div>
      </div>
    </div>
  </section>

  <section class="timer about wrapper">
    <div class="background"> </div>
    <div class="container">
      <div class="heading">
        <h5>LAST MINUTE!</h5>
        <h2> <span>Incredible!</span> Are you coming today</h2>
      </div>

      <div id="time" class="flex1 mtop"> </div>
    </div>
  </section>
  <script src="js/jquery.countdown.js" charset="utf-8"></script>
  <script src="js/jquery.countdown.min.js" charset="utf-8"></script>
  <script type="text/javascript">
    $('#time').countdown('2024/01/01', function(event) {
      $(this).html(event.strftime(
        '<div class="clock"><span>%d</span> <p>Days</p></div> ' +
        '<div class="clock"><span>%H</span> <p>Hours</p></div> ' +
        '<div class="clock"><span>%M</span> <p>Minutes</p></div> ' +
        '<div class="clock"><span>%S</span> <p>Seconds</p></div> '
      ));
    });
  </script>


  <section class="offer mtop" id="services">
    <div class="container">
      <div class="heading">
        <h5>EXCLUSIVE OFFERS </h5>
        <h3>You can get an exclusive offer </h3>
      </div>

      <div class="content grid2 mtop">
        <div class="box flex">
          <div class="left">
            <img src="./assets/hotel&roomImgs/o1.jpg" alt="">
          </div>
          <div class="right">
            <h4>Deluxe Room</h4>
            <div class="rate flex">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <h5>From $50.6/night</h5>
            <button class="flex1">
              <span>Check Availability</span>
              <i class="fas fa-arrow-circle-right"></i>
            </button>
          </div>
        </div>
        <div class="box flex">
          <div class="left">
            <img src="./assets/hotel&roomImgs/o2.jpg" alt="">
          </div>
          <div class="right">
            <h4>Deluxe Room</h4>
            <div class="rate flex">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <h5>From $50.6/night</h5>
            <button class="flex1">
              <span>Check Availability</span>
              <i class="fas fa-arrow-circle-right"></i>
            </button>
          </div>
        </div>
        <div class="box flex">
          <div class="left">
            <img src="./assets/hotel&roomImgs/o3.jpg" alt="">
          </div>
          <div class="right">
            <h4>Deluxe Room</h4>
            <div class="rate flex">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <h5>From $50.6/night</h5>
            <button class="flex1">
              <span>Check Availability</span>
              <i class="fas fa-arrow-circle-right"></i>
            </button>
          </div>
        </div>
        <div class="box flex">
          <div class="left">
            <img src="./assets/hotel&roomImgs/o4.jpg" alt="">
          </div>
          <div class="right">
            <h4>Deluxe Room</h4>
            <div class="rate flex">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <h5>From $50.6/night</h5>
            <button class="flex1">
              <span>Check Availability</span>
              <i class="fas fa-arrow-circle-right"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="area top">
    <div class="container">
      <div class="heading">
        <h5>RESTAURANT</h5>
        <h3>The area we cover under ecorik</h3>
      </div>

      <div class="content flex mtop">
        <div class="left">
          <img src="./assets/hotel&roomImgs/aera.jpg" alt="">
        </div>
        <div class="right">
          <ul>
            <li>Restaurant </li>
            <li>Swimming pool </li>
            <li>Conference room</li>
          </ul>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p>Duis
            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <button class="flex1">
            <span>Check Availability</span>
            <i class="fas fa-arrow-circle-right"></i>
          </button>
        </div>
      </div>
    </div>
  </section>

  <section class="offer2 about wrapper timer top" id="shop">
    <div class="container">
      <div class="heading">
        <h5>EXCLUSIVE OFFERS </h5>
        <h3>You can get an exclusive offer </h3>
      </div>

      <div class="content grid  top">
        <div class="box">
          <h5>UP TO 30% OFF</h5>
          <h3>Swimming for man</h3>
          <span>4.5 <label>(432 Reviews)</label> </span>
          <p>Swimming doller dolor sit aet odu tur adiing elitse</p>
          <div class="flex">
            <i class="fal fa-alarm-clock"> Duration: 2Hours</i>
            <i class="far fa-dot-circle"> 18+ years</i>
          </div>
          <button class="flex1">
            <span>Check Availability</span>
            <i class="fas fa-arrow-circle-right"></i>
          </button>
        </div>
        <div class="box">
          <h5>UP TO 30% OFF</h5>
          <h3>Swimming for man</h3>
          <span>4.5 <label>(432 Reviews)</label> </span>
          <p>Swimming doller dolor sit aet odu tur adiing elitse</p>
          <div class="flex">
            <i class="fal fa-alarm-clock"> Duration: 2Hours</i>
            <i class="far fa-dot-circle"> 18+ years</i>
          </div>
          <button class="flex1">
            <span>Check Availability</span>
            <i class="fas fa-arrow-circle-right"></i>
          </button>
        </div>
        <div class="box">
          <h5>UP TO 30% OFF</h5>
          <h3>Swimming for man</h3>
          <span>4.5 <label>(432 Reviews)</label> </span>
          <p>Swimming doller dolor sit aet odu tur adiing elitse</p>
          <div class="flex">
            <i class="fal fa-alarm-clock"> Duration: 2Hours</i>
            <i class="far fa-dot-circle"> 18+ years</i>
          </div>
          <button class="flex1">
            <span>Check Availability</span>
            <i class="fas fa-arrow-circle-right"></i>
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- Customers Feedback -->
  <section class="customer top" id="testimonials">
    <div class="container">
      <div class="heading">
        <h5>TESTIMONIALS </h5>
        <h3>What customers say </h3>
      </div>

      <div class="owl-carousel owl-theme mtop">
        <div class="item">
          <div class="rate">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h3>Excellent Swimming</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <div class="admin flex">
            <div class="img">
              <img src="./assets/hotel&roomImgs/c1.jpg" alt="">
            </div>
            <div class="text">
              <h3>Ayman Jensi</h3>
              <span>Manager</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="rate">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h3>Excellent Swimming</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <div class="admin flex">
            <div class="img">
              <img src="./assets/hotel&roomImgs/c2.jpg" alt="">
            </div>
            <div class="text">
              <h3>Ayman Jensi</h3>
              <span>Manager</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="rate">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h3>Excellent Swimming</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <div class="admin flex">
            <div class="img">
              <img src="./assets/hotel&roomImgs/c3.jpg" alt="">
            </div>
            <div class="text">
              <h3>Ayman Jensi</h3>
              <span>Manager</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      nav: false,
      dots: false,
      navText: ["<i class='far fa-long-arrow-alt-left'></i>", "<i class='far fa-long-arrow-alt-right'></i>"],
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 1
        },
        1000: {
          items: 1
        }
      }
    })
  </script>
<!-- End Customers Feedback -->

  <section class="gallary top" id="gallary">
    <div class="owl-carousel owl-theme">
      <div class="item">
        <img src="./assets/hotel&roomImgs/Aswan, Egypt Series_ Movenpick 1.png" alt="">
        <div class="overlay">
          <i class="fab fa-instagram"></i>
        </div>
      </div>
      <div class="item">
        <img src="./assets/hotel&roomImgs/Aswan, Egypt Series_ Movenpick 2.jpg" alt="">
        <div class="overlay">
          <i class="fab fa-instagram"></i>
        </div>
      </div>
      <div class="item">
        <img src="./assets/hotel&roomImgs/Aswan, Egypt Series_ Movenpick 3.jpg" alt="">
        <div class="overlay">
          <i class="fab fa-instagram"></i>
        </div>
      </div>
      <div class="item">
        <img src="./assets/hotel&roomImgs/Aswan, Egypt Series_ Movenpick 4.jpg" alt="">
        <div class="overlay">
          <i class="fab fa-instagram"></i>
        </div>
      </div>
      <div class="item">
        <img src="./assets/hotel&roomImgs/Aswan, Egypt Series_ Movenpick 5.jpg" alt="">
        <div class="overlay">
          <i class="fab fa-instagram"></i>
        </div>
      </div>
      <div class="item">
        <img src="./assets/hotel&roomImgs/Old Cataract Hotel - Aswan 1.jpg" alt="">
        <div class="overlay">
          <i class="fab fa-instagram"></i>
        </div>
      </div>
      <div class="item">
        <img src="./assets/hotel&roomImgs/Old Cataract Hotel - Aswan 2.jpg" alt="">
        <div class="overlay">
          <i class="fab fa-instagram"></i>
        </div>
      </div>
      <div class="item">
        <img src="./assets/hotel&roomImgs/Old Cataract Hotel - Aswan 3.png" alt="">
        <div class="overlay">
          <i class="fab fa-instagram"></i>
        </div>
      </div>
    </div>

  </section>

  <script>
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      dots: false,
      autoplay: true,
      slideTransition: 'linear',
      autoplayTimeout: 4000,
      autoplaySpeed: 4000,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 3
        },
        1000: {
          items: 5
        }
      }
    })
  </script>

<!-- Articals -->
  <section class="blog top" id="blog">
    <div class="container">
      <div class="heading">
        <h5>OUR BLOG</h5>
        <h3>News & articles updates</h3>
      </div>

      <div class="content grid mtop">
        <div class="box">
          <div class="img">
            <img src="./assets/hotel&roomImgs/Old Cataract Hotel - Aswan 4.jpg" alt="">
            <span>HOTEL</span>
          </div>
          <div class="text">
            <div class="flex">
              <i class="far fa-user"> <label>Admin</label> </i>
              <i class="far fa-comments"> <label>Comment</label> </i>
            </div>
            <h3>Celebrating Decade Years Of Hotel In 2020</h3>
            <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a href="#">Read More <i class='far fa-long-arrow-alt-right'></i> </a>
          </div>
        </div>
        <div class="box">
          <div class="img">
            <img src="./assets/hotel&roomImgs/Old Cataract Hotel - Aswan 5.jpg" alt="">
            <span>HOTEL</span>
          </div>
          <div class="text">
            <div class="flex">
              <i class="far fa-user"> <label>Admin</label> </i>
              <i class="far fa-comments"> <label>Comment</label> </i>
            </div>
            <h3>Celebrating Decade Years Of Hotel In 2020</h3>
            <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a href="#">Read More <i class='far fa-long-arrow-alt-right'></i> </a>
          </div>
        </div>
        <div class="box">
          <div class="img">
            <img src="./assets/hotel&roomImgs/Photographic Print_ Nile River, Feluccas on the Nile River and Old Cataract Hotel, Aswan, Egypt by Steve Vidler _ 24x18in.jpg" alt="">
            <span>HOTEL</span>
          </div>
          <div class="text">
            <div class="flex">
              <i class="far fa-user"> <label>Admin</label> </i>
              <i class="far fa-comments"> <label>Comment</label> </i>
            </div>
            <h3>Celebrating Decade Years Of Hotel In 2020</h3>
            <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a href="#">Read More <i class='far fa-long-arrow-alt-right'></i> </a>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- End Articals -->

  <section class="map top">
    <div class="mapouter"><div class="gmap_canvas">
      <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=aswan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="600" height="600"></iframe>
  </section>


  <footer>
    <div class="container top">
      <div class="subscribe" id="contact">
        <h2>Subscribe newsletter</h2>
        <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <div class="input flex">
          <input type="email" placeholder="Your Email address">
          <button class="flex1">
            <span>Subscribe</span>
            <i class="fas fa-arrow-circle-right"></i>
          </button>
        </div>
      </div>

      <div class="content grid  top">
        <div class="box">
          <div class="logo">
            <img src="./assets/hotel&roomImgs/logo.png" alt="">
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
          <div class="social flex">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-youtube"></i>
          </div>
        </div>

        <div class="box">
          <h2>Quick Links</h2>
          <ul>
            <li><i class="fas fa-angle-double-right"></i>Big Data</li>
            <li><i class="fas fa-angle-double-right"></i>Wellness</li>
            <li><i class="fas fa-angle-double-right"></i>Spa Gallery</li>
            <li><i class="fas fa-angle-double-right"></i>Reservation</li>
            <li><i class="fas fa-angle-double-right"></i>FAQ</li>
            <li><i class="fas fa-angle-double-right"></i>Contact</li>
          </ul>
        </div>

        <div class="box">
          <h2>Services</h2>
          <ul>
            <li><i class="fas fa-angle-double-right"></i>Restaurant</li>
            <li><i class="fas fa-angle-double-right"></i>Swimming Pool</li>
            <li><i class="fas fa-angle-double-right"></i>Wellness & Spa</li>
            <li><i class="fas fa-angle-double-right"></i>Conference Room</li>
            <li><i class="fas fa-angle-double-right"></i>Events</li>
            <li><i class="fas fa-angle-double-right"></i>Adult Room</li>
          </ul>
        </div>

        <div class="box">
          <h2>Services</h2>
          <div class="icon flex">
            <div class="i">
              <i class="fas fa-map-marker-alt"></i>
            </div>
            <div class="text">
              <h3>Address</h3>
              <p>205 Fida Walinton, Tongo Street Front The USA</p>
            </div>
          </div>
          <div class="icon flex">
            <div class="i">
              <i class="fas fa-phone"></i>
            </div>
            <div class="text">
              <h3>Phone</h3>
              <p>+123 456 7898</p>
            </div>
          </div>
          <div class="icon flex">
            <div class="i">
              <i class="far fa-envelope"></i>
            </div>
            <div class="text">
              <h3>Email</h3>
              <p>hello@ecorik.com</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src='https://unpkg.com/@popperjs/core@2'></script>
  <script src="./assets/js/script.js"></script>
  <script>
    const hamburger = document.querySelector(".hamburger");
    const navMenu = document.querySelector(".nav-menu");

    hamburger.addEventListener("click", mobliemmenu);

    function mobliemmenu() {
      hamburger.classList.toggle("active");
      navMenu.classList.toggle("active");
    }

    window.addEventListener("scroll", function() {
      var header = document.querySelector("header");
      header.classList.toggle("sticky", window.scrollY > 0)
    })
  </script>
</body>


</html>
