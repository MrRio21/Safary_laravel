<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
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
      <h1 class="p-relative">Profile</h1>
      <div class="profile-page m-20">
        <!-- Start Overview -->
        <div class="overview bg-white rad-10 d-flex align-center">
          <div class="avatar-box txt-c p-20">
            <img class="rad-half mb-10" src="imgs/avatar.png" alt="" />
            <h3 class="m-0">{{auth()->user()->name }}</h3>


            <div class="rating mt-10 mb-10">
              <i class="fa-solid fa-star c-orange fs-13"></i>
              <i class="fa-solid fa-star c-orange fs-13"></i>
              <i class="fa-solid fa-star c-orange fs-13"></i>
              <i class="fa-solid fa-star c-orange fs-13"></i>
              <i class="fa-solid fa-star c-orange fs-13"></i>
            </div>
            <p class="c-grey m-0 fs-13">{{ auth()->user()->phone }}</p>
          </div>
          <div class="info-box w-full txt-c-mobile">
            <!-- Start Information Row -->
            <div class="box p-20 d-flex align-center">
              <h4 class="c-grey fs-15 m-0 w-full">General Information</h4>
              <div class="fs-14">
                <span class="c-grey">Full Name</span>
                <span>{{auth()->user()->name }}</span>
              </div>
              <div class="fs-14">
                <span class="c-grey">Gender:</span>
                <span>{{ auth()->user()->gender }}</span>
              </div>
          
              <div class="fs-14">
                <label>
                  <input class="toggle-checkbox" type="checkbox" checked />
                  <div class="toggle-switch"></div>
                </label>
              </div>
            </div>
            <!-- End Information Row -->
            <!-- Start Information Row -->
            <div class="box p-20 d-flex align-center">
              <h4 class="c-grey w-full fs-15 m-0">Personal Information</h4>
              <div class="fs-14">
                <span class="c-grey">Email:</span>
                <span>{{ auth()->user()->email }}</span>
              </div>
              <div class="fs-14">
                <span class="c-grey">Phone:</span>
                <span>{{ auth()->user()->phone }}</span>
              </div>
          
              </div>
              <div class="fs-14">
                <label>
                  <input class="toggle-checkbox" type="checkbox" />
                  <div class="toggle-switch"></div>
                </label>
              </div>
            </div>
            <!-- End Information Row -->
            <!-- Start Information Row -->
            <div class="box p-20 d-flex align-center">

                <div class="fs-14">
                    <span class="c-grey">Email:</span>
                    <span>{{ auth()->user()->driver->license }}</span>
                  </div>

              <div class="fs-14">
                <label>
                  <input class="toggle-checkbox" type="checkbox" checked />
                  <div class="toggle-switch"></div>
                </label>
              </div>
            </div>

            <div class="buttons"> 
              <button >  <a href="{{ route('driverprofileDash.edit', [auth()->user()->Driver->id]) }}" class="ms-auto fs-4 me-4 text-dark"> Edit </a>
             </button>
           
          </div>
            <!-- End Information Row -->
            <!-- Start Information Row -->

            <!-- End Information Row -->
         </div>

{{-- =============================================================================================== --}}






</body>
</html>