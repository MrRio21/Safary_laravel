<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

    <form action="{{route('driverprofileDash.update',auth()->user()->Driver->id)}}" class="form" id="form1" method="Post" enctype="multipart/form-data">
        @method('put')
        @csrf

<div class="head bg-white p-15 between-flex">
    <div class="search p-relative">
      <input class="p-10" type="search" placeholder="Type A Keyword" />
    </div>
 
  </div>
  <!-- End Head -->
  <h1 class="p-relative">Profile</h1>
  <div class="profile-page m-20">
    <!-- Start Overview -->
    <div class="overview bg-white rad-10 d-flex align-center">
      <div class="avatar-box txt-c p-20">
        <input type="file" accept="image/png, image/gif, image/jpeg" name ="image" >
        <h3 class="m-0">
         {{auth()->user()->name }} </h3>

 

        <div class="rating mt-10 mb-10">
          <i class="fa-solid fa-star c-orange fs-13"></i>
          <i class="fa-solid fa-star c-orange fs-13"></i>
          <i class="fa-solid fa-star c-orange fs-13"></i>
          <i class="fa-solid fa-star c-orange fs-13"></i>
          <i class="fa-solid fa-star c-orange fs-13"></i>
        </div>
        <p class="c-grey m-0 fs-13">
            <input type="phone" placeholder="Phone" name="phone" class="input" value="{{ auth()->user()->phone }}" required />
            </p>
      </div>
      <div class="info-box w-full txt-c-mobile">
        <!-- Start Information Row -->
        <div class="box p-20 d-flex align-center">
          <h4 class="c-grey fs-15 m-0 w-full">General Information</h4>
          <div class="fs-14">
            <span class="c-grey">Full Name</span>
            <span>		<input type="text" placeholder="Your Name" name="name" class="input" value=" {{auth()->user()->name }}" required /> </h3>
            </span>
          </div>

          <div class="fs-14">
            <span class="c-grey">Gender:</span>
            <span>Male<input class="specifyColor" type="radio" name="gender" id="male"
                 value="{{ auth()->user()->gender == 'male' ? <?php echo 'checked' ?> : ''}}" 
                ></span>  {{-- selected --}}
            <span>Female<input class="specifyColor" type="radio" name="gender" id="female" 
                value="{{ auth()->user()->gender == 'male' ? <?php echo 'checked' ?> : ''}}" 
                  ></span>
        </div>


          <input type="text" placeholder="License" name="license" class="input" required value="{{auth()->user()->Driver->license}}" />
          <input type="text" class="input" name="role" value="driver" hidden>
          <div class="fs-14">
       
          </div>
        </div>
        <!-- End Information Row -->
        <!-- Start Information Row -->
        <div class="box p-20 d-flex align-center">
          <h4 class="c-grey w-full fs-15 m-0">Personal Information</h4>
          <div class="fs-14">
            <span class="c-grey">Email:</span>
            <span>                   
                 <input type="email" placeholder="Email" name="email" class="input" value="{{ auth()->user()->email }}"   required />
            </span>
          </div>
          <div class="fs-14">
            <span class="c-grey">Phone:</span>
            <input type="phone" placeholder="Phone" name="phone" class="input" required value="{{ auth()->user()->phone }}"  />

            </span>
          </div>
      
          </div>

        </div>
        <!-- End Information Row -->
        <!-- Start Information Row -->
        <div class="box p-20 d-flex align-center">

            <div class="fs-14">
                <span class="c-grey">Email:</span>
                <span>{{ auth()->user()->driver->license }}</span>
              </div>


        </div>
        <!-- End Information Row -->
        <!-- Start Information Row -->

        <!-- End Information Row -->
     </div>


</form>
</body>
</html>

