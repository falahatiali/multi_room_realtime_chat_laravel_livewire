@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="mb-4">
            #{{ $room->title }}
        </div>

        <div class="row justify-content-center">
            <div class="col-md-2">
                users
            </div>
            <div class="col-md-10">
                <livewire:chat.messages :room="$room" :messages="$messages" />

                <livewire:chat.new-message :room="$room"/>
            </div>
        </div>
    </div>
@endsection
