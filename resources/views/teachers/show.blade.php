@extends('layout')
@section('content')


    <div class="card">
        <div class="card-header">Detail Guru</div>
        <div class="card-body">


            <div class="card-body">
                <h5 class="card-title">Name : {{ $teachers->name }}</h5>
                <p class="card-text">Keahlian : {{ $teachers->keahlian }}</p>
                <p class="card-text">Pembimbing Siswa : {{ $teachers->pembimbingsiswa }}</p>
            </div>

            </hr>

        </div>
    </div>
@endsection