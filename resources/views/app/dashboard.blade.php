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
@endsection