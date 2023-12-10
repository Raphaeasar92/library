{{-- @extends('templates.template') --}}

@extends('layouts.app')

@section('content')
    <h1 class="text-center">Library - Reservation</h1><hr>

  <div class="text-center mt-3 mb-4">
    <a href="{{url('reservations/create')}}">
        <button class="btn btn-success">Register</button>
    </a>
</div>

    <div class="col-8 m-auto">
        @csrf
        <table class="table text-center">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Id Book</th>
                <th scope="col">Days</th>
            </tr>
            </thead>
            <tbody>

            @foreach($reservation as $reservations)
                @php
                    $book=$reservations->find($reservations->id)->relBooks;
                @endphp
                <tr>
                    <th scope="row">{{$reservations->id}}</th>
                    {{-- <td>{{$book->title}}</td> --}}
                     <td>{{$reservations->days}}</td>
                    <td>
                        <a href="{{url("reservations/$reservations->id")}}">
                            <button class="btn btn-dark">View</button>
                        </a>

                       <a href="{{url("reservations/$reservations->id/edit")}}">
                            <button class="btn btn-primary">Edit</button>
                        </a>

                        <a href="{{url("reservations/$reservations->id")}}" class="js-del">
                            <button class="btn btn-danger">Delete</button>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$reservation->links()}}
    </div>
@endsection