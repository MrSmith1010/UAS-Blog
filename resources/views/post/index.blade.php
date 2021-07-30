@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Post</h3>
    <hr>
    <a href="{{url('post/create')}}" class="btn btn-success mb-3">Tambah</a>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Slug</th>
                <th>Judul</th>
                <th>Teks</th>
                <th>Kategori ID</th>
                <th class="text-center">Opsi</th>
            </tr>
        </thead>
        @foreach($data as $x)
        <tr>
            <td>{{$x->date}}</td>
            <td>{{$x->slug}}</td>
            <td>{{$x->title}}</td>
            <td>{{$x->text}}</td>
            <td>{{$x->cat_id}}</td>
            <td class="text-center">
                <form action="{{url('post/'.$x->id)}}" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    @csrf
                    <a href="{{url('post/'.$x->id.'/edit')}}" class="btn btn-sm btn-warning">Ubah</a>
                    <button class="btn btn-sm btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection