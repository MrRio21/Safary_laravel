<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
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
        <h1 class="p-relative">Dashboard</h1>
        <div class="wrapper d-grid gap-20">
          <!-- Start Welcome Widget -->
          <div class="welcome bg-white rad-10 txt-c-mobile block-mobile">
            <div class="intro p-20 d-flex space-between bg-eee">
              <div>
                <h2 class="m-0">Welcome</h2>
                
              </div>
              <img class="hide-mobile" src="imgs/welcome.png" alt="" />
            </div>
            <img src="imgs/avatar.png" alt="" class="avatar" />
            <div class="body txt-c d-flex p-20 mt-20 mb-20 block-mobile">
              <div> RIO <span class="d-block c-grey fs-14 mt-10">Manager</span></div>
              <div>80 <span class="d-block c-grey fs-14 mt-10">Travel</span></div>
              <div>$8500 <span class="d-block c-grey fs-14 mt-10">Earned</span></div>
            </div>
            <a href="profile.html" class="visit d-block fs-14 bg-blue c-white w-fit btn-shape">Profile</a>
          </div>
          <!-- End Welcome Widget -->
          

          <!-- Start Ticket Widget -->
          <div class="tickets p-20 bg-white rad-10">
            <h2 class="mt-0 mb-10">Tickets Statistics</h2>
            <p class="mt-0 mb-20 c-grey fs-15">Everything About Support Tickets</p>
            <div class="d-flex txt-c gap-20 f-wrap">
              <div class="box p-20 rad-10 fs-13 c-grey">
                <i class="fa-regular fa-rectangle-list fa-2x mb-10 c-orange"></i>
                <span class="d-block c-black fw-bold fs-25 mb-5">2500</span>
                Total
              </div>
              <div class="box p-20 rad-10 fs-13 c-grey">
                <i class="fa-solid fa-spinner fa-2x mb-10 c-blue"></i>
                <span class="d-block c-black fw-bold fs-25 mb-5">500</span>
                Pending
              </div>
              <div class="box p-20 rad-10 fs-13 c-grey">
                <i class="fa-regular fa-circle-check fa-2x mb-10 c-green"></i>
                <span class="d-block c-black fw-bold fs-25 mb-5">1900</span>
                Closed
              </div>
              <div class="box p-20 rad-10 fs-13 c-grey">
                <i class="fa-regular fa-rectangle-xmark fa-2x mb-10 c-red"></i>
                <span class="d-block c-black fw-bold fs-25 mb-5">100</span>
                Deleted
              </div>
            </div>
          </div>
          <!-- End Ticket Widget -->
          <!-- Start Top Search Word Widget -->
          <div class="search-items p-20 bg-white rad-10">
            <h2 class="mt-0 mb-20">Count</h2>
            <div class="items-head d-flex space-between c-grey mb-10">
              <div>Keyword</div>
              <div>Search Count</div>
            </div>
            <div class="items d-flex space-between pt-15 pb-15">
              <span>customer</span>
              <span class="bg-eee fs-13 btn-shape">220</span>
            </div>
            <div class="items d-flex space-between pt-15 pb-15">
              <span>Hotel Owner</span>
              <span class="bg-eee btn-shape fs-13">180</span>
            </div>
            <div class="items d-flex space-between pt-15 pb-15">
              <span>Tourgide</span>
              <span class="bg-eee btn-shape fs-13">160</span>
            </div>
            <div class="items d-flex space-between pt-15 pb-15">
              <span>Trips</span>
              <span class="bg-eee btn-shape fs-13">145</span>
            </div>
            <div class="items d-flex space-between pt-15 pb-15">
              <span>vehicle</span>
              <span class="bg-eee btn-shape fs-13">110</span>
            </div>
            <div class="items d-flex space-between pt-15 pb-15">
              <span>Restaurants</span>
              <span class="bg-eee btn-shape fs-13">95</span>
            </div>
          </div>
          <!-- End Top Search Word Widget -->
 
          <!-- Start End Media Stats Widget -->
        </div>
        <!-- Start Projects Table -->
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
                    <span class="label btn-shape bg-orange c-white">Pending</span>
                  </td>
                </tr>
                <tr>
                  <td> Shop</td>
                  <td>12 Oct 2021</td>
                  <td>10 May 2022</td>
                  <td>$1500</td>
                  <td><span class="label btn-shape bg-blue c-white">In Progress</span></td>
                </tr>
                <tr>
                  <td>Bouba App</td>
                  <td>05 Sep 2021</td>
                  <td>10 May 2022</td>
                  <td>$800</td>
                  <td><span class="label btn-shape bg-green c-white">Completed</span></td>
                </tr>
                <tr>
                  <td>Mahmoud Website</td>
                  <td>22 May 2021</td>
                  <td>10 May 2022</td>
                  <td>$600</td>
                  <td><span class="label btn-shape bg-green c-white">Completed</span></td>
                </tr>
                <tr>
                  <td>Sayed Website</td>
                  <td>24 May 2021</td>
                  <td>10 May 2022</td>
                  <td>$300</td>
                  <td><span class="label btn-shape bg-red c-white">Rejected</span></td>
                </tr>
                <tr>
                  <td>Arena Application</td>
                  <td>01 Mar 2021</td>
                  <td>10 May 2022</td>
                  <td>$2600</td>
                  <td><span class="label btn-shape bg-green c-white">Completed</span></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!-- End Projects Table -->

</div>
</body>
</html>