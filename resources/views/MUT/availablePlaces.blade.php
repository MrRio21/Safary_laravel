<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
{{-- {{dd($availablePlaces)}} --}}
    @foreach ($availablePlaces as $place )
    {{-- {{dd($hotel['id'])}} --}}
    {{-- {{dd($room)}} --}}
          <div class="card" style="width: 18rem;">
           placeImg :<img src="..." {{$place->cover_img}} class="card-img-top" alt="...">
           <div class="card-body">
             <h5 class="card-title">ticket  {{$place->price}} </h5>
             <p class="card-text">Nice Place</p>
             <form action="{{route('BookInHotel',['order'=>$order->id,'hotel'=>$hotel->id])}}" method="POST">
               @csrf
               <input type="text" name="room_id" value="{{ $room->id }}" hidden>
             <button type="submit" >Book Now</button>
           </form>
           </div>
         </div>
         @endforeach
</body>
</html>