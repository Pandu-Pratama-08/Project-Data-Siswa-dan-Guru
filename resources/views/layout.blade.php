<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Student Management</title>

    <style>
        /* The side navigation menu */
        .sidebar {
            margin: 0;
            padding: 0;
            width: 200px;
            background-color: #f1f1f1;
            position: fixed;
            height: 100%;
            overflow: auto;
        }

        /* Sidebar links */
        .sidebar a {
            display: block;
            color: black;
            padding: 16px;
            text-decoration: none;
        }

        /* Active/current link */
        .sidebar a.active {
            background-color: #04AA6D;
            color: white;
        }

        /* Links on mouse-over */
        .sidebar a:hover:not(.active) {
            background-color: #555;
            color: white;
        }

        /* Page content */
        div.content {
            margin-left: 200px;
            padding: 1px 16px;
            height: 1000px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">
                        <h2>Management Data Siswa dan Guru</h2>
                    </a>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="sidebar">
                    <a class="active" href="{{ url('/layout') }}">Home</a>
                    <a href="{{ url('students') }}">Student</a>
                    <a href="{{ url('teachers') }}">Teacher</a>
                </div>
            </div>
            <div class="col-md-9">
                @yield('content')

                <!-- Konten Landing Page -->
                @if (request()->is('/')) <!-- Cek apakah ini adalah halaman utama -->
                <div class="jumbotron text-center">
                    <h1 class="display-4">Selamat Datang di Sistem Manajemen Sekolah!</h1>
                    <p class="lead">Kami menyediakan solusi terbaik untuk mengelola data siswa, guru.</p>
                    <hr class="my-4">
                    <p>Jelajahi fitur-fitur kami dan tingkatkan efisiensi manajemen sekolah Anda.</p>
                    <a class="btn btn-primary btn-lg" href="{{ url('students') }}" role="button">Kelola Siswa</a>
                    <a class="btn btn-secondary btn-lg" href="{{ url('teachers') }}" role="button">Kelola Guru</a>
                </div>
                @endif
            </div>
        </div>
    </div>
</body>

</html>