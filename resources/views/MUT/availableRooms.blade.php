<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>availablehotels to book</title>
</head>
<body>
    {{-- {{dd(json_decode($availableRooms))}} --}}

{{-- {{dd($hotel)}} --}}

     
       @foreach (json_decode($availableRooms) as $room )
 {{-- {{dd($hotel['id'])}} --}}
 {{-- {{dd($room)}} --}}
       @if($room->hotel_id  = $hotel['id'])
      
      
       <div class="card" style="width: 18rem;">
        roomImg :<img src="..." {{$room->cover_img}} class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">price per one night {{$room->price}} </h5>
          <p class="card-text">Nice Place</p>
          <form action="{{route('BookInHotel',['order'=>$order->id,'hotel'=>$hotel->id])}}" method="POST">
            @csrf
            <input type="text" name="room_id" value="{{ $room->id }}" hidden>
          <button type="submit" >Book Now</button>
        
        </form>
         
        </div>
      </div>
      @endif

      @endforeach
</body>
</html>
