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
<link rel="stylesheet" href="{{asset("assets/css/hotel.css")}}>
    <title>Hotels</title>
</head>
<body>
@extends("temp.nav")
@section("body")
    <!-- HERO SECTION -->
    <section class="home" id="home" style="background-image: url('https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1d/3d/8a/7a/movenpick-resort-aswan.jpg?w=1200&h=-1&s=1')">
        <div class="container">
          <h1>Our Hotels</h1>
        </div>
    </section>
      <!-- HOTELS CARD -->
       <section class="blog top" id="blog">
        <div class="container">
          <div class="heading">
            <h5>OUR Hotels</h5>
            <h3>Discover your best stay in Aswan</h3>
          </div>
          <div class="content grid mtop">
            @foreach ($allHotels as $Hotel)
            <div class="box">
              <!-- hotel img -->
              <div class="img">
                <img src="{{ asset('img/'.$Hotel->cover_img) }}" alt="">
                <span>HOTEL</span>
              </div>
              <!-- hotel details -->
              <div class="text">
                <h3>{{$Hotel->name}}</h3>
                <p>{{$Hotel->type}}</p>
                <p>{{$Hotel->address}}</p>
                <a href="{{route('hotel',[''$Hotel->id])}}">Show More<i class='far fa-long-arrow-alt-right'></i></a>
                <!-- <a href="{{route('hotels.hotel',$Hotel['id'])}}">Show More<i class='far fa-long-arrow-alt-right'></i> </a> -->
              </div>  
                <!-- "hotels.hotel",["Hotel"=> $hotelInfo],["hotelImg"=>$hotelImgs] -->
            </div>
            @endforeach
          </div>
        </div>
      </section> 
@endsection
    
</body>
</html>