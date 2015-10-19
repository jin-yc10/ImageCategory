@extends('basic')
@section('head')
@endsection
@section('body')
    <div class="container">
        Welcome back, {{ Auth::user()->name }}!
    </div>
    <form action="/auth/logout" method="GET">
        {!! csrf_field() !!}
        <button type="submit">Logout</button>
    </form>
    <div>
        <p>{{$dataset->id}}</p>
        <p>{{$dataset->name}}</p>
        <hr>
        @foreach($categories as $c)
            <p>{{$c->id}}</p><p>{{$c->name}}</p>
        @endforeach
    </div>
@endsection