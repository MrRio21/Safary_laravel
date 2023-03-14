
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/Cards/tourguideCards.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Tourguide</title>
 </head>
 <body>
 @extends("temp.nav")
@section("body")
    
  <section class="section about" style="position:relative; background-image: url(../../assets/img/yellow-swoosh-background.jpg); background-size: cover; ">
    <!-- <img src="../../assets/img/footer-dec.png" style="width: max-content; position:absolute ; z-index: -1"> -->
    <div class="container">
        <div class="about-content">
            <h1 class="h2 section-title" style="color:#906426">Explore all tour of the world with us.</h1>
            <p class="about-text">
                Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,
                or
                randomised words
                which don't look even slightly believable.
            </p>
            <ul class="about-list">
                <li class="about-item">
                    <div class="about-item-icon">
                        <i name="compass"></i>
                    </div>
                    <div class="about-item-content">
                        <h3 class="h3 about-item-title">Tour guide</h3>
                        <p class="about-item-text">
                            Lorem Ipsum available, but the majority have suffered alteration in some.
                        </p>
                    </div>
                </li>
                <li class="about-item">
                    <div class="about-item-icon">
                        <i name="briefcase"></i>
                    </div>
                    <div class="about-item-content">
                        <h3 class="h3 about-item-title">Friendly price</h3>
                        <p class="about-item-text">
                            Lorem Ipsum available, but the majority have suffered alteration in some.
                        </p>
                    </div>
                </li>
                <li class="about-item">
                    <div class="about-item-icon">
                        <i name="umbrella"></i>
                    </div>
                    <div class="about-item-content">
                        <h3 class="h3 about-item-title">Reliable tour</h3>
                        <p class="about-item-text">
                            Lorem Ipsum available, but the majority have suffered alteration in some.
                        </p>
                    </div>
                </li>
            </ul>
            <a href="#" style="background:#f6ac45 ;" class="btn">Booking Now</a>
        </div>
        <figure class="about-banner">
            <img src="{{asset('./assets/asset/img/about-banner.png')}}" width="556" height="700" loading="lazy" alt="" class="w-100">
        </figure>
    
    </div>
</section>
<!-- -------------------------------------------------------------------------------------------------------------- -->
<div style="text-align: center;" class="mb-4">
<button class="button">TOURGUIDE</button>
</div>
<!-- bagination ------------------------------------------------------------------------------------------>
<div class="demo">
    <nav class="pagination-outer" aria-label="Page navigation">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">Spanish</a></li>
            <li class="page-item"><a class="page-link" href="#">English</a></li>
            <li class="page-item active"><a class="page-link" href="#">Arabic</a></li>
            <li class="page-item"><a class="page-link" href="#">Frencey</a></li>
            <li class="page-item"><a class="page-link" href="#">German</a></li>
            <li class="page-item">
            </li>
        </ul>
    </nav>
</div>
<!-- ------------------------------------------------------cards---------------------------------------------------------------- -->
<section>
    @foreach ($allTourGides as $Tourguide)
<div class="container tourguideCard">
<div class="row g-5" style="margin-top: 1rem;" >
        <div class="col-lg-4  col-sm-6 col-12 rounded">
            <div class="card border-0 me-lg-4 mb-lg-0 mb-4 ">
                <div class="backgroundEffect"></div>
         <div class="pic">
                 <img class="" src="{{ asset('img/'.$Tourguide->img) }}" alt="">
            <div class="date">
            <span class="day">Book now!</span>
            </div>
        </div>
      
    <div class="content">
        <h2>{{$Tourguide -> User -> name}}</h2>
        <p class="text-muted mt-3">price {{$Tourguide->price_per_day}} /day</p>
         <!-- Languages : 
                 @foreach($Tourguide->languages as $item)
                 <h6 class="h-2 mt-4"><br>{{$item['language']}} </h6>
                 @endforeach -->
                 <p class="description">Language : </p>
                            @foreach($Tourguide->languages as $item)
                                <span class="description">{{$item['language']}},</span>
                            @endforeach

        <h6 class="h-2 mt-4"><br> Bio :  {{$Tourguide->bio}}</h6>
        <div class="d-flex align-items-center justify-content-between mt-3 pb-3">
            <div class="d-flex align-items-center justify-content-center foot">
                <p class="admin">syndicate_No : {{$Tourguide->syndicate_No}} </p>
            </div>
        </div>
        <div class="btn" data-bs-toggle="modal" data-bs-target="#myModal">Book now!</div>
        
    </div>
    </div> 
</div>
</div>

@endforeach


      <!-- The Modal -->
      <div class="modal" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Book NOW!</h4>
              <!-- <button type="button" class="btn-close" data-bs-dismiss="modal"></button> -->
            </div>
            <!-- Modal body -->
            <div class="modal-body" id="modal">
                <div id="booking" class="section">
                    <div class="section-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10">
                                    <!-- col-md-push-5 -->
                                    <div class="booking-cta mt-0">
                                        <h3>Make your reservation</h3>
                                    </div>
                                </div>
                                <div class="col-md-10 ">
                                    <!-- col-md-pull-7 -->
                                    <div class="booking-form">
                                        <form> 
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <span class="form-label">Check In</span>
                                                        <input class="form-control" type="date" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <span class="form-label">Check out</span>
                                                        <input class="form-control" type="date" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-btn">
                                                <button class="submit-btn bookbtnn"onclick()><a href="">Send a request</a></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      </section>
      @endsection

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
 </body>
 </html>
