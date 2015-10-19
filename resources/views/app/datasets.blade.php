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
        @foreach($datasets as $d)
            <p>{{$d->id}}</p><a href="/dataset/{{$d->id}}">{{$d->name}}</a>
        @endforeach
    </div>
@endsection