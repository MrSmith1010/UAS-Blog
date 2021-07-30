@extends('layouts.app')

@section('content')
<div class="container">

    <h3>Ubah Data</h3>
    <hr>
    <form method="POST" action="{{url('/post/'.$data->id)}}">
        <input type="hidden" name="_method" value="PATCH">
        @csrf
        <div class="form-group">
            <label>Tanggal</label>
            <input type="text" class="form-control col-4" name="date" value="{{$data->date}}">
        </div>
        <div class="form-group">
            <label>Slug</label>
            <input type="text" class="form-control col-3" name="slug" value="{{$data->slug}}">
        </div>
        <div class="form-group">
            <label>Judul</label>
            <input type="text" class="form-control col-4" name="title" value="{{$data->title}}">
        </div>
        <div class="form-group">
            <label>Kategori ID</label>
            <select name="cat_id" class="form-control col-3">
                <option value="{{$data->cat_id}}" selected>{{$data->cat_id}}</option>
                <option>==========================</option>
                @foreach($data1 as $x)
                <option value="{{$x->id}}">{{$x->id ." - ". $x->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Teks</label>
            <input type="text" class="form-control col-4" name="text" value="{{$data->text}}">
        </div>
        <button type="submit" class="btn btn-outline-warning">Ubah</button>
    </form>
</div>
@endsection