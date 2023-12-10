{{-- @extends('templates.template') --}}
@extends('layouts.app')

@section('content')
    <h1 class="text-center">View</h1><hr>
       
    <div class="col-8 m-auto">
        @php
            $book=$reservation->find($reservation->id)->relBooks;
        @endphp
        {{-- Title: {{$book->title}} <br> --}}
        Days: {{$reservation->days}} <br>
    </div>
@endsection