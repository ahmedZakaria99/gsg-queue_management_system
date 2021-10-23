@extends('layouts.public')
@section('content')
    <div>
        <p>Your number is {{$number}}</p>
        <a href="{{route('wait')}}" class="btn theme-btn theme-btn-outline mr-2"> Done</a>
    </div>
@endsection
