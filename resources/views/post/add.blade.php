@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Tambah Data</h3>
    <hr>
    <form method="POST" action="{{url('/post')}}">
        @csrf
        <div class="form-group">
            <label>Tanggal</label>
            <input type="text" class="form-control col-4" name="date">
        </div>
        <div class="form-group">
            <label>Slug</label>
            <input type="text" class="form-control col-3" name="slug">
        </div>
        <div class="form-group">
            <label>Judul</label>
            <input type="text" class="form-control col-4" name="title">
        </div>
        <div class="form-group">
            <label>Kategori ID</label>
            <select name="cat_id" class="form-control col-3">
                <option selected>Pilih Kategori ID</option>
                <option>==========================</option>
                @foreach($data as $x)
                <option value="{{$x->id}}">{{$x->id ." - ". $x->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Teks</label>
            <input type="text" class="form-control col-4" name="text">
        </div>
        <button type="submit" class="btn btn-outline-success">Simpan</button>
    </form>
</div>
@endsection