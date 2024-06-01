@extends('layout.master')

@section('title')
Cast
@endsection

@section("content")
<a href="/cast/create" class="btn btn-primary mb-3 btn-sm">Add Data</a>
        <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Umur</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($cast as $key=>$value)
                    <tr>
                        <td>{{$key + 1}}</th>
                        <td>{{$value->nama}}</td>
                        <td>{{$value->umur}}</td>
                        <td>
                            
                            <form action="/cast/{{$value->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="/cast/{{$value->id}}" class="btn btn-info btn-sm">Detail</a>
                                <a href="/cast/{{$value->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
                                <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr colspan="3">
                        <td>Tidak ada data!</td>
                    </tr>  
                @endforelse              
            </tbody>
        </table>
@endsection