{{-- @extends('templates.template') --}}
@extends('layouts.app')

@section('content')
    <h1 class="text-center">Visualizar</h1><hr>
       
    <div class="col-8 m-auto">
        @php
            $book=$reservation->find($reservation->id)->relReservations;
        @endphp
        {{-- Title: {{$book->title}} <br> --}}
        Title: {{$book->title}} <br>
        Days: {{$reservation->days}} <br>
    </div>
@endsection