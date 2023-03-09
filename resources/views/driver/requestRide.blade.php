<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="./assets/css/all.min.css" />
    <link rel="stylesheet" href="./assets/css/framework.css" />
    <link rel="stylesheet" href="./assets/css/master.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet" />
  </head>
  <body>
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
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10 text-decoration-none" href="add_room.html">
              <i class="fa-solid fa-gear fa-fw"></i>
              <span>Add Room</span>
            </a>
          </li>
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
        <h1 class="p-relative">Dashboard</h1>
        <div class="wrapper d-grid gap-20">

          <div class="quick-draft p-20 bg-white rad-10">
            <h2 class="mt-0 mb-10">Request Ride </h2>
            <form method="post" action="{{route('storeRide')}}">
                @csrf
            <input class="d-block mb-20 w-full p-10 b-none bg-eee rad-6" name="position" type="text" placeholder="position" />
            <input class="d-block mb-20 w-full p-10 b-none bg-eee rad-6" name="destination" type="text" placeholder="Address" />
            <input class="form-select bg-eee mb-20" type="datetime-local" name="date">
            <select class="form-select bg-eee mb-20 " name="type" aria-label="Default select example">
                <option selected>Type </option>
                <option value="cars">Cars</option>
                <option value="boat">Boats</option>
                <option value="cabriolet">cabriolet</option>
            </select>

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
