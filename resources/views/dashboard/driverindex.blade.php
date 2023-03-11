@extends('layouts.app')
@extends('layouts.nav')


@section('content')
<body>
    <div class="page d-flex">
     <div class="sidebar bg-white p-20 p-relative">
        <h3 class="p-relative txt-c mt-0">Safary</h3>
        <ul>
          <li>
            <a class="active d-flex align-center fs-14 c-black rad-6 p-10 text-decoration-none" href="index.html">
              <i class="fa-regular fa-chart-bar fa-fw"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10 text-decoration-none" href="allTrip.html">
              <i class="fa-solid fa-gear fa-fw"></i>
              <span>All Trip</span>
            </a>
          </li>
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10 text-decoration-none" href="customers.html">
              <i class="fa-regular fa-user fa-fw"></i>
              <span>Customers</span>
            </a>
          </li>
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10 text-decoration-none" href="hotels.html">
              <i class="fa-solid fa-diagram-project fa-fw"></i>
              <span>Hotels</span>
            </a>
          </li>
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10 text-decoration-none" href="vehicle.html">
              <i class="fa-solid fa-graduation-cap fa-fw"></i>
              <span>vehicle</span>
            </a>
          </li>
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10 text-decoration-none" href="Tourgide.html">
              <i class="fa-regular fa-circle-user fa-fw"></i>
              <span>Tourgide</span>
            </a>
          </li>
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10 text-decoration-none" href="plans.html">
              <i class="fa-regular fa-credit-card fa-fw"></i>
              <span>Plans</span>
            </a>
          </li>
        </ul>
      </div>
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



        <h1 class="p-relative">Driver name</h1>
        <div class="projects p-20 bg-white rad-10 m-20">
          <h2 class="mt-0 mb-20">Driver name</h2>
          <h2 class="mt-0 mb-20">Driver license</h2>

        {{-- start form --}}
        <form method="POST">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Vehicle name</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Vehicle type</label>
              <select class="form-select" aria-label="Default select example">
                <option selected>Select your vehicle type</option>
                <option value="1">car</option>
                <option value="2">hantour</option>
                <option value="3">boat</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        {{-- End form --}}

          <div class="responsive-table">
            <table class="fs-15 w-full">
              <thead>
                <tr>
                  <td>Driver Name</td>
                  <td>Driver license</td>
                  <td>Status</td>
                </tr>
              </thead>
              @foreach($drivers as $driver)
              <tbody>
                <tr>
                  <td>{{$driver->name}}</td>
                  <td>{{$driver['license']}}</td>

                  {{-- <td>10 May 2022</td>
                  <td>10 May 2022</td>
                  <td>$5300</td> --}}
                  <td>
                    <a class="label btn-shape bg-green c-white">Accept</a>
                    <a class="label btn-shape bg-orange c-white">Pending</a>
                    <a class="label btn-shape bg-red c-white">Reject</a>
                  </td>
                </tr>

              </tbody>

              @endforeach

             
            </table>
          </div>
        </div>
            <!-- start pagination -->
             {{-- <div class="container d-flex justify-content-center">
                <nav aria-label="Page navigation example">
                  <ul class="pagination">
                    <li class="page-item"> <a href="#" class="page-link">Previous</a></li>
                    <li class="page-item"> <a href="#" class="page-link">1</a></li>
                    <li class="page-item"> <a href="#" class="page-link">2</a></li>
                    <li class="page-item"> <a href="#" class="page-link">3</a></li>
                    <li class="page-item"> <a href="#" class="page-link">4</a></li>
                    <li class="page-item"> <a href="#" class="page-link">5</a></li>
                    <li class="page-item"> <a href="#" class="page-link">Next</a></li>
                  </ul>
                </nav>
            </div> --}}
      </div>
    </div>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

@endsection

