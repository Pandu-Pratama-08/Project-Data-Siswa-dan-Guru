@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Tambah Data Siswa</div>
  <div class="card-body">
      
      <form action="{{ url('students') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Nis</label></br>
        <input type="text" name="nis" id="nis" class="form-control"></br>
        <label>Rayon</label></br>
        <input type="text" name="rayon" id="rayon" class="form-control"></br>
        <input type="submit" value="Tambah" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop