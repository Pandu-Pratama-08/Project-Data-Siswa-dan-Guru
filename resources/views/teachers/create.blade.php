@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Tambah Data Guru</div>
  <div class="card-body">
      
      <form action="{{ url('teachers') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Keahlian</label></br>
        <input type="text" name="keahlian" id="keahlian" class="form-control"></br>
        <label>Pembimbing Siswa</label></br>
        <input type="text" name="pembimbingsiswa" id="pembimbingsiswa" class="form-control"></br>
        <input type="submit" value="Tambah" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop