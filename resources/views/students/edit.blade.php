@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Data Siswa</div>
  <div class="card-body">
      
      <form action="{{ url('students/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" required value="{{$students->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" required value="{{$students->name}}" class="form-control"></br>
        <label>Nis</label></br>
        <input type="text" name="nis" id="nis" required value="{{$students->nis}}" class="form-control"></br>
        <label>Rayon</label></br>
        <input type="text" name="rayon" id="rayon" required value="{{$students->rayon}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop