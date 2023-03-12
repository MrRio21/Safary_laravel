{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div>
    <form action="{{route('bookPlaces',['order'=>$order])}}" method="POST">
    @csrf
        @foreach ($availablePlaces as $place )


        <a href="{{route('showPlace',['place'=>$place->id])}}">{{$place->name}}</a>
        <input type="checkbox" name="place_id[]"  value="{{$place->id}}">

        @endforeach
        <input type="text" name="restOfBudget" value="{{ $restOfBudget }}" hidden>

        <button type="submit">Next</button>
    </form>
    </div>
</body>
</html> --}}





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('./assets/CSS/Cards/placesCards.css')}}" >
    <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js')}}" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
    

 
<section class="blog top mt-3" id="blog">
    <div class="container">
      <div class="heading">
        <h5>OUR PLACES</h5>
        <h3>Discover your best trip in Aswan</h3>
      </div>
<!-- CARD ==================================================================-->
<div class="container">
  <div class="row g-5" style="margin-top: 1rem;" >
    <form action="{{route('bookPlaces',['order'=>$order])}}" method="POST">
      @csrf
          @foreach ($availablePlaces as $place )
     <div class="col-lg-3  col-sm-6 col-12 rounded">

      <div class="card" style="box-shadow:8px 5px 40px inset rgba(137, 97, 29, 0.546) ;width:85%;background-color: aliceblue; ">
        <div class="box">
            <svg class="curve1" x="0px" y="0px" viewBox="0 0 400 200">
                <path d="M398.938,143.806c-24.004,26.063-155.373,104.33-224.724,7.328 C69.626,4.846,0.5,71.583,0.5,71.583V1.5h398.629L398.938,143.806z"></path>
            </svg>
            <img src="../../assets/img/Aswan-Nilme (1).png" alt="" style="height: 10rem;">
            <div class="box-content">
                <h3 class="title">{{$place->id}}</h3>
                <span class="post">{{$place->name}}</span>
                <ul class="icon">
                    <li><a href="#"><i class="fa fa-search"></i></a></li>
                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                </ul>
            </div>
            <svg class="curve2" x="0px" y="0px" width="150px" height="150px" viewBox="0 0 150 50">
                <path d="M1.114,7.567C87.544-33.817,150,150.5,150,150.5H1.361L1.114,7.567z"></path>
            </svg>
        </div>
      
      
        <div class="card-body" >
          <h3 class="card-title fs-4" style="color: rgb(190, 143, 23);">
{{$place->name}}
          </h3>
          <!-- <p class="card-text">This is a wider card with</p> -->
        </div>
        <div class="card-footer" >
          <small class="text-muted">
           
                <a href="#" class="mx-1"><i class="fa fa-search m-1 border border-2 rounded-5" style="color: rgb(249, 182, 12);"></i></a><span>
                  <a href="{{route('showPlace',['place'=>$place->id])}}">{{$place->name}}</a>
                </span>
             <a  class="mx-1"><i class="fa fa-link m-1  border border-2 rounded-5" style="color: rgb(249, 182, 12);"></i> Book  <input type="checkbox" name="place_id[]"  value="{{$place->id}}" class="btn btn-warning"></a><span ></span>
        </small>
        </div>
      </div>

      
  </div>
  @endforeach
  <input type="text" name="restOfBudget" value="{{ $restOfBudget }}" hidden>

  </div>
</div>