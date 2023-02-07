@extends('layouts.main_layout')

@section('content')
    <ul>
        
        @foreach ($people as $person)
            <li>
                <ul>
                    <li>{{ $person->firstname }}</li>
                    <li>{{ $person->lastname }}</li>
                    <li>{{ $person->birth_date }}</li>
                    <li>{{ $person->height }}</li>
                </ul>
            </li>
        @endforeach

    </ul>    


@endsection