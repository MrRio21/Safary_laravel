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
<?php $prev_room =null;

?>
       @foreach (json_decode($availableRooms) as $room )
       @if($prev_room != $room )
       <?php $prev_room = $room; ?>
 {{-- {{dd($hotel['id'])}} --}}
 {{-- {{dd($room)}} --}}
       @if($room->hotel_id  == $hotel['id'] && $prev_room->type == $room->type && $prev_room->price == $room->price)


       <div class="card" style="width: 18rem;">
        roomImg :<img src="..." {{$room->cover_img}} class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">price per one night per one person{{$room->price}} </h5>
          <h5 class="card-title">type of the room {{$room->type}} </h5>
          <p class="card-text">Nice Place</p>
          <form action="{{route('BookInHotel',['order'=>$order->id,'hotel'=>$hotel->id])}}" method="POST">
            @csrf
            <input type="text" name="room_id" value="{{ $room->id }}" hidden>
          <button type="submit" >Book Now & next step </button>
        </form>
          <form action="{{route('getAvailableHotels',['order'=>$order->id])}}" >
            @csrf
            <input type="text" name="room_id" value="{{ $room->id }}" hidden>
          <button type="submit" >Back </button>
        </form>

        </div>
      </div>
      @endif
@endif
      @endforeach
</body>
</html>
