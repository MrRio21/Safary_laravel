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
{{-- {{dd($order)}} --}}
{{-- {{dd($restOfBudget)}} --}}
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
</html>
