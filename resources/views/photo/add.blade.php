@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Tambah Data</h3>
    <hr>
    <form method="POST" action="{{url('/photo')}}">
        @csrf
        <div class="form-group">
            <label>Tanggal</label>
            <input type="text" class="form-control col-4" name="date">
        </div>
        <div class="form-group">
            <label>Judul</label>
            <input type="text" class="form-control col-4" name="title">
        </div>
        <div class="form-group">
            <label>Post ID</label>
            <select name="post_id" class="form-control col-4">
                <option selected>Pilih Post ID</option>
                <option>==========================</option>
                @foreach($data as $x)
                <option value="{{$x->id}}">{{$x->id ." - ". $x->title }}</option>
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