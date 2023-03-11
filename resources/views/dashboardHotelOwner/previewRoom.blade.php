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


    <a href="{{route('MyOwnedHotels')}}">    <h1 class="p-relative">My Hotels</h1></a>
    <div class="courses-page d-grid m-20 gap-20">
        {{-- {{$hotel}} --}}
      <div class="course bg-white rad-6 p-relative">
        <img class="cover w-full" src="https://imgs.search.brave.com/4pvgpXiuGnb_H1ZZTe666J9zcYKttnnDxpiTiOBjxaY/rs:fit:632:225:1/g:ce/aHR0cHM6Ly90c2Uz/Lm1tLmJpbmcubmV0/L3RoP2lkPU9JUC5T/VkRfRWROTWVENER2/MTc4c2hMNmhRSGFG/aiZwaWQ9QXBp" alt="" />
        <img class="cover w-full" src="{{$room->cover_img}}" alt="" />
        <!-- <img class="instructor" src="imgs/team-01.png" alt="" /> -->
        <div class="p-20">
            <h4 class="m-0">Type :{{$room->type}}</h4>
            <h4 class="m-0">price per one night :{{$room->price}}EGP</h4>
            <h4 class="m-0">number of available rooms :{{$room->n_of_available_rooms}}</h4>


          <a href="{{route('previewRoom',['roomID'=>$room->id])}}" class="title bg-green c-white btn-shape">Preview </a>
          <a href="{{route('deleteRoom',['roomID'=>$room->id])}}" class="title bg-red c-white btn-shape">delete </a>
          <a href="{{route('editRoom',['roomID'=>$room->id])}}" class="title bg-blue c-white btn-shape">Edit </a>

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


  </body>
</html>
