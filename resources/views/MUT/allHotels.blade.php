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


  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
  <link rel="stylesheet" href="./assets/css/sidebar.css">
  <link rel="stylesheet" href="./assets/css/cards.css">

</head>

<body>
  <!-- Side Bar -->
<!-- <div class="layout has-sidebar fixed-sidebar fixed-header">
  <aside id="sidebar" class="sidebar break-point-lg has-bg-image">
    <div class="image-wrapper">
      <img src="https://user-images.githubusercontent.com/25878302/144499035-2911184c-76d3-4611-86e7-bc4e8ff84ff5.jpg" alt="sidebar background" />
    </div>
    <div class="sidebar-layout">
      <div class="sidebar-header">
        <span style="
                text-transform: uppercase;
                font-size: 15px;
                letter-spacing: 3px;
                font-weight: bold;
              ">Tourism guide</span>
      </div>
      <div class="sidebar-content">
        <nav class="menu open-current-submenu">
          <ul>
            <li class="menu-item sub-menu">
              <a href="#">
                <span class="menu-icon">
                  <i class="ri-vip-diamond-fill"></i>
                </span>
                <span class="menu-title">Components</span>
                <span class="menu-suffix">&#x1F525;</span>
              </a>
              <div class="sub-menu-list">
                <ul>
                  <li class="menu-item">
                    <a href="#">
                      <span class="menu-title">Grid</span>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="#">
                      <span class="menu-title">Layout</span>
                    </a>
                  </li>
                  <li class="menu-item sub-menu">
                    <a href="#">
                      <span class="menu-title">Forms</span>
                    </a>
                    <div class="sub-menu-list">
                      <ul>
                        <li class="menu-item">
                          <a href="#">
                            <span class="menu-title">Input</span>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="#">
                            <span class="menu-title">Select</span>
                          </a>
                        </li>
                        <li class="menu-item sub-menu">
                          <a href="#">
                            <span class="menu-title">More</span>
                          </a>
                          <div class="sub-menu-list">
                            <ul>
                              <li class="menu-item">
                                <a href="#">
                                  <span class="menu-title">CheckBox</span>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="#">
                                  <span class="menu-title">Radio</span>
                                </a>
                              </li>
                              <li class="menu-item sub-menu">
                                <a href="#">
                                  <span class="menu-title">Want more ?</span>
                                  <span class="menu-suffix">&#x1F914;</span>
                                </a>
                                <div class="sub-menu-list">
                                  <ul>
                                    <li class="menu-item">
                                      <a href="#">
                                        <span class="menu-prefix">&#127881;</span>
                                        <span class="menu-title">You made it </span>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </div>
            </li>
            <li class="menu-item sub-menu">
              <a href="#">
                <span class="menu-icon">
                  <i class="ri-bar-chart-2-fill"></i>
                </span>
                <span class="menu-title">Charts</span>
              </a>
              <div class="sub-menu-list">
                <ul>
                  <li class="menu-item">
                    <a href="#">
                      <span class="menu-title">Pie chart</span>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="#">
                      <span class="menu-title">Line chart</span>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="#">
                      <span class="menu-title">Bar chart</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="menu-item sub-menu">
              <a href="#">
                <span class="menu-icon">
                  <i class="ri-shopping-cart-fill"></i>
                </span>
                <span class="menu-title">E-commerce</span>
              </a>
              <div class="sub-menu-list">
                <ul>
                  <li class="menu-item">
                    <a href="#">
                      <span class="menu-title">Products</span>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="#">
                      <span class="menu-title">Orders</span>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="#">
                      <span class="menu-title">credit card</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="menu-item sub-menu">
              <a href="#">
                <span class="menu-icon">
                  <i class="ri-global-fill"></i>
                </span>
                <span class="menu-title">Maps</span>
              </a>
              <div class="sub-menu-list">
                <ul>
                  <li class="menu-item">
                    <a href="#">
                      <span class="menu-title">Google maps</span>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="#">
                      <span class="menu-title">Open street map</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="menu-item sub-menu">
              <a href="#">
                <span class="menu-icon">
                  <i class="ri-brush-3-fill"></i>
                </span>
                <span class="menu-title">Theme</span>
              </a>
              <div class="sub-menu-list">
                <ul>
                  <li class="menu-item">
                    <a href="#">
                      <span class="menu-title">Dark</span>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="#">
                      <span class="menu-title">Light</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="menu-item">
              <a href="#">
                <span class="menu-icon">
                  <i class="ri-book-2-fill"></i>
                </span>
                <span class="menu-title">Documentation</span>
              </a>
            </li>
            <li class="menu-item">
              <a href="#">
                <span class="menu-icon">
                  <i class="ri-calendar-fill"></i>
                </span>
                <span class="menu-title">Calendar</span>
              </a>
            </li>
            <li class="menu-item">
              <a href="#">
                <span class="menu-icon">
                  <i class="ri-service-fill"></i>
                </span>
                <span class="menu-title">Examples</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
      <div class="sidebar-footer"><span>Sidebar footer</span></div>
    </div>
  </aside>
  <div id="overlay" class="overlay"></div>
  <div class="layout">
    <header class="header">
      <a id="btn-collapse" href="#">
        <i class="ri-menu-line ri-xl"></i>
      </a>
      <a id="btn-toggle" href="#" class="sidebar-toggler break-point-lg">
        <i class="ri-menu-line ri-xl"></i>
      </a>
    </header>
    <main class="content">
      <div>
        <h1>Pro Sidebar</h1>
        <p>
          Responsive layout with advanced sidebar menu built with SCSS and vanilla Javascript
        </p>
        <p>
          Full Code and documentation available on  <a href="https://github.com/azouaoui-med/pro-sidebar-template" target="_blank">Github</a>
        </p>
        <div>
          <a href="https://github.com/azouaoui-med/pro-sidebar-template" target="_blank">
            <img alt="GitHub stars" src="https://img.shields.io/github/stars/azouaoui-med/pro-sidebar-template?style=social" />
          </a>
          <a href="https://github.com/azouaoui-med/pro-sidebar-template" target="_blank">
            <img alt="GitHub forks" src="https://img.shields.io/github/forks/azouaoui-med/pro-sidebar-template?style=social" />
          </a>
        </div>
      </div>
      <div>
        <h2>Features</h2>
        <ul>
          <li>Fully responsive</li>
          <li>Collapsable sidebar</li>
          <li>Multi level menu</li>
          <li>RTL support</li>
          <li>Customizable</li>
        </ul>
      </div>
      <div>
        <h2>Resources</h2>
        <ul>
          <li>
            <a target="_blank" href="https://github.com/azouaoui-med/css-pro-layout">
              Css Pro Layout</a>
          </li>
          <li>
            <a target="_blank" href="https://github.com/popperjs/popper-core"> Popper Core</a>
          </li>
          <li>
            <a target="_blank" href="https://remixicon.com/"> Remix Icons</a>
          </li>
        </ul>
      </div>
      <footer class="footer">
        <small style="margin-bottom: 20px; display: inline-block">
          © 2022 made with
          <span style="color: red; font-size: 18px">&#10084;</span> by -
          <a target="_blank" href="https://azouaoui.netlify.com"> Mohamed Azouaoui </a>
        </small>
        <br />
        <div>
          <a href="https://github.com/azouaoui-med" target="_blank" rel="noopener noreferrer">
            <img alt="GitHub followers" src="https://img.shields.io/github/followers/azouaoui-med?label=github&style=social" />
          </a>
          <a href="https://twitter.com/azouaoui_med" target="_blank" rel="noopener noreferrer">
            <img alt="Twitter Follow" src="https://img.shields.io/twitter/follow/azouaoui_med?label=twitter&style=social" />
          </a>
        </div>
      </footer>
    </main>
    <div class="overlay"></div>
  </div>
