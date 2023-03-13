@extends('MUT.multiStepsCustom')

@section('custom')



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Hotels</title>
    <link href="{{ asset("css/style.css") }}" rel="stylesheet">
    <link rel="stylesheet" href="assets/Ecommerce.css">
</head>
<body>
{{-- {{dd($order->id)}} --}}
    {{-- {{Input::all()}} --}}
    {{-- <form action="{{route('availablePlaces.index',[$order->id])}}" action="get"> --}}
    {{-- {{dd($availableRooms)}} --}}
{{-- @csrf --}}
{{-- {{dd(Auth::User())}} --}}
    {{-- {{dd($order->OrderedRoomType()->room_type)}} --}}
    {{-- <div class="cards"> --}}
        <?php $prev_hotel =null;
       $prev_price = null
        ?>
        @foreach ($availableRooms as $room )
        {{-- @foreach($order->OrderedRoomType  as $orRoom) --}}
        {{-- {{$orRoom->room_type}} --}}



        {{-- @foreach($order->OrderedRoomType as $orRoom)
        @if($prev_hotel != $room->Hotel )
        <?php $prev_hotel = $room->Hotel
        $prev_price =$room->price ?>
@if($orRoom->room_type == $room->type)
<h1>matches hotelName: {{$room->Hotel->name}}</h1>
<img src="" alt="">Img :{{$room->Hotel->cover_img}}
<a href="showHotel/{{$room->Hotel->id}} ">show hotel</a>
<a href="showRoom/{{$room->id}}">show room</a>
@endif
@endif
@endforeach
 @endforeach --}}
        @foreach($order->OrderedRoomType as $orRoom)
        @if($prev_hotel != $room->Hotel )

@if($orRoom->room_type == $room->type && $room->price * $order->n_of_days < $order->budget*0.6 && $prev_price !=$room->price)
<h1>matches hotelName: {{$room->Hotel->name}}</h1>
<img src="" alt="">Img :{{$room->Hotel->cover_img}}
<a href="showHotel/{{$room->Hotel->id}} ">show hotel</a>
<a href="showRoom/{{$room->id}}">show room</a>
<form action="{{route('bookingRoom')}}" method="POST">
    @csrf
    <input type="text" name="room_id" value="{{ $room->id }}" hidden>
    <input type="text" name="order_id" value="{{ $order->id }}" hidden>
    <button type="submit">Book Room</button>
</form>
@endif
@endforeach
 @endforeach
<a href="{{route('availablePlaces.index',[$order->id])}}">Next step</a>
</form>
</body>
</html>

@endsection