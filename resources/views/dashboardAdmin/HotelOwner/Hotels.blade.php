@extends('dashboardAdmin.dashboardViewAdmin')

@section('dashbourdAdmon')
      
<title>Dashboard Admin</title>
<link rel="stylesheet" href="assets/Admindash/css/all.min.css" />
<link rel="stylesheet" href="assets/Admindash/css/framework.css" />
<link rel="stylesheet" href="assets/Admindash/css/master.css" />
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


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
        <h1 class="p-relative">Customer</h1>
        <div class="projects p-20 bg-white rad-10 m-20">
          <h2 class="mt-0 mb-20">Customers</h2>
          <div class="responsive-table">
            <table class="fs-15 w-full">
              <thead>
                <tr>
                  <td>Name</td>
                  <td>Start Date</td>
                  <td>Finish Date</td>
                  <td>Budget</td>
                  <td>Status</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Ministry Wikipedia</td>
                  <td>10 May 2022</td>
                  <td>10 May 2022</td>
                  <td>$5300</td>
                  <td>
                    <a class="label btn-shape bg-green c-white">Accept</a>
                    <a class="label btn-shape bg-orange c-white">Pending</a>
                    <a class="label btn-shape bg-red c-white">Reject</a>
                  </td>
                </tr>
                <tr>
                  <td> Shop</td>
                  <td>12 Oct 2021</td>
                  <td>10 May 2022</td>
                  <td>$1500</td>
                  <td>
                    <a class="label btn-shape bg-green c-white">Accept</a>
                    <a class="label btn-shape bg-orange c-white">Pending</a>
                    <a class="label btn-shape bg-red c-white">Reject</a>
                  </td>              
                  </tr>
                <tr>
                  <td>Bouba App</td>
                  <td>05 Sep 2021</td>
                  <td>10 May 2022</td>
                  <td>$800</td>
                  <td>
                    <a class="label btn-shape bg-green c-white">Accept</a>
                    <a class="label btn-shape bg-orange c-white">Pending</a>
                    <a class="label btn-shape bg-red c-white">Reject</a>
                  </td>                
                </tr>
                <tr>
                  <td>Mahmoud Website</td>
                  <td>22 May 2021</td>
                  <td>10 May 2022</td>
                  <td>$600</td>
                  <td>
                    <a class="label btn-shape bg-green c-white">Accept</a>
                    <a class="label btn-shape bg-orange c-white">Pending</a>
                    <a class="label btn-shape bg-red c-white">Reject</a>
                  </td>             
                  </tr>
                <tr>
                  <td>Sayed Website</td>
                  <td>24 May 2021</td>
                  <td>10 May 2022</td>
                  <td>$300</td>
                  <td>
                    <a class="label btn-shape bg-green c-white">Accept</a>
                    <a class="label btn-shape bg-orange c-white">Pending</a>
                    <a class="label btn-shape bg-red c-white">Reject</a>
                  </td>                
                </tr>
                <tr>
                  <td>Arena Application</td>
                  <td>01 Mar 2021</td>
                  <td>10 May 2022</td>
                  <td>$2600</td>
                  <td>
                    <a class="label btn-shape bg-green c-white">Accept</a>
                    <a class="label btn-shape bg-orange c-white">Pending</a>
                    <a class="label btn-shape bg-red c-white">Reject</a>
                  </td>          
                  </tr>
              </tbody>
             
            </table>
          </div>
        </div>
            <!-- start pagination -->
             <div class="container d-flex justify-content-center">
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
              </div>
      </div>



      @endsection