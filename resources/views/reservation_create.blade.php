{{-- @extends('templates.template') --}}

@extends('layouts.app')

@section('content')
    <h1 class="text-center">@if(isset($book)) Edit @else Register @endif</h1> <hr>

    <div class="col-8 m-auto">

        @if(isset($errors) && count($errors)>0)
            <div class="text-center mt-4 mb-4 p-2 alert-danger">
                @foreach($errors->all() as $erro)
                    {{$erro}}<br>
                @endforeach
            </div>
        @endif

        @if(isset($book))
            <form name="formEdit" id="formEdit" method="post" action="{{url("reservations/$reservation->id")}}">
                @method('PUT')
        @else
            <form name="formCad" id="formCad" method="post" action="{{url('reservations')}}">
        @endif
                @csrf
                <select class="form-control" name="id_book" id="id_book" required>
                    <option value="{{$reservation->relbooks->id ?? ''}}">{{$reservation->relBooks->title ?? 'Title'}}</option>
                    @foreach($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select><br>
                <input class="form-control" type="text" name="days" id="days" placeholder="Days:" value="{{$reservation->days ?? ''}}" required><br>
                <input class="btn btn-primary" type="submit" value="@if(isset($reervation)) Edit @else Register @endif">
            </form>
    </div>
@endsection