@extends('layout')
@section('content')


    <div class="card">
        <div class="card-header">Detail Siswa</div>
        <div class="card-body">


            <div class="card-body">
                <h5 class="card-title">Name : {{ $students->name }}</h5>
                <p class="card-text">Nis : {{ $students->nis }}</p>
                <p class="card-text">Rayon : {{ $students->rayon }}</p>
            </div>

            </hr>

        </div>
    </div>
@endsection