</div> -->
<!-- End Side Bar -->
  <section class="head">
    <div class="container flex1">
      <div class="scoial">
        <i class="fab fa-facebook-f"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-youtube"></i>
      </div>
      {{-- <div class="logo">
        <img src="./assets/hotel&roomImgs/Aswan_logo.png" style="height: 60px;" alt="">
      </div> --}}
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


  <section class="home" id="home">
    <div class="container">
      <h1>Make Memories</h1>
      <p>Discover the place where you have fun & enjoy a lot</p>

      <div class="content grid">
        <div class="box">
          <span>ARRIVAL DATE </span> <br>
          <input type="date" placeholder="29/20/2021">
        </div>
        <div class="box">
          <span>DEPARTURE DATE </span> <br>
          <input type="date" placeholder="29/20/2021">
        </div>
        <div class="box">
          <span>ADULTS</span> <br>
          <input type="number" placeholder="01">
        </div>
        <div class="box">
          <span>CHILDREN </span> <br>
          <input type="number" placeholder="01">
        </div>
        <div class="box">
          <button class="flex1">
            <span>Check Availability</span>
            <i class="fas fa-arrow-circle-right"></i>
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- Cards -->
  <section class="about" id="about">
    <div class="container">


      <div class="cards">
        <div class="card">
            <div class="container">
                <div class="row mt-5">
                  <div class="preview-card">
                    <div class="preview-card__wrp">
                      <div class="preview-card__item">
                        <div class="preview-card__img">
                            <img src="./assets/hotel&roomImgs/Aswan, Egypt Series_ Movenpick 5.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="preview-card__content">
                          <div class="preview-card__title">Movenpick Aswan</div>
                          <span class="preview-card__code"> <b>Price:</b> 250$</span>
                          <div class="preview-card__text">
                            <ul class="preview-card__icon" style="list-style-type: none;">
                                <i class="fa-sharp fa-solid fa-wifi"></i><li style="display: inline-block; padding-left: 5px;">Free wifi</li>
                                <br>
                                <i class="fa-solid fa-square-parking"></i><li style="display: inline-block; padding-left: 5px;">Parking</li>
                                <br>
                                <i class="fa-solid fa-dumbbell"></i><li style="display: inline-block; padding-left: 5px;">Gym</li>
                            </ul>
                            <br>
                            <h3 style="color: rgb(204, 140, 24);">Description: </h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium repellat sunt harum inventore placeat reiciendis debitis repudiandae veritatis hic voluptate excepturi aliquam ipsum quisquam, nihil optio tempore dolores odit quo.</p>
                          </div>
                          <a href="#" class="preview-card__button">BOOK NOW</a>
                        </div>
                      </div>

                    </div>
                  </div>

                  <div class="preview-card">
                    <div class="preview-card__wrp">
                      <div class="preview-card__item swiper-slide">
                        <div class="preview-card__img">
                          <img src="./assets/hotel&roomImgs/Old Cataract Hotel - Aswan 1.jpg" alt="">
                        </div>
                        <div class="preview-card__content">
                          <div class="preview-card__title">Old Cataract</div>
                          <span class="preview-card__code"><b>Price:</b> 300$</span>
                          <div class="preview-card__text">
                            <ul style="list-style-type: none;">
                                <i class="fa-sharp fa-solid fa-wifi"></i><li style="display: inline-block; padding-left: 5px;">Free wifi</li>
                                <br>
                                <i class="fa-solid fa-square-parking"></i><li style="display: inline-block; padding-left: 5px;">Parking</li>
                                <br>
                                <i class="fa-solid fa-dumbbell"></i><li style="display: inline-block; padding-left: 5px;">Gym</li>
                            </ul>
                            <br>
                            <h3>Description: </h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium repellat sunt harum inventore placeat reiciendis debitis repudiandae veritatis hic voluptate excepturi aliquam ipsum quisquam, nihil optio tempore dolores odit quo.</p>

                          </div>
                          <a href="#" class="preview-card__button">BOOK NOW</a>
                        </div>
                      </div>

                    </div>
                  </div>

                </div>
              </div>
        </div>
    </div>
    </div>
  </section>
