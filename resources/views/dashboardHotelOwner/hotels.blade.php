<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hotel</title>
    <link rel="stylesheet" href="./assets/css/all.min.css" />
    <link rel="stylesheet" href="./assets/css/framework.css" />
    <link rel="stylesheet" href="./assets/css/master.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet" />
  </head>
  <body>
    {{-- {{dd($allHotels)}} --}}
    @include('sweetalert::alert');
    <div class="page d-flex">
<div class="sidebar bg-white p-20 p-relative">
        <h3 class="p-relative txt-c mt-0">Safary</h3>
        <ul>
          <li>
            <a class=" d-flex align-center fs-14 c-black  rad-6 p-10 text-decoration-none" href="{{route('hotelOwnerDashboard')}}">
              <i class="fa-regular fa-chart-bar fa-fw"></i>
              <span>My Dashboard</span>
            </a>
          </li>
          {{-- <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10 text-decoration-none" href="add_room.html">
              <i class="fa-solid fa-gear fa-fw"></i>
              <span>Add Room</span>
            </a>
          </li> --}}
          <li>
            <a class=" d-flex align-center fs-14 c-black rad-6 p-10 text-decoration-none" href="{{route('MyOwnedHotels')}}">
              <i class="fa-solid fa-graduation-cap fa-fw"></i>
              <span>Hotels</span>
            </a>
          </li>
          <li>
            <a class="active d-flex align-center fs-14 c-black  rad-6 p-10 text-decoration-none" href="{{route('addHotelView')}}">
              <i class="fa-regular fa-chart-bar fa-fw"></i>
              <span>Add Hotel</span>
            </a>
          </li>
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10 text-decoration-none" href="{{route('addRoomForm')}}">
              <i class="fa-regular fa-circle-user fa-fw"></i>
              <span>Add Rooms</span>
            </a>
          </li>
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10 text-decoration-none" href="{{route('addRoomForm')}}">
              <i class="fa-regular fa-circle-user fa-fw"></i>
              <span>Requests</span>
            </a>
          </li>
        </ul>
      </div>
      <div class="content w-full">
        <!-- Start Head -->
        <div class="head bg-white p-15 between-flex">
          <div class="search p-relative">
            <input class="p-10" type="search" placeholder="Type A Keyword" />
          </div>
          <div class="icons d-flex align-center">
            <span class="notification p-relative">
              <i class="fa-regular fa-bell fa-lg"></i>
            </span>
            <img src="imgs/avatar.png" alt="" />
          </div>
        </div>
        <!-- End Head -->
        <?php $hotelOwner_id = isset(Auth::user()->HotelOwner->id)?Auth::user()->HotelOwner->id:1?>
        <h1 class="p-relative">Hotels</h1>
        <a  href="{{route('addHotelView')}}" class="title bg-blue c-white btn-shape">+ </a>
        @foreach($allHotels as $hotel)
        @if($hotel->hotel_owner_id == $hotelOwner_id )
        <div class="courses-page d-grid m-20 gap-20">
            {{-- {{$hotel}} --}}
          <div class="course bg-white rad-6 p-relative">
            <img class="cover w-full" src="https://imgs.search.brave.com/4pvgpXiuGnb_H1ZZTe666J9zcYKttnnDxpiTiOBjxaY/rs:fit:632:225:1/g:ce/aHR0cHM6Ly90c2Uz/Lm1tLmJpbmcubmV0/L3RoP2lkPU9JUC5T/VkRfRWROTWVENER2/MTc4c2hMNmhRSGFG/aiZwaWQ9QXBp" alt="" />
            <img class="cover w-full" src="{{$hotel->cover_img}}" alt="" />
            <!-- <img class="instructor" src="imgs/team-01.png" alt="" /> -->
            <div class="p-20">
              <h4 class="m-0">{{$hotel->name}}</h4>
              <p class="description c-grey mt-15 fs-14">
                {{$hotel->address}}
              </p>
{{$hotel->id}}
              <a href="{{route('previewHotel',['hotelID'=>$hotel->id])}}" class="title bg-green c-white btn-shape">Preview </a>
              <a href="{{route('deleteHotel',['hotelID'=>$hotel->id])}}" class="title bg-red c-white btn-shape"  onclick="return confirm('Are you sure you want to delete?')" >delete </a>
              <a href="{{route('editHotel',['hotelID'=>$hotel->id])}}" class="title bg-blue c-white btn-shape">Edit </a>

            </div>
            {{-- <div class="info p-15 p-relative between-flex">
              <span class="title bg-blue c-white btn-shape">Hotel Info</span>
              <span class="c-grey">
                <i class="fa-regular fa-user"></i>
                950
              </span>
              <span class="c-grey">
                <i class="fa-solid fa-dollar-sign"></i>
                165
              </span>
            </div> --}}
          </div>

        </div>
        @endif
        @endforeach
      </div>
    </div>
  </body>
</html>
