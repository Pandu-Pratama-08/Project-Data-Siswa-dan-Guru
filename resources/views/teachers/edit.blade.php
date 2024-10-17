@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Data Guru</div>
  <div class="card-body">
      
      <form action="{{ url('teachers/' .$teachers->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$teachers->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$teachers->name}}" class="form-control"></br>
        <label>keahlian</label></br>
        <input type="text" name="keahlian" id="keahlian" value="{{$teachers->keahlian}}" class="form-control"></br>
        <label>Pembimbing Siswa</label></br>
        <input type="text" name="pembimbingsiswa" id="pembimbingsiswa" value="{{$teachers->pembimbingsiswa}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop