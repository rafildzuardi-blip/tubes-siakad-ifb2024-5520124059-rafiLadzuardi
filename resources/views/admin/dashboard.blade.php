@extends('adminlte::page')

@section('title', 'Dashboard Admin')

@section('content_header')
<h1>
    <i class="fas fa-tachometer-alt"></i>
    Dashboard Admin
</h1>
@stop

@section('content')

<div class="row">

    <div class="col-md-3">
        <div class="small-box bg-primary">
            <div class="inner">
                <h3>{{ \App\Models\Dosen::count() }}</h3>
                <p>Total Dosen</p>
            </div>
            <div class="icon">
                <i class="fas fa-user-tie"></i>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{ \App\Models\Mahasiswa::count() }}</h3>
                <p>Total Mahasiswa</p>
            </div>
            <div class="icon">
                <i class="fas fa-users"></i>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>{{ \App\Models\Matakuliah::count() }}</h3>
                <p>Total Mata Kuliah</p>
            </div>
            <div class="icon">
                <i class="fas fa-book"></i>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="small-box bg-danger">
            <div class="inner">
                <h3>{{ \App\Models\Jadwal::count() }}</h3>
                <p>Total Jadwal</p>
            </div>
            <div class="icon">
                <i class="fas fa-calendar-alt"></i>
            </div>
        </div>
    </div>

</div>

@stop