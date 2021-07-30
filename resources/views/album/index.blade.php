@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Kategori</h3>
    <hr>
    <a href="{{url('album/create')}}" class="btn btn-success mb-3">Tambah</a>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Teks</th>
                <th>Foto ID</th>
                <th class="text-center">Opsi</th>
            </tr>
        </thead>
        @foreach($data as $x)
        <tr>
            <td>{{$x->name}}</td>
            <td>{{$x->text}}</td>
            <td>{{$x->photo_id}}</td>
            <td class="text-center">
                <form action="{{url('album/'.$x->id)}}" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    @csrf
                    <a href="{{url('album/'.$x->id.'/edit')}}" class="btn btn-sm btn-warning">Ubah</a>
                    <button class="btn btn-sm btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection