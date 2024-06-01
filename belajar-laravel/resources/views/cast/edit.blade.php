@extends('layout.master')

@section('title')
    Edit Cast
@endsection

@section('content')
<form action="/cast/{{$cast->id}}" method="POST">
    @csrf
    @method('put')
    <div class="form-group">
        <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama" value="{{$cast->nama}}">
        @error('nama')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="umur" id="umur" placeholder="Masukkan Umur" value="{{$cast->umur}}">
        @error('umur')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <textarea name="bio" id="bio" cols="30" rows="10" class="form-control" placeholder="Tambahkan Bio" >{{$cast->bio}}</textarea>
        @error('bio')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Update Data</button>
</form>
@endsection