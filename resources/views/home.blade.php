@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            @foreach ($pasta as $key => $type)
                <h1>{{$key}}</h1>
                @foreach ($type as $element)
                    <img src="{{ $element['src'] }}" alt="">
                @endforeach
            @endforeach
        </div>
    </main>
@endsection

@section('title', 'Homepage')
