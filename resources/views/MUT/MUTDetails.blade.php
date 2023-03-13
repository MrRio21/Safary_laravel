@extends('MUT.multiStepsCustom')

@section('custom')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mt (My Trip)</title>
</head>
<body>
    {{dd($order)}}
<h1 align="center">M.T</h1>
<h2 align="center">Hotel i will stayed at :{{$order->}}</h2>
</body>
</html>
@endsection