<!-- End Cards -->

  <!-- <section class="wrapper">
    <div class="container">
      <div class="owl-carousel owl-theme">
        <div class="item">
          <div class="heading">
            <h5>THE CITY VIEW</h5>
            <h3>A charming view of the city</h3>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p> Duis
            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="item">
          <div class="heading">
            <h5>THE CITY VIEW</h5>
            <h3>A charming view of the city</h3>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p> Duis
            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="item">
          <div class="heading">
            <h5>THE CITY VIEW</h5>
            <h3>A charming view of the city</h3>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p> Duis
            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
    </div>
  </section> -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
  <script>
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
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


  <section class="wrapper2">
    <div class="container">
      <div class="heading mtop">
        <h5>FACILITIES</h5>
        <h2>Giving entirely awesome </h2>
      </div>

      <div class="content grid mtop">
        <div class="box">
          <i class="fas fa-shipping-fast"></i>
          <h3>Pick Up & Drop</h3>
          <p>parkn ipsum dolor sit amet, consectetur adiing elit sed do eiu</p>
          <span class='far fa-long-arrow-alt-right'></span>
        </div>
        <div class="box">
          <i class="fas fa-mug-hot"></i>
          <h3>Pick Up & Drop</h3>
          <p>parkn ipsum dolor sit amet, consectetur adiing elit sed do eiu</p>
          <span class='far fa-long-arrow-alt-right'></span>
        </div>
        <div class="box">
          <i class="fas fa-car"></i>
          <h3>Pick Up & Drop</h3>
          <p>parkn ipsum dolor sit amet, consectetur adiing elit sed do eiu</p>
          <span class='far fa-long-arrow-alt-right'></span>
        </div>
        <div class="box">
          <i class="far fa-water"></i>
          <h3>Pick Up & Drop</h3>
          <p>parkn ipsum dolor sit amet, consectetur adiing elit sed do eiu</p>
          <span class='far fa-long-arrow-alt-right'></span>
        </div>
      </div>
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
            <img src="./images/Old Cataract Hotel - Aswan 5.jpg" alt="">
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
            <img src="image/logo.png" alt="">
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

</body>


</html>
