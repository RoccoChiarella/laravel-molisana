@extends('layouts.app')

@section('content')
    <main class="main-detail">
        <h1>{{$pasta['titolo']}}</h1>
        <img src="{{$pasta['src-h']}}" alt="">
        <img src="{{$pasta['src-p']}}" alt="">
        <div class="container">
            <p>{{$pasta['descrizione']}}</p>
        </div>
    </main>
@endsection
