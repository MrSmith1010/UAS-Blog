@extends('layouts.app')

@section('content')
<div class="container">

    <h3>Ubah Data</h3>
    <hr>
    <form method="POST" action="{{url('/album/'.$data->id)}}">
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
        <div class="form-group">
            <label>Photo ID</label>
            <select name="photo_id" class="form-control col-4">
                <option value="{{$data->photo_id}}" selected>{{$data->photo_id}}</option>
                <option>==========================</option>
                @foreach($data1 as $x)
                <option value="{{$x->id}}">{{$x->id ." - ". $x->title }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-outline-warning">Ubah</button>
    </form>
</div>
@endsection