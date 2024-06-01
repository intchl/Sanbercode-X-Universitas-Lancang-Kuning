@extends('layout.master')

@section('title')
Detail Cast
@endsection

@section('content')
    <h3>{{$cast->nama}}</h3>
    <h5>{{$cast->umur}}</h4>
    <p>{{$cast->bio}}</p>

    <a href="/cast" class="btn btn-sm btn-primary">Back</a>
@endsection