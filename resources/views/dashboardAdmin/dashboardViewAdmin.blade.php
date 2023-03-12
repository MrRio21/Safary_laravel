
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
      <div class="sidebar bg-white p-20 p-relative">
        <h3 class="p-relative txt-c mt-0">SAFARY</h3>
        <ul>
          <li>
            <a class="active d-flex align-center fs-14 c-black rad-6 p-10 text-decoration-none" href="index.html">
              <i class="fa-regular fa-chart-bar fa-fw"></i>
              <span>Dashboard Admin</span>
            </a>
          </li>
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10 text-decoration-none" href="allTrip.html">
              <i class="fa-solid fa-gear fa-fw"></i>
              <span> <a href="{{route('hotelOwnerDash.index')}}" > All Hotels </a> </span>
            </a>
          </li>
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10 text-decoration-none" href="customers.html">
              <i class="fa-regular fa-user fa-fw"></i>
              <span><a href="{{route('PlaceeDash.index')}}" > placessTable </a></span>
            </a>
          </li>
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10 text-decoration-none" href="hotels.html">
              <i class="fa-solid fa-diagram-project fa-fw"></i>
              <span><a href="{{route('TrippDash.index')}}" > trippTable </a></span>
            </a>
          </li>
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10 text-decoration-none" href="vehicle.html">
              <i class="fa-solid fa-graduation-cap fa-fw"></i>
              <span><a href="{{route('VehiclleDash.index')}}" > vechileeTable </a></span>
            </a>
          </li>
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10 text-decoration-none" href="tourguide.html">
              <i class="fa-regular fa-circle-user fa-fw"></i>
              <span><a href="{{route('OrderrDetails.index')}}" > OrderrTable </a></span>
            </a>
          </li>
          {{-- <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10 text-decoration-none" href="plans.html">
              <i class="fa-regular fa-credit-card fa-fw"></i>
              <span><a href="{{route('tourguideeeform')}}" > tourguideeeform </a></span>
            </a>
          </li> --}}

          {{-- <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10 text-decoration-none" href="plans.html">
              <i class="fa-regular fa-credit-card fa-fw"></i>
              <span><a href="{{route('userrform')}}" > userrform </a></span>
            </a>
          </li> --}}

          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10 text-decoration-none" href="plans.html">
              <i class="fa-regular fa-credit-card fa-fw"></i>
              <span><a href="{{route('UserDash.index')}}" > userss </a></span>
            </a>
          </li>

          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10 text-decoration-none" href="plans.html">
              <i class="fa-regular fa-credit-card fa-fw"></i>
              <span><a href="{{route('adminn')}}" > adminn</a></span>
            </a>
          </li>


        </ul>
      </div>

      @yield('dashbourdAdmon')

  </div>

</body>
</html>
