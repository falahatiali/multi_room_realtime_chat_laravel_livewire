@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="mb-4">
            Rooms
        </div>

        <div class="row justify-content-center">
            <div class="col-md-2">
                @foreach($rooms as $room)
                    <div>
                        <a href="{{ route('chat.room' , $room) }}">{{ $room->title }}</a>
                    </div>
                @endforeach
            </div>
            <div class="col-md-10">
            </div>
        </div>
    </div>
@endsection
