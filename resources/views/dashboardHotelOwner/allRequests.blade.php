<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hotel</title>
    <link rel="stylesheet" href="./assets/css/all.min.css" />
    <link rel="stylesheet" href="./assets/css/framework.css" />
    <link rel="stylesheet" href="./assets/css/master.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet" />
  </head>

  <body>
    @include('sweetalert::alert')
    <div class="sidebar bg-white p-20 p-relative">
        <h3 class="p-relative txt-c mt-0">Safary</h3>
        <ul>
            <li>
              <a class=" d-flex align-center fs-14 c-black  rad-6 p-10 text-decoration-none" href="{{route('hotelOwnerDashboard')}}">
                <i class="fa-regular fa-chart-bar fa-fw"></i>
                <span>My Dashboard</span>
              </a>
            </li>
            {{-- <li>
              <a class="d-flex align-center fs-14 c-black rad-6 p-10 text-decoration-none" href="add_room.html">
                <i class="fa-solid fa-gear fa-fw"></i>
                <span>Add Room</span>
              </a>
            </li> --}}
            <li>
              <a class=" d-flex align-center fs-14 c-black rad-6 p-10 text-decoration-none" href="{{route('MyOwnedHotels')}}">
                <i class="fa-solid fa-graduation-cap fa-fw"></i>
                <span>Hotels</span>
              </a>
            </li>
            <li>
              <a class="active d-flex align-center fs-14 c-black  rad-6 p-10 text-decoration-none" href="{{route('addHotelView')}}">
                <i class="fa-regular fa-chart-bar fa-fw"></i>
                <span>Add Hotel</span>
              </a>
            </li>
            <li>
              <a class="d-flex align-center fs-14 c-black rad-6 p-10 text-decoration-none" href="{{route('addRoomForm')}}">
                <i class="fa-regular fa-circle-user fa-fw"></i>
                <span>Add Rooms</span>
              </a>
            </li>
            <li>
              <a class="d-flex align-center fs-14 c-black rad-6 p-10 text-decoration-none" href="{{route('addRoomForm')}}">
                <i class="fa-regular fa-circle-user fa-fw"></i>
                <span>Requests</span>
              </a>
            </li>
          </ul>
      </div>

<h2 class="mt-0 mb-20">Requests</h2>
          <div class="responsive-table">
            <table class="fs-15 w-full">
              <thead>
                <tr>
                  <td>#</td>
                  <td>check In</td>
                  <td>check out</td>
                  <td>user Name</td>
                  <td>room price</td>
                  <td>hotel Name</td>
                  {{-- <td>license</td> --}}
                  <td>Action</td>
                </tr>
              </thead>
              <tbody>

              @foreach ($orderedRooms as $request)
              @foreach ($hotels as $hotel)
                <tr>
         {{-- @foreach(Auth::user()->HotelOwner[0]->Hotel as $hotel) --}}
         {{-- {{dd($request->Hotel)}} --}}
                    {{-- <h1>{{$request->Order->id}}</h1> --}}
{{--
@if(!empty($hotel->BookedRoom))
                                      <td></td>
                                      <td>{{$hotel->BookedRoom}}</td>
                                      <td>{{$hotel->BookedRoom->room_status}}</td>

                                      {{-- <td>{{$hotel->BookedRoom->room_status}}</td> --}}
                                      <td>{{$request->status}}</td>
                                      {{-- <td>{{$hotel->Name}}</td> --}}



{{-- @endif --}}
                          <td>
                  <form  action="{{route('changeStatus',['bookedRoom'=>])}}" method="POST" accept-charset="UTF-8" style="display:inline">
                  @crsf

                      <button type="submit" name="reject" class="btn btn-outline-danger" title="Delete Student" onclick="return confirm('Confirm delete?')">
                    Reject
                    </button>
                        <button type="submit" name="accept" class="btn btn-outline-success" title="Delete Student" onclick="return confirm('Confirm delete?')">
Accept
                      </button>
                  </form>
                  </td>
                </tr>

              </tbody>
             @endforeach
             @endforeach
            </table>
          </div>
  </body>
</html>
