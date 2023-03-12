@extends('dashboardAdmin.dashboardViewAdmin')

@section('dashbourdAdmon')

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="assets/Admindash/css/all.min.css" />
    <link rel="stylesheet" href="assets/Admindash/css/framework.css" />
    <link rel="stylesheet" href="assets/Admindash/css/master.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <div class="page d-flex">
       
        <form method="POST" action="{{route( 'TripDash.update',['allTrips'=>$allTrips->id])}}"  enctype="multipart/form-data">
            @csrf
            @method("PUT")
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
        <h1 class="p-relative">Create Your Trip</h1>
        <div class="wrapper d-grid gap-20">
          <!-- Start Welcome Widget -->
          <!-- Start Quick Draft Widget -->
          <div class="quick-draft p-20 bg-white rad-10">
            <h2 class="mt-0 mb-10">Add Trip </h2>
            <form>
                <textarea class="d-block mb-20 w-full p-10 b-none bg-eee rad-6" id="desc" placeholder="Description"  name='description' value="{{$allTrips->description}}"></textarea>
                <input class="d-block mb-8 w-full p-10 b-none bg-eee rad-6"  type="text" placeholder="price" name='price' value="{{$allTrips->price}}"/>
              <input class="d-block mb-20 w-full p-10 b-none bg-eee rad-6" type="number" placeholder="No Of people In Your Trip" name='n_of_people' value="{{$allTrips->n_of_people}}"/>
              <input class="d-block mb-20 w-full p-10 b-none bg-eee rad-6" type="number" placeholder="No Of Days In Your Trip" name='n_of_days' value="{{$allTrips->n_of_days}}"/>
              <input class="d-block mb-20 w-full p-10 b-none bg-eee rad-6" type="number" placeholder="No Of places In Your Trip" name='n_of_places' value="{{$allTrips->n_of_places}}"/>
             <label for="cover_img">Enter Your Cover Image </label>
              <input class=" mb-20 p-10  bg-eee rad-6" type="file" id='cover_img' placeholder="Address" name='cover_img' value="Storage/img/{{$allTrips->cover_img}}"/>

              <label for="image">Enter Your Trip Images </label>
              <input class=" mb-20 p-10  bg-eee rad-6" type="file"  id='image' placeholder="Address" multiple 
              accept="image/png, image/jpeg"  name="image" value="Storage/img/{{$allTrips->TripImg->image}}"/>
           

           
             
              <input class="save d-block fs-14 bg-blue c-white b-none w-fit btn-shape" type="submit" value="Save" />
            </form>
          </div>
        </div>
      </div>

      <form>
    </div>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>

@endsection