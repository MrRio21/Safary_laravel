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

        @foreach ($availableTourguides as $tourguide )
{{-- {{dd($tourguide->User)}} --}}
<img src=""{{$tourguide->User->image}} alt="">
<p>price per day : {{$tourguide->price}}EGP</p>
<p>lang : {{$tourguide->languages}}</p>
        <a href="{{route('showPlace',['place'=>$tourguide->id])}}">{{$tourguide->User->name}}</a>
        <form action="{{route('bookWithTourguide',['order'=>$order->id,'tourguide'=>$tourguide->id])}}" method="post">
@csrf

<input type="text" name="restBudgetBeforeTourguide" value="{{ $restBudgetBeforeTourguide }}" hidden>
            <button type="submit"  >BOOK a tour with me</button>
    </form>


               @endforeach
        {{-- <input type="text" name="restOfBudget" value="{{ $restOfBudget }}" hidden> --}}

        <form action="" method="POST">
            @csrf
        <button type="submit">skip &submit MT (my trip)</button>
    </form>
    </div>
</body>
</html>
