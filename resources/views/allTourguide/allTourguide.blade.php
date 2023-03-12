 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset("assets/css/Cards/tourguideCards.css")}}">
    <title>Tourguide</title>
 </head>
 <body>
 @extends('temp.nav')
@section('body')
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
            <img src="/assets/asset/img/about-banner.png" width="556" height="700" loading="lazy" alt="" class="w-100">
        </figure>
    
    </div>
</section>
<!-- -------------------------------------------------------------------------------------------------------------- -->
<div style="text-align: center;" class="mb-4">
<button >TOURGUIDE</button>
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

<div class="container">
    <div class="row g-5" style="margin-top: 1rem;" >
        <div class="col-lg-4  col-sm-6 col-12 rounded">
            <div class="card border-0 me-lg-4 mb-lg-0 mb-4 ">
                <div class="backgroundEffect"></div>
            <div class="pic"> <img class=""
                src="https://th.bing.com/th/id/OIP.JL3Eo8YQLfNMXHsiGdYxEQAAAA?pid=ImgDet&w=185&h=200&c=7&dpr=1.3" alt="">
        <div class="date">
            <span class="day">price/day</span>
            <span class="month">day</span>
            <span class="year">Eygpt</span>
        </div>
    </div>
    <div class="content">
        <h6 class="h-2 mt-4" >syndicate_No<br> lang :arbic ,english,french <br> And Legal Working Streams Occur Throughout </h6>
        <p class="text-muted mt-3">price/day</p>
        <div class="d-flex align-items-center justify-content-between mt-3 pb-3">
            <div class="btn">book</div>
            <div class="d-flex align-items-center justify-content-center foot">
                <p class="admin">syndicate_No</p>
                <p class="ps-3 icon text-muted">
                    <span class="fas fa-comment-alt pe-1"></span>available:1</p>
            </div>
        </div>
    </div>
    </div> 
        </div>
    </div>
</div>
</section>
@endsection
 </body>
 </html>