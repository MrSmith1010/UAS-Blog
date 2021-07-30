@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Tambah Data</h3>
    <hr>
    <form method="POST" action="{{url('/album')}}">
        @csrf
        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control col-4" name="name">
        </div>
        <div class="form-group">
            <label>Teks</label>
            <input type="text" class="form-control col-4" name="text">
        </div>
        <div class="form-group">
            <label>Photo ID</label>
            <select name="photo_id" class="form-control col-4">
                <option selected>Pilih Photo ID</option>
                <option>==========================</option>
                @foreach($data as $x)
                <option value="{{$x->id}}">{{$x->id ." - ". $x->title }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-outline-success">Simpan</button>
    </form>
</div>
@endsection