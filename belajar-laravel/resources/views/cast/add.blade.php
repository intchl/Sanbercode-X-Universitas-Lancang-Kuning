@extends('layout.master')

@section('title')
    Add Cast
@endsection

@section('content')
<form action="/cast" method="POST">
    @csrf
    <div class="form-group">
        <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama">
        @error('nama')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="umur" id="umur" placeholder="Masukkan Umur">
        @error('umur')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <textarea name="bio" id="bio" cols="30" rows="10" class="form-control" placeholder="Tambahkan Bio"></textarea>
        @error('bio')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Add Data</button>
</form>
@endsection