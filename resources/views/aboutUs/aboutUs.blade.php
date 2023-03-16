<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <title>About Us</title>
</head>
<body>
<style>
        
  p,a,h1,h2,h3,h4 {
    margin: 0;
    padding: 0;
  }
  
  .section-team {
    font-family: "Poppins", sans-serif;
    padding: 80px 0;
  }
  
  .section-team .header-section {
    margin-bottom: 50px;
  }
  
  .section-team .header-section .small-title {
      margin-bottom: 25px;
    font-size: 16px;
      font-weight: 500;
      color: #CC8C18;
  }
  
  .section-team .header-section .title {
      font-weight: 700;
      font-size: 45px;
      color:  #24416B;
  }
  
  .section-team .single-person {
    margin-top: 30px;
    padding: 30px;
    background-color: #f6f9ff;
    border-radius: 5px;
  }
  
  .section-team .single-person:hover {
    /* background: linear-gradient(to right,#CC8C18, #c78710); */
    /* background-image:linear-gradient(to left bottom,#1122aa,#fdd037) */
    background-image:linear-gradient(to left bottom,#0295a9,#fdd037)
  }
  
  .section-team .single-person .person-image {
      position: relative;
      margin-bottom: 50px;
      border-radius: 50%;
      border: 4px dashed transparent;
      transition: padding .3s;
  }
  
  .section-team .single-person:hover .person-image {
    padding: 12px;
      border: 4px dashed #fff;
  }
  
  .section-team .single-person .person-image img {
    width: 100%;
      border-radius: 50%;
  }
  
  .section-team .single-person .person-image .icon {
    position: absolute;
      bottom: 0;
      left: 50%;
      transform: translate(-50%,50%);
      display: inline-block;
      width: 60px;
      height: 60px;
      line-height: 60px;
      text-align: center;
      background: linear-gradient(to right,#CC8C18, #c78710);
      color: #fff;
      border-radius: 50%;
      font-size: 24px;
  }
  
  .section-team .single-person:hover .person-image .icon {
    background: none;
    background-color: #fff;
    color:#CC8C18;
  }
  
  .section-team .single-person .person-info .full-name {
    margin-bottom: 10px;
    font-size: 28px;
      font-weight: 700;
  }
  
  .section-team .single-person .person-info .speciality {
      text-transform: uppercase;
      font-size: 14px;
      color:#CC8C18;
  }
  
  .section-team .single-person:hover .full-name,
  .section-team .single-person:hover .speciality {
    color: #fff;
  }

</style>
@extends("temp.nav")
@section("body")
<section class="section-team">
	<div class="container">
		<!-- Start Header Section -->
		<div class="row justify-content-center text-center">
			<div class="col-md-8 col-lg-6">
				<div class="header-section">
					<h3 class="small-title">Our Experts</h3>
					<h2 class="title">Let's meet with our team members</h2>
				</div>
			</div>
		</div>
		<!-- / End Header Section -->
		<div class="row">
			<!-- Start Single Person Rio -->
			<div class="col-sm-6 col-lg-3 col-xl-3">
				<div class="single-person">
					<div class="person-image">
						<img src="{{ asset('./assets/imgs/frio.png') }}" alt="">
						<span class="icon">
							<i class="fa-brands fa-laravel"></i>
						</span>
					</div>
					<div class="person-info">
						<h3 class="full-name">Mohamed Hussein</h3>
						<span class="speciality">Laravel Developer</span>
					</div>
				</div>
			</div>
			<!-- / End Single Person Rio-->

			<!-- Start Single Person Shimaa-->
			<div class="col-sm-6 col-lg-3 col-xl-3">
				<div class="single-person">
					<div class="person-image">
						<img src="{{asset("./assets/imgs/shimaa.png")}}" alt="">
						<span class="icon">
							<i class="fab fa-angular"></i>
						</span>
					</div>
					<div class="person-info">
						<h3 class="full-name">Shimaa Ahmed</h3>
						<span class="speciality">Angular Developer</span>
					</div>
				</div>
			</div>
			<!-- / End Single Person Shimaa -->

			<!-- Start Single Person Anfal-->
			<div class="col-sm-6 col-lg-3 col-xl-3">
				<div class="single-person">
					<div class="person-image">
						{{-- <img src="../../../assets/img/about/anfal.png" alt=""> --}}
						<img src="{{asset("./assets/imgs/anfal.png")}}" alt="">
						<span class="icon">
							<i class="fa-brands fa-laravel"></i>
						</span>
					</div>
					<div class="person-info">
						<h3 class="full-name">Anfal Mohamed</h3>
						<span class="speciality">Laravel Developer</span>
					</div>
				</div>
			</div>
			<!-- / End Single Person Anfal -->

			<!-- Start Single Person Marina-->
			<div class="col-sm-6 col-lg-3 col-xl-3">
				<div class="single-person">
					<div class="person-image">
						<img src="{{asset("./assets/imgs/marina.png")}}" alt="">
						<span class="icon">
							<i class="fab fa-angular"></i>
						</span>
					</div>
					<div class="person-info">
						<h3 class="full-name">Marina Ayman</h3>
						<span class="speciality">Angular Developer</span>
					</div>
				</div>
			</div>
			<!-- / End Single Person Marina -->

			<!-- Start Single Person Obaida -->
			<div class="col-sm-6 col-lg-3 col-xl-3">
				<div class="single-person">
					<div class="person-image">
						<img src="{{asset("./assets/imgs/obiada.png")}}" alt="">
						<span class="icon">
							<i class="fa-brands fa-laravel"></i>
						</span>
					</div>
					<div class="person-info">
						<h3 class="full-name">Ahmed AbuObaida</h3>
						<span class="speciality">Laravel Developer</span>
					</div>
				</div>
			</div>
			<!-- / End Single Person Obaida -->
		</div>
	</div>
</section>
@endsection
</body>
</html>