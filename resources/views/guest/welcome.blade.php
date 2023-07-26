@extends('layouts.app')

@section('title', 'Welcome')

@section('main-content')

   
        <ul>
        @foreach ($trains as $train)
            <li>
                <h1>
                    {{ $train['azienda'] }}
                </h1>
                <p>{{ $train['stazione_partenza'] }} -> {{ $train['stazione_arrivo'] }}</p>
                <span>{{ $train['codice_treno'] }}</span>
            </li>  
        @endforeach
        </ul>

@endsection