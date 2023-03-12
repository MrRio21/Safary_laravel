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
    
<h1 class="p-relative">All Places</h1>
        <div class="projects p-20 bg-white rad-10 m-20">
          <h2 class="mt-0 mb-20">Places</h2>
          <div class="responsive-table">
            <table class="fs-15 w-full">
              <thead>
                <tr>
                  <td>Name</td>
                  <td>cover_img</td>
                  <td>description</td>
                  <td>price</td>
                  <td>type</td>
                </tr>
              </thead>
              <tbody>
         
              @foreach ($places as $place)
                <tr>
       
                  <td>{{$place->name}}</td>
                  <td><img src="{{ asset('img/'.'$place->cover_img') }}" alt="" width="75px">
                  </td>
                  <td>{{$place->description}}</td>
                  <td>{{$place->price}}</td>
                  <td>{{$place->type}}</td>
                  <td>

                    <button type="submit" class="label btn-shape bg-green c-white">
                      <a href="{{route('PlaceDash.edit',['id'=>$place->id])}}" class="btn btn-outline-success">Edit</a>
                      </button>
                   
                  {{-- <form method="POST" action="{{route('PlaceeDash.destroy'),['placeID'=>$place->id] }}" accept-charset="UTF-8" style="display:inline">
                  @crsf
                    @method('delete');
                      <button type="submit" class="btn btn-outline-danger" title="Delete Student" onclick="return confirm('Confirm delete?')">
                      <i class="fa fa-trash-o" aria-hidden="true"></i>
                       Delete
                      </button>
                  </form> --}}
            
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
    