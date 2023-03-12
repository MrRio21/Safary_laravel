@extends('dashboardAdmin.dashboardViewAdmin')

@section('dashbourdAdmon')
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    {{-- {{dd($allTrips)}} --}}
   
<h1 class="p-relative">Customer</h1>
        <div class="projects p-20 bg-white rad-10 m-20">
          <h2 class="mt-0 mb-20">Customers</h2>
          <div class="responsive-table">
            <table class="fs-15 w-full">
              <thead>
                <tr>
                  <td>#</td>
                  <td>cover_img</td>
                  <td>description</td>
                  <td>price</td>
                  <td>n_of_people</td>
                  <td>n_of_places</td>
                  <td>n_of_days</td>
                  <td>Action</td>
                </tr>
              </thead>
              <tbody>
              @foreach ($allTrips as $Trips)
           <tr>
           <td>{{$Trips->id}}</td>
             <td>{{$Trips->trip_id->users['name']}}</td>
             <td><img src="{{ asset('img/'.$Trips->cover_img) }}" alt="" width="75px">
           </td>
           <td>{{$Trips->description}}</td>
             <td>{{$Trips->price}}</td>
             <td>{{$Trips->n_of_people}}</td>
             <td>{{$Trips->n_of_places}}</td>
             <td>{{ $Trips->n_of_days}}</td>
         
          
          
             <td>

              <button type="submit" class="label btn-shape bg-green c-white">
              <a href="{{route('TripDash.edit',['trip'=>$Trips->id])}}" class="btn btn-outline-success">Edit</a>
              </button>
              <form action="{{route('TrippDash.destroy'),['id'=>$Trips->id]}}"  accept-charset="UTF-8" style="display:inline">
              @crsf
              @method('delete')
               <!-- method('delete',$Trips['hotel_owner_id']); -->
                 <button type="submit" class="btn btn-outline-danger" title="Delete Student" onclick="return confirm('Confirm delete?')">
                 <i class="fa fa-trash-o" aria-hidden="true"></i>
                  Delete
                 </button>
              </form> 



       
             </td>
           </tr>

           @endforeach
              </tbody>
            </table>
          </div>
        </div>


</body>
</html>

@endsection