<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rooms</title>
    <link rel="stylesheet" href="{{asset("./assets/css/all.min.css")}}" />
    <link rel="stylesheet" href="{{asset("./assets/css/framework.css")}}" />
    <link rel="stylesheet" href="{{asset("./assets/css/master.css")}}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet" />
  </head>
  <body>
    {{-- {{$rooms}} --}}

    <div class="page d-flex">
<div class="sidebar bg-white p-20 p-relative">
        <h3 class="p-relative txt-c mt-0">Safary</h3>
        <ul>
          <li>
            <a class="active d-flex align-center fs-14 c-black  rad-6 p-10 text-decoration-none" href="index.html">
              <i class="fa-regular fa-chart-bar fa-fw"></i>
              <span>Dashboard</span>
            </a>
          </li>
          {{-- <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10 text-decoration-none" href="add_room.html">
              <i class="fa-solid fa-gear fa-fw"></i>
              <span>Add Room</span>
            </a>
          </li> --}}
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10 text-decoration-none" href="hotels.html">
              <i class="fa-solid fa-graduation-cap fa-fw"></i>
              <span>Hotels</span>
            </a>
          </li>
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10 text-decoration-none" href="rooms.html">
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
        <h1 class="p-relative">Rooms</h1>
        <a href="{{route('editRoom',['roomID'=>$room->id])}}" class="title bg-blue c-white btn-shape">Edit </a>

        @foreach($rooms as $room)


        <div class="courses-page d-grid m-20 gap-20">
          <div class="course bg-white rad-6 p-relative">
            <img class="cover w-full" src="https://imgs.search.brave.com/4pvgpXiuGnb_H1ZZTe666J9zcYKttnnDxpiTiOBjxaY/rs:fit:632:225:1/g:ce/aHR0cHM6Ly90c2Uz/Lm1tLmJpbmcubmV0/L3RoP2lkPU9JUC5T/VkRfRWROTWVENER2/MTc4c2hMNmhRSGFG/aiZwaWQ9QXBp" alt="" />
            <img class="cover w-full" src="{{$room->cover_img}}" alt="" />
            <!-- <img class="instructor" src="imgs/team-01.png" alt="" /> -->
            <div class="p-20">
              <h4 class="m-0">Type :{{$room->type}}</h4>
              <h4 class="m-0">price per one night :{{$room->price}}EGP</h4>
              <h4 class="m-0">number of available rooms :{{$room->n_of_available_rooms}}</h4>
              {{-- <p class="description c-grey mt-15 fs-14">
                Master The Art Of Web Designing And Mocking, Prototyping And Creating Web Design Architecture
              </p> --}}

            </div>
            <a href="{{route('previewRoom',['roomID'=>$room->id])}}" class="title bg-green c-white btn-shape">Preview </a>
            <a href="{{route('deleteRoom',['roomID'=>$room->id])}}" class="title bg-red c-white btn-shape"  onclick="return confirm('Are you sure you want to delete?')" >delete </a>
            <a href="{{route('editRoom',['roomID'=>$room->id])}}" class="title bg-blue c-white btn-shape">Edit </a>

          </div>

        </div>
        @endforeach
      </div>
    </div>
  </body>
</html>
