@extends('layouts/nav')
@section('bodyContent')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('./assets/CSS/Cards/tourguideCards.css')}}" >
    <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js')}}" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
    

<section class="blog top mt-3" id="blog">
    <div class="container">
      <div class="heading">
        <h5>OUR TOURGUIDE</h5>
        <h3>Discover your best trip in Aswan</h3>
      </div>


<div class="container"  >
      <div class="row g-5  "style="margin-left:10rem " >
        <div class="col-lg-4  col-sm-6 col-12 rounded g-5"  *ngFor="let Tourguide of TourguideList;" style="margin-bottom: 5rem;">
       
             <!-- ===================Card================= -->
  
             <div class="card border-0 me-lg-4 mb-lg-0 mb-4">
              <div class="backgroundEffect"></div>
              <div class="pic"> <img class=""
                      src="https://th.bing.com/th/id/OIP.JL3Eo8YQLfNMXHsiGdYxEQAAAA?pid=ImgDet&w=185&h=200&c=7&dpr=1.3"
                      alt="">
                  <div class="date"> <span class="day">{{Tourguide.price_per_day}} </span> <span class="month">day</span> <span
                          class="year">Eygpt</span> </div>
              </div>
              <div class="content">
                  <h6 class="h-2 mt-4" >{{Tourguide.syndicate_No}}<br> lang :arbic ,english,french <br> And Legal Working Streams Occur Throughout </h6>
                  <p class="text-muted mt-3">{{Tourguide.price_per_day}}</p>
                  <div class="d-flex align-items-center justify-content-between mt-3 pb-3">
          
                      <div class="btn " >book</div>
                      <div class="d-flex align-items-center justify-content-center foot">
                          <p class="admin">{{Tourguide.syndicate_No}}</p>
                          <p class="ps-3 icon text-muted"><span class="fas fa-comment-alt pe-1"></span>available:1</p>
                      </div>
                  </div>
              </div>
          </div>
          
                  <!-- ===================Card================= -->

      </div>
  
</div>


      <div class="form-btn d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="submit-btn m-5"  routerLink="/customize/tourgide">Confirm</button>
      </div>
    </div>
  </section>







    </body>
</html>



