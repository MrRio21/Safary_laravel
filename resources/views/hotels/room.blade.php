
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <link rel="stylesheet" href="{{asset("assets/css/hotel.css")}}">
    <title>Hotels</title>
</head>
<body>
    <!-- HERO SECTION -->
    <section class="home" id="home">
        <div class="container">
          <h1>Hotel_Name</h1>
        </div>
    </section>

      <!-- Room CARD -->
  <section class="room wrapper2 top" id="room">
    <div class="container">
      <div class="heading">
        <h5>OUR ROOMS</h5>
        <h2>Fascinating rooms & suites </h2>
      </div>
      <div class="content flex mtop">
        <div class="left grid2">
          <div class="box">
            <!-- <i class="fas fa-desktop"></i> -->
            <i class="fa-solid fa-bed"></i>
            <!-- <i class="fa-solid fa-bed-front"></i> -->
            <p>Room Type</p>
            <h3>{{'type'}}</h3>
          </div>
          <div class="box">
            <i class="fas fa-dollar-sign"></i>
            <p>Price</p>
            <h3>500 L.E</h3>
          </div>

          <div class="box">
            <!-- <i class="fal fa-alarm-clock"></i> -->
            <i class="fa-regular fa-credit-card"></i>
            <p>Free Cost</p>
            <h3><a href="#" style="">Book Now</a></h3>
          </div>

          

          <!-- <div class="box">
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
          </div> -->
        </div>
        <!-- room img -->
        <div class="right">
          <img src="data:image/jpeg;base64,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" alt="">
        </div>
      </div>
    </div>
  </section>
</body>
</html>