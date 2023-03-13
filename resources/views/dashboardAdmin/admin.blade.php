@extends('dashboardAdmin.dashboardViewAdmin')

@section('dashbourdAdmon')
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  {{-- {{dd($chosentrips)}} --}}
    
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
          <!-- Start Welcome Widget -->
          <div class="welcome bg-white rad-10 txt-c-mobile block-mobile">
            <div class="intro p-20 d-flex space-between bg-eee">
              <div>
                <h2 class="m-0">Welcome</h2>
                
              </div>
              <img class="hide-mobile" src="imgs/welcome.png" alt="" />
            </div>
            <img src="imgs/avatar.png" alt="" class="avatar" />
            <div class="body txt-c d-flex p-20 mt-20 mb-20 block-mobile">
              <div> {{Auth::user()->name}} <span class="d-block c-grey fs-14 mt-10">Manager</span></div>
              <div>80 <span class="d-block c-grey fs-14 mt-10">Travel</span></div>
              <div>$8500 <span class="d-block c-grey fs-14 mt-10">Earned</span></div>
            </div>
            <a href="profile.html" class="visit d-block fs-14 bg-blue c-white w-fit btn-shape">Profile</a>
          </div>
          <!-- End Welcome Widget -->
          /* View */

          <!-- Start Ticket Widget -->
          <div class="tickets p-20 bg-white rad-10">
            <h2 class="mt-0 mb-10">Trips</h2>
            {{-- <p class="mt-0 mb-20 c-grey fs-15">Everything About Support Tickets</p> --}}
            {{-- <div class="d-flex txt-c gap-20 f-wrap">
              <div class="box p-20 rad-10 fs-13 c-grey">
                <i class="fa-regular fa-rectangle-list fa-2x mb-10 c-orange"></i>
                <span class="d-block c-black fw-bold fs-25 mb-5">{{ $chosenTrips->count()}}</span>
                Total
              </div>
              <div class="box p-20 rad-10 fs-13 c-grey">
                <i class="fa-solid fa-spinner fa-2x mb-10 c-blue"></i>
                <span class="d-block c-black fw-bold fs-25 mb-5">{{$pendingTrips->count()}}</span>
                Pending
              </div>
              <div class="box p-20 rad-10 fs-13 c-grey">
                <i class="fa-regular fa-circle-check fa-2x mb-10 c-green"></i>
                <span class="d-block c-black fw-bold fs-25 mb-5">{{$pendingTrips->count()}}</span>
                Approved
              </div>
              <div class="box p-20 rad-10 fs-13 c-grey">
                <i class="fa-regular fa-rectangle-xmark fa-2x mb-10 c-red"></i>
                <span class="d-block c-black fw-bold fs-25 mb-5">{{$pendingTrips->count()}}</span>
                Rejected
              </div>
            </div> --}}
          </div>
          <!-- End Ticket Widget -->
          <!-- Start Top Search Word Widget -->
          <div class="search-items p-20 bg-white rad-10">
            <h2 class="mt-0 mb-20">Count</h2>
            <div class="items-head d-flex space-between c-grey mb-10">
              <div>Keyword</div>
              <div>Search Count</div>
            </div>
            {{-- <div class="items d-flex space-between pt-15 pb-15">
              <span>customer</span>
              <span class="bg-eee fs-13 btn-shape">{{$users->count()}}</span>
            </div>
            <div class="items d-flex space-between pt-15 pb-15">
              <span>Hotel Owner</span>
              <span class="bg-eee btn-shape fs-13">{{$customers->count()}}</span>
            </div>
            <div class="items d-flex space-between pt-15 pb-15">
              <span>Tourguide</span>
              <span class="bg-eee btn-shape fs-13">{{ $hotelOwners->count()}}</span>
            </div>
            <div class="items d-flex space-between pt-15 pb-15">
              <span>Trips</span>
              <span class="bg-eee btn-shape fs-13">{{ $tourGuides->count()}}</span>
            </div> --}}
            <div class="items d-flex space-between pt-15 pb-15">
              <span>Vehicles</span>
              <span class="bg-eee btn-shape fs-13">{{ $vehicles->count()}}</span>
            </div>

          </div>
          <!-- End Top Search Word Widget -->
 
          <!-- Start End Media Stats Widget -->
        </div>
        <!-- Start Trips Table -->
        <div class="projects p-20 bg-white rad-10 m-20">
          <h2 class="mt-0 mb-20">Trips</h2>
          <div class="responsive-table">
            <table class="fs-15 w-full">
              <thead>
                <tr>
                  <td>Tourist Name</td>
                  <td>Trip</td>
                  <td>Status</td>
                </tr>
              </thead>
              <tbody>
                @foreach ($chosenTrips as $chosenTrip)
                <tr>
                  <td>{{$chosenTrip->user_id}}</td>
                  <td>{{$chosenTrip->trip_id}}</td>

                  <td>
                    <span class="label btn-shape bg-orange c-white">{{$chosenTrip->status}}</span>
                  </td>
                </tr> 
                @endforeach
                
              </tbody>
            </table>
          </div>
        </div>
        <!-- End Trips Table -->




          <!-- Start Places Table -->
          <div class="projects p-20 bg-white rad-10 m-20">
            <h2 class="mt-0 mb-20">Places</h2>
            <div class="responsive-table">
              <table class="fs-15 w-full">
                <thead>
                  <tr>
                    <td>Tourist Name</td>
                    <td>Place</td>
                    <td>Status</td>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($orderedPlaces as $orderedPlace)
                  <tr>
                    <td>{{$orderedPlace->user_id}}</td>
                    <td>{{$orderedPlace->trip_id}}</td>
  
                    <td>
                      <span class="label btn-shape bg-orange c-white">{{$orderedPlace->status}}</span>
                    </td>
                  </tr> 
                  @endforeach
                  
                </tbody>
              </table>
            </div>
          </div>
          <!-- End Places Table -->

</div>
</body>
</html>

@endsection