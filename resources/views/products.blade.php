@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            @foreach ($pasta as $key_type => $type)
                <h1>{{$key_type}}</h1>
                <ul>
                @foreach ($type as $key_element => $element)
                    <li>
                        <a href="{{ route('pageDetail', ['id' => $key_element]) }}">
                            <img src="{{ $element['src'] }}" alt="">
                            <div class="overlay">
                                <p>{{$element['titolo']}}</p>
                            </div>
                        </a>
                    </li>
                @endforeach
                </ul>
            @endforeach
        </div>
    </main>
@endsection
