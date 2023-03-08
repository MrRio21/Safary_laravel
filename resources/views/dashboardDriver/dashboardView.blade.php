<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/framework.css" />
    <link rel="stylesheet" href="css/master.css" />
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
            <a class="d-flex align-center fs-14 c-black rad-6 p-10 text-decoration-none" href="tourguide.html">
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
          <!-- Start Latest Uploads Widget -->
          <!-- <div class="latest-uploads p-20 bg-white rad-10">
            <h2 class="mt-0 mb-20">Latest Uploads</h2>
            <ul class="m-0">
              <li class="between-flex pb-10 mb-10">
                <div class="d-flex align-center">
                  <img class="mr-10" src="imgs/pdf.svg" alt="" />
                  <div>
                    <span class="d-block">my-file.pdf</span>
                    <span class="fs-15 c-grey">Elzero</span>
                  </div>
                </div>
                <div class="bg-eee btn-shape fs-13">2.9mb</div>
              </li>
              <li class="between-flex pb-10 mb-10">
                <div class="d-flex align-center">
                  <img class="mr-10" src="imgs/avi.svg" alt="" />
                  <div>
                    <span class="d-block">My-Video-File.avi</span>
                    <span class="fs-15 c-grey">Admin</span>
                  </div>
                </div>
                <div class="bg-eee btn-shape fs-13">4.9mb</div>
              </li>
              <li class="between-flex pb-10 mb-10">
                <div class="d-flex align-center">
                  <img class="mr-10" src="imgs/psd.svg" alt="" />
                  <div>
                    <span class="d-block">My-Psd-File.pdf</span>
                    <span class="fs-15 c-grey">Osama</span>
                  </div>
                </div>
                <div class="bg-eee btn-shape fs-13">4.5mb</div>
              </li>
              <li class="between-flex pb-10 mb-10">
                <div class="d-flex align-center">
                  <img class="mr-10" src="imgs/zip.svg" alt="" />
                  <div>
                    <span class="d-block">My-Zip-File.pdf</span>
                    <span class="fs-15 c-grey">User</span>
                  </div>
                </div>
                <div class="bg-eee btn-shape fs-13">8.9mb</div>
              </li>
              <li class="between-flex pb-10 mb-10">
                <div class="d-flex align-center">
                  <img class="mr-10" src="imgs/dll.svg" alt="" />
                  <div>
                    <span class="d-block">My-DLL-File.pdf</span>
                    <span class="fs-15 c-grey">Admin</span>
                  </div>
                </div>
                <div class="bg-eee btn-shape fs-13">4.9mb</div>
              </li>
              <li class="between-flex">
                <div class="d-flex align-center">
                  <img class="mr-10" src="imgs/eps.svg" alt="" />
                  <div>
                    <span class="d-block">My-Eps-File.pdf</span>
                    <span class="fs-15 c-grey">Designer</span>
                  </div>
                </div>
                <div class="bg-eee btn-shape fs-13">8.9mb</div>
              </li>
            </ul>
          </div> -->
          <!-- End Latest Uploads Widget -->
          <!-- Start Last Project Progress Widget -->
          <!-- <div class="last-project p-20 bg-white rad-10 p-relative">
            <h2 class="mt-0 mb-20">Last Project Progress</h2>
            <ul class="m-0 p-relative">
              <li class="mt-25 d-flex align-center done">Got The Project</li>
              <li class="mt-25 d-flex align-center done">Started The Project</li>
              <li class="mt-25 d-flex align-center done">The Project About To Finish</li>
              <li class="mt-25 d-flex align-center current">Test The Project</li>
              <li class="mt-25 d-flex align-center">Finish The Project & Get Money</li>
            </ul>
            <img class="launch-icon hide-mobile" src="imgs/project.png" alt="" />
          </div> -->
          <!-- End Last Project Progress Widget -->
          <!-- Start Reminders Widget -->
          <!-- <div class="reminders p-20 bg-white rad-10 p-relative">
            <h2 class="mt-0 mb-25">Reminders</h2>
            <ul class="m-0">
              <li class="d-flex align-center mt-15">
                <span class="key bg-blue mr-15 d-block rad-half"></span>
                <div class="pl-15 blue">
                  <p class="fs-14 fw-bold mt-0 mb-5">Check My Tasks List</p>
                  <span class="fs-13 c-grey">28/09/2022 - 12:00am</span>
                </div>
              </li>
              <li class="d-flex align-center mt-15">
                <span class="key bg-green mr-15 d-block rad-half"></span>
                <div class="pl-15 green">
                  <p class="fs-14 fw-bold mt-0 mb-5">Check My Projects</p>
                  <span class="fs-13 c-grey">26/10/2022 - 12:00am</span>
                </div>
              </li>
              <li class="d-flex align-center mt-15">
                <span class="key bg-orange mr-15 d-block rad-half"></span>
                <div class="pl-15 orange">
                  <p class="fs-14 fw-bold mt-0 mb-5">Call All My Clients</p>
                  <span class="fs-13 c-grey">05/11/2022 - 12:00am</span>
                </div>
              </li>
              <li class="d-flex align-center mt-15">
                <span class="key bg-red mr-15 d-block rad-half"></span>
                <div class="pl-15 red">
                  <p class="fs-14 fw-bold mt-0 mb-5">Finish The Development Workshop</p>
                  <span class="fs-13 c-grey">20/12/2022 - 12:00am</span>
                </div>
              </li>
            </ul>
          </div> -->
          <!-- End Reminders Widget -->
          <!-- Start Latest Post Widget -->
          <!-- <div class="latest-post p-20 bg-white rad-10 p-relative">
            <h2 class="mt-0 mb-25">Latest Post</h2>
            <div class="top d-flex align-center">
              <img class="avatar mr-15" src="imgs/avatar.png" alt="" />
              <div class="info">
                <span class="d-block mb-5 fw-bold">Osama Elzero</span>
                <span class="c-grey">About 3 Hours Ago</span>
              </div>
            </div>
            <div class="post-content txt-c-mobile pt-20 pb-20 mt-20 mb-20">
              You can fool all of the people some of the time, and some of the people all of the time, but you can't
              fool all of the people all of the time.
            </div>
            <div class="post-stats between-flex c-grey">
              <div>
                <i class="fa-regular fa-heart"></i>
                <span>1.8K</span>
              </div>
              <div>
                <i class="fa-regular fa-comments"></i>
                <span>500</span>
              </div>
            </div>
          </div> -->
          <!-- End Latest Post Widget -->
          <!-- Start Social Media Stats Widget -->
          <!-- <div class="social-media p-20 bg-white rad-10 p-relative">
            <h2 class="mt-0 mb-25">Social Media Stats</h2>
            <div class="box twitter p-15 p-relative mb-10 between-flex">
              <i class="fa-brands fa-twitter fa-2x c-white h-full center-flex"></i>
              <span>90K Followers</span>
              <a class="fs-13 c-white btn-shape" href="#">Follow</a>
            </div>
            <div class="box facebook p-15 p-relative mb-10 between-flex">
              <i class="fa-brands fa-facebook-f fa-2x c-white h-full center-flex"></i>
              <span>2M Like</span>
              <a class="fs-13 c-white btn-shape" href="#">Like</a>
            </div>
            <div class="box youtube p-15 p-relative mb-10 between-flex">
              <i class="fa-brands fa-youtube fa-2x c-white h-full center-flex"></i>
              <span>1M Subs</span>
              <a class="fs-13 c-white btn-shape" href="#">Subscribe</a>
            </div>
            <div class="box linkedin p-15 p-relative mb-10 between-flex">
              <i class="fa-brands fa-linkedin fa-2x c-white h-full center-flex"></i>
              <span>70K Followers</span>
              <a class="fs-13 c-white btn-shape" href="#">Follow</a>
            </div>
          </div> -->
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
        <!-- <div class="container">
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
              </div> -->
</div>
  <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
      </div>
    </div>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>
