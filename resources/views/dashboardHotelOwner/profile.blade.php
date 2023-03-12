<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
    <link rel="stylesheet" href="./assets/css/all.min.css" />
    <link rel="stylesheet" href="./assets/css/framework.css" />
    <link rel="stylesheet" href="./assets/css/master.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet" />
  </head>
  <body>
    {{-- {{dd(Auth::user())}} --}}
    <div class="page d-flex">
      <div class="sidebar bg-white p-20 p-relative">
        <h3 class="p-relative txt-c mt-0">{{Auth::user()->name}}</h3>
        <ul>
            <li>
                <a class="active d-flex align-center fs-14 c-black rad-6 p-10" href="profile.html">
                  <i class="fa-regular fa-user fa-fw"></i>
                  <span>My profile</span>
                </a>
              </li>
          {{-- <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="{{route('hotelOwnerDashboard')}}">
              <i class="fa-regular fa-chart-bar fa-fw"></i>
              <span>Dashboard</span>
            </a>
          </li> --}}
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="{{route('MyOwnedHotels')}}">
              <i class="fa-regular fa-chart-bar fa-fw"></i>
              <span>My Owned Hotels</span>
            </a>
          </li>
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="{{route('MyOwnedHotels')}}">
              <i class="fa-regular fa-chart-bar fa-fw"></i>
              <span>Booking Requests</span>
            </a>
          </li>
          <li class="mb-1">

            {{-- data-bs-target="#home-collapse" aria-expanded="true">rio</button> --}}
              {{-- <i class="fa-solid fa-gear fa-fw"></i> --}}
              <div class="collapse show" id="home-collapse">
                {{-- <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                  <li>
                    <a href="" class="link-dark rounded">rio1</a>
                  </li>
                  <li>
                    <a href="" class="link-dark rounded">rio2</a>
                  </li>
                  <li>
                    <a href="" class="link-dark rounded">rio3</a>
                  </li>
                </ul> --}}
              </div>

          </li>

          {{-- <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="projects.html">
              <i class="fa-solid fa-diagram-project fa-fw"></i>
              <span>Projects</span>
            </a>
          </li>
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="courses.html">
              <i class="fa-solid fa-graduation-cap fa-fw"></i>
              <span>Courses</span>
            </a>
          </li>
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="friends.html">
              <i class="fa-regular fa-circle-user fa-fw"></i>
              <span>Friends</span>
            </a>
          </li>
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="files.html">
              <i class="fa-regular fa-file fa-fw"></i>
              <span>Files</span>
            </a>
          </li>
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="plans.html">
              <i class="fa-regular fa-credit-card fa-fw"></i>
              <span>Plans</span>
            </a>
          </li> --}}
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
        <h1 class="p-relative">Profile</h1>
        <div class="profile-page m-20">
          <!-- Start Overview -->
          <div class="overview bg-white rad-10 d-flex align-center">
            <div class="avatar-box txt-c p-20">
              <img class="rad-half mb-10" src="./{{isset(Auth::user()->image)?Auth::user()->image:'no photo'}}" alt="" />
              <h3 class="m-0">{{Auth::user()->name}}</h3>
              {{-- <p class="c-grey mt-10">Level 20</p> --}}
              {{-- <div class="level rad-6 bg-eee p-relative">
                <span style="width: 70%"></span>
              </div>
              <div class="rating mt-10 mb-10">
                <i class="fa-solid fa-star c-orange fs-13"></i>
                <i class="fa-solid fa-star c-orange fs-13"></i>
                <i class="fa-solid fa-star c-orange fs-13"></i>
                <i class="fa-solid fa-star c-orange fs-13"></i>
                <i class="fa-solid fa-star c-orange fs-13"></i>
              </div>
              <p class="c-grey m-0 fs-13">550 Rating</p> --}}
            </div>
            <div class="info-box w-full txt-c-mobile">
              <!-- Start Information Row -->
              <div class="box p-20 d-flex align-center">
                <h4 class="c-grey fs-15 m-0 w-full">General Information</h4>
                <div class="fs-14">

                  <span class="c-grey">Full Name</span>
                  <span>{{Auth::user()->name}}</span>
                </div>
                <div class="fs-14">
                  <span class="c-grey">Gender:</span>
                  <span>{{Auth::user()->gender}}</span>
                </div>
                <div class="fs-14">
                    <span class="c-grey">Email:</span>
                    <span>{{Auth::user()->email}}</span>
                </div>
                {{-- <a href="{{route('userEdit')}}"><h4 class="c-blue fs-15 m-0 w-full">Edit</h4></a> --}}
                <div class="fs-14">
                    <span class="c-grey">Phone:</span>
                    <span>{{Auth::user()->phone}}</span>
                </div>
                <div class="fs-14">
                    <span class="c-grey">Password:</span>
                    <span>********</span>
                </div>
                {{-- <div class="fs-14">
                  <span class="c-grey">Country:</span>
                  <span>Egypt</span>
                </div> --}}
                {{-- <div class="fs-14">
                  <label>
                    <input class="toggle-checkbox" type="checkbox" checked />
                    <div class="toggle-switch"></div>
                  </label>
                </div> --}}
              </div>
              <!-- End Information Row -->
              <!-- Start Information Row -->
                {{-- <div class="fs-14">
                  <span class="c-grey">Date Of Birth:</span>
                  <span>25/10/1982</span>
                </div> --}}
                {{-- <div class="fs-14">
                  <label>
                    <input class="toggle-checkbox" type="checkbox" />
                    <div class="toggle-switch"></div>
                  </label>
                </div> --}}

              <!-- End Information Row -->
              <!-- Start Information Row -->
              {{-- <div class="box p-20 d-flex align-center"> --}}
                {{-- <h4 class="c-grey w-full fs-15 m-0">Job Information</h4> --}}
                {{-- <div class="fs-14">
                  <span class="c-grey">Title:</span>
                  <span>Full Stack Developer</span>
                </div>
                <div class="fs-14">
                  <span class="c-grey">Programming Language:</span>
                  <span>Python</span>
                </div>
                <div class="fs-14">
                  <span class="c-grey">Years Of Experience:</span>
                  <span>15+</span>
                </div>
                <div class="fs-14"> --}}
                  {{-- <label>
                    <input class="toggle-checkbox" type="checkbox" checked />
                    <div class="toggle-switch"></div>
                  </label>
                </div>
              </div> --}}
              <!-- End Information Row -->
              <!-- Start Information Row -->
              {{-- <div class="box p-20 d-flex align-center">
                <h4 class="c-grey w-full fs-15 m-0">Billing Information</h4>
                <div class="fs-14">
                  <span class="c-grey">Payment Method:</span>
                  <span>Paypal</span>
                </div>
                <div class="fs-14">
                  <span class="c-grey">Email:</span>
                  <span>email@website.com</span>
                </div>
                <div class="fs-14">
                  <span class="c-grey">Subscription:</span>
                  <span>Monthly</span>
                </div>
                <div class="fs-14">
                  <label>
                    <input class="toggle-checkbox" type="checkbox" />
                    <div class="toggle-switch"></div>
                  </label>
                </div>
              </div> --}}
              <!-- End Information Row -->
            </div>
          </div>
          <!-- End Overview -->
          <!-- Start Other Data -->
          {{-- <div class="other-data d-flex gap-20">
            <div class="skills-card p-20 bg-white rad-10 mt-20">
              <h2 class="mt-0 mb-10">My Skills</h2>
              <p class="mt-0 mb-20 c-grey fs-15">Complete Skills List</p>
              <ul class="m-0 txt-c-mobile">
                <li><span>HTML</span><span>Pugjs</span><span>HAML</span></li>
                <li><span>CSS</span><span>SASS</span><span>Stylus</span></li>
                <li><span>JavaScript</span><span>TypeScript</span></li>
                <li><span>Vuejs</span><span>Reactjs</span></li>
                <li><span>Jest</span><span>Jasmine</span></li>
                <li><span>PHP</span><span>Laravel</span></li>
                <li><span>Python</span><span>Django</span></li>
              </ul>
            </div>
            <div class="activities p-20 bg-white rad-10 mt-20">
              <h2 class="mt-0 mb-10">Latest Activities</h2>
              <p class="mt-0 mb-20 c-grey fs-15">Latest Activities Done By The User</p>
              <div class="activity d-flex align-center txt-c-mobile">
                <img src="imgs/activity-01.png" alt="" />
                <div class="info">
                  <span class="d-block mb-10">Store</span>
                  <span class="c-grey">Bought The Mastering Python Course</span>
                </div>
                <div class="date">
                  <span class="d-block mb-10">18:10</span>
                  <span class="c-grey">Yesterday</span>
                </div>
              </div>
              <div class="activity d-flex align-center txt-c-mobile">
                <img src="imgs/activity-02.png" alt="" />
                <div class="info">
                  <span class="d-block mb-10">Academy</span>
                  <span class="c-grey">Got The PHP Certificate</span>
                </div>
                <div class="date">
                  <span class="d-block mb-10">16:05</span>
                  <span class="c-grey">Yesterday</span>
                </div>
              </div>
              <div class="activity d-flex align-center txt-c-mobile">
                <img src="imgs/activity-03.png" alt="" />
                <div class="info">
                  <span class="d-block mb-10">Badges</span>
                  <span class="c-grey">Unlocked The 10 Skills Badge</span>
                </div>
                <div class="date">
                  <span class="d-block mb-10">18:05</span>
                  <span class="c-grey">Yesterday</span>
                </div>
              </div>
              <div class="activity d-flex align-center txt-c-mobile">
                <img src="imgs/activity-01.png" alt="" />
                <div class="info">
                  <span class="d-block mb-10">Store</span>
                  <span class="c-grey">Bought The Typescript Course</span>
                </div>
                <div class="date">
                  <span class="d-block mb-10">12:05</span>
                  <span class="c-grey">Yesterday</span>
                </div>
              </div>
            </div>
          </div> --}}
          <!-- End Other Data -->
        </div>
      </div>
    </div>
  </body>
</html>
