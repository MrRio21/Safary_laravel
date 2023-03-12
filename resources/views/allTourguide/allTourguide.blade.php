 
@extends('layouts/nav')
@section('bodyContent')

 
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
<div class="demo" class="mt-5">
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

<div class="container">
    <div class="row g-5" style="margin-top: 1rem;" >
      <div class="col-lg-4  col-sm-6 col-12 rounded"  *ngFor="let Tourguide of TourguideList;" >
     
 
    </div>

    </div>
  </div>







