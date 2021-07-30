@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Foto</h3>
    <hr>
    <a href="{{url('photo/create')}}" class="btn btn-success mb-3">Tambah</a>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Judul</th>
                <th>Teks</th>
                <th>Post ID</th>
                <th class="text-center">Opsi</th>
            </tr>
        </thead>
        @foreach($data as $x)
        <tr>
            <td>{{$x->date}}</td>
            <td>{{$x->title}}</td>
            <td>{{$x->text}}</td>
            <td>{{$x->post_id}}</td>
            <td class="text-center">
                <form action="{{url('photo/'.$x->id)}}" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    @csrf
                    <a href="{{url('photo/'.$x->id.'/edit')}}" class="btn btn-sm btn-warning">Ubah</a>
                    <button class="btn btn-sm btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection