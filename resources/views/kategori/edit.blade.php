@extends('layouts.app')

@section('content')
<div class="container">

    <h3>Ubah Data</h3>
    <hr>
    <form method="POST" action="{{url('/category/'.$data->id)}}">
        <input type="hidden" name="_method" value="PATCH">
        @csrf
        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control col-4" name="name" value="{{$data->name}}">
        </div>
        <div class="form-group">
            <label>Teks</label>
            <input type="text" class="form-control col-4" name="text" value="{{$data->text}}">
        </div>
        <button type="submit" class="btn btn-outline-warning">Ubah</button>
    </form>
</div>
@endsection