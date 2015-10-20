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
        <h1>Dataset  {{$db->name}}</h1>
        <h2>Category {{$cat->name}}</h2>
        <hr>
        @foreach($images as $image)
            <p>{{$image->name}}</p><img src="{{$image->url}}" alt="{{$image->url}}" />
        @endforeach
    </div>
@endsection