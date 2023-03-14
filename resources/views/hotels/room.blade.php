
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
    <link rel="stylesheet" href="{{asset('assets/css/hotel.css')}}">
    <title>Hotels</title>
</head>
<body>
@extends("temp.nav")
@section("body")
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
            <h3>{{$roomInfo ["type"]}}</h3>
          </div>
          <div class="box">
            <i class="fas fa-dollar-sign"></i>
            <p>Price</p>
            <h3>{{$roomInfo ["price"]}} L.E</h3>
          </div>

          <div class="box">
            <!-- <i class="fal fa-alarm-clock"></i> -->
            <i class="fa-regular fa-credit-card"></i>
            <p>Free Cost</p>
            <h3><a href="{{route('bookingRoom')}}" style="">Book Now</a></h3>
          </div>
        </div>
        <!-- room img -->
        <div class="right">
          <img src="{{$roomInfo->cover_img}}" alt="" style="width: 800px;">
        </div>
      </div>
    </div>
  </section>
  @endsection

</body>
</html>