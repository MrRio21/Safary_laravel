<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels</title>
</head>
<body>
    <h2>Hotels is working</h2>
    
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--  -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" /> 
  
    
    
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <link rel="stylesheet" href="./css/sidebar.css">
    <!--  -->
<link rel="stylesheet" href="{{asset("assets/css/hotel.css")}}">
    <title>Hotels</title>
</head>
<body>
    <!-- HERO SECTION -->
    <section class="home" id="home">
        <div class="container">
          <h1>HOTEL_Name</h1>
          <!-- <p>Discover your best stay</p> -->
    
          <!-- check -->
          <!-- <div class="content grid ">
            <div class="box">
              <span>ARRIVAL DATE </span> <br>
              <input type="date" placeholder="29/20/2021">
            </div>
            <div class="box">
              <span>DEPARTURE DATE</span><br>
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
                <span>Number of rooms</span> <br>
                <input type="number" placeholder="01">
              </div>
               <div class="box">
                <span>Type of rooms</span> <br>
                <input type="number" placeholder="01">
              </div>
            <div class="box-btn">
              <button class="flex1">
                <span routerLink="/hotels/room">Check Availability</span>
                <i class="fas fa-arrow-circle-right"></i>
              </button>
            </div>
          </div> -->
        </div>
    </section>

      <!-- ABIUT HOTEL -->
      <section class="area top">
        <div class="container">
          <div class="heading">
            <h5>our info</h5>
            <h3>Discover your best stay with us</h3>
          </div>
    
          <div class="content flex mtop">
            <div class="left">
              <img src="image/aera.jpg" alt="">
            </div>
            <div class="right">
              <ul>
                <li>Restaurant </li>
                <li>Swimming pool </li>
                <li>Conference room</li>
              </ul>
              <!-- DESCRIPTION IF EXIST -->
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque laborum totam placeat natus, illum consectetur ut eveniet! Consequuntur mollitia magnam veniam, quod eius, voluptates ipsam omnis inventore labore quae temporibus?
                <p>
               <!-- <button class="flex1">
                <span>Check Availability</span>
                <i class="fas fa-arrow-circle-right"></i>
              </button> -->
            </div>
          </div>
        </div>
      </section>

      <!-- rooms type -->
      <section class="offer mtop" id="services">
        <div class="container">
          <div class="heading">
            <h5>ROOMS TYPE</h5>
            <h3>You can get what you need</h3>
          </div>
          <!-- room type -->
          <div class="content grid2 mtop">
            <div class="box flex">
              <div class="left">
                <img src="" alt="">
              </div>
              <div class="right">
                <h4>Single Room</h4>
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
                <img src="image/o2.jpg" alt="">
              </div>
              <div class="right">
                <h4>Double Room</h4>
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
                <img src="image/o3.jpg" alt="">
              </div>
              <div class="right">
                <h4>Triple Room</h4>
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
                <img src="image/o3.jpg" alt="">
              </div>
              <div class="right">
                <h4>Quad Room</h4>
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
    

        <!-- ROOMS CARDS -->
      <section class="offer2 about wrapper timer top" id="shop">
        <div class="container">
          <div class="heading">
            <h5>EXCLUSIVE OFFERS </h5>
            <h3>You can get an exclusive offer </h3>
          </div>
          <div class="content grid  top">
            <div class="box">
                <div>
                    <img src="" alt="">
                </div>
              <!-- <h5>UP TO 30% OFF</h5> -->
              <h3>Room type</h3>
              <span>4.5 <label>(432 Reviews)</label> </span>
              <p>Description</p>
              <div class="flex">
                <!-- <i class="fal fa-alarm-clock"> Duration: 2Hours</i> -->
                <i class="far fa-dot-circle">price</i>
              </div>
              <button class="flex1">
                <a href="">Check Now!</a>
                <i class="fas fa-arrow-circle-right"></i>
              </button>
            </div>
        </div>
      </section> 
</body>
</html>