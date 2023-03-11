<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Hotel Dashboard</title>
    <link rel="stylesheet" href="{{asset("./assets/css/all.min.css")}}"/>
    <link rel="stylesheet" href="{{asset("./assets/css/framework.css")}}"/>
    <link rel="stylesheet" href="{{asset("./assets/css/master.css")}}"/>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet" />
  </head>
  <body>
    <div class="page d-flex">
      <div class="sidebar bg-white p-20 p-relative">
        <h3 class="p-relative txt-c mt-0">Safary</h3>
        <ul>
          <li>
            <a class="active d-flex align-center fs-14 c-black  rad-6 p-10 text-decoration-none" href="{{route('addHotel')}}">
              <i class="fa-regular fa-chart-bar fa-fw"></i>
              <span>Add Hotel</span>
            </a>
          </li>
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10 text-decoration-none" href="add_room.html">
              <i class="fa-solid fa-gear fa-fw"></i>
              <span>Add Room</span>
            </a>
          </li>
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10 text-decoration-none" href="{{route('MyOwnedHotels')}}">
              <i class="fa-solid fa-graduation-cap fa-fw"></i>
              <span>My Hotels</span>
            </a>
          </li>
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10 text-decoration-none" href="{{route('AllRooms')}}">
              <i class="fa-regular fa-circle-user fa-fw"></i>
              <span>Rooms</span>
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
        <h1 class="p-relative">Hotel Dashboard</h1>
        <div class="wrapper d-grid gap-20">
          <!-- Start Welcome Widget -->
          <!-- Start Quick Draft Widget -->
          <div class="quick-draft p-20 bg-white rad-10">
            <h2 class="mt-0 mb-10">update Hotel info </h2>
            <form action="{{route('updateHotel',['hotelID'=>$hotel->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
              <input class="d-block mb-20 w-full p-10 b-none bg-eee rad-6" name="name" type="text" value="{{$hotel->name}}" />
              <input class="d-block mb-20 w-full p-10 b-none bg-eee rad-6" name="address" type="text" value="{{$hotel->address}}" />
              <select class="form-select bg-eee mb-20 " aria-label="Default select example" name="type">
                <option selected value="{{$hotel->type}}">{{$hotel->type}} </option>

                <option value="hotel">Hotel</option>
                <option value="motel">Motel</option>
                <option value="cruise">Cruise</option>
                <option value="nubian_house">Nubian House</option>
              </select>
              {{-- <select class="form-select bg-eee mb-20 " aria-label="Default select example">
                <option selected>Services</option>
                <option value="1">Free Wifi</option>
                <option value="2">Open buffet</option>
                <option value="2">breakfast</option>
              </select> --}}

              Your Cover Image:
              <input class=" mb-20 p-10  bg-eee rad-6" type="file" name="cover_img"  placeholder="Your Cover Image" />
            <br>
              Your hotel Images:

              {{-- @foreach($images as $img)
              <img src="{{$img->image}}" name="image[]" value="{{$img->image}}" alt="">
              @endforeach --}}

              <input class=" mb-20 p-10  bg-eee rad-6" type="file"  placeholder="Your Cover Image" name="image[]" multiple />
              {{-- <textarea class="d-block mb-20 w-full p-10 b-none bg-eee rad-6" placeholder="Description"></textarea> --}}
              <input class="save d-block fs-14 bg-blue c-white b-none w-fit btn-shape" type="submit" value="Save" />
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>
