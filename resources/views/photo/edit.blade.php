@extends('layouts.app')

@section('content')
<div class="container">

    <h3>Ubah Data</h3>
    <hr>
    <form method="POST" action="{{url('/photo/'.$data->id)}}">
        <input type="hidden" name="_method" value="PATCH">
        @csrf
        <div class="form-group">
            <label>Tanggal</label>
            <input type="text" class="form-control col-4" name="date" value="{{$data->date}}">
        </div>
        <div class="form-group">
            <label>Judul</label>
            <input type="text" class="form-control col-4" name="title" value="{{$data->title}}">
        </div>
        <div class="form-group">
            <label>Post ID</label>
            <select name="post_id" class="form-control col-4">
                <option value="{{$data->post_id}}" selected>{{$data->post_id}}</option>
                <option>==========================</option>
                @foreach($data1 as $x)
                <option value="{{$x->id}}">{{$x->id ." - ". $x->title }}</option>
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