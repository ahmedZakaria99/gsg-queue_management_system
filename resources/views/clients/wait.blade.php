@extends('layouts.public')
@section('content')
    <div>
        <p>Wait your number here please</p>
        <form action="{{ route('store') }}" method="post">
            @csrf
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Make Reservation</button>
            </div>
        </form>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
@endsection
