
@extends('MUT.multiStepsCustom')

@section('custom')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Document</title>
</head>
<body>
  {{dd($data)}}
<section class="container blog top mt-3" id="blog">
  <div class="container">
    <div class="heading">
      <h5>OUR HOTELS</h5>
      <h3>Discover your best stay</h3>
    </div>

    <div class="container">
      <div class="row g-5" style="margin-top: 1rem;">
        <div class="col-lg-4  col-sm-6 col-12 rounded " *ngFor="let hotel of HotelList ;" >


          <div class="content  mtop">
            <div class="box">
              <div class="img">
                <img src="https://www.ahstatic.com/photos/1666_ho_00_p_1024x768.jpg" alt="">
                <span>Hotel </span>
              </div>
              <div class="text">
                <!-- <div class="flex">
            <i class="far fa-user"> <label>Admin</label> </i>
            <i class="far fa-comments"> <label>Comment</label> </i>
          </div> -->
                <h3>Celebrating Decade Years Of Hotel In 2020</h3>
                <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                  est laborum.</p>
                <a href="#">Read More <i class='fas fa-long-arrow-alt-right'></i></a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="form-btn d-grid gap-2 d-md-flex justify-content-md-end">
      <button class="submit-btn m-5"  routerLink="/customize/place">Confirm</button>
    </div>
  </div>
</section>

</body>
</html>



@endsection