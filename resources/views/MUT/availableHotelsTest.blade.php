<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>availablehotels to book</title>
</head>
<body>
    {{-- {{dd($availableRooms)}} --}}

    <?php $prev_hotel =null; 

     ?>
       @foreach ($availableRooms as $room )
     
       @if($prev_hotel != $room->Hotel )
       <?php $prev_hotel = $room->Hotel; ?>
      
       <div class="card" style="width: 18rem;">
        HotelImg :<img src="..." {{$room->Hotel->cover_img}} class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Hotel Name {{$room->Hotel->name}} </h5>
          <p class="card-text">Nice Place</p>
          <form action="{{route('getAvailableRooms',['order'=>$order->id,'hotel'=>$room->hotel_id])}}" method="POST">
            @csrf
            <input type="text" name="availableRooms" value="{{ $availableRooms }}" hidden>
          <button type="submit" >view Rooms &Book here</button>
        
        </form>
          <a href="#" class="btn btn-primary">Rooms</a>
        </div>
      </div>
      @endif
      @endif
      @endforeach
      @endforeach
       {{-- @foreach ($availableRooms as $room )
       @foreach($order->OrderedRoomType as $orRoom)
       @if($prev_hotel != $room->Hotel )
       <?php $prev_hotel = $room->Hotel; ?>
       @if($orRoom->room_type == $room->type)
       <div class="card" style="width: 18rem;">
        HotelImg :<img src="..." {{$room->Hotel->cover_img}} class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Hotel Name {{$room->Hotel->name}} </h5>
          <p class="card-text">Nice Place</p>
          <form action="{{route('getAvailableRooms',['order'=>$order->id,'hotel'=>$room->hotel_id])}}" method="POST">
            @csrf
            <input type="text" name="availableRooms" value="{{ $availableRooms }}" hidden>
          <button type="submit" >view Rooms &Book here</button>
        
        </form>
          <a href="#" class="btn btn-primary">Rooms</a>
        </div>
      </div>
      @endif
      @endif
      @endforeach
      @endforeach --}}
</body>
</html>