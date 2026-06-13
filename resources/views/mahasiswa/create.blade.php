@extends('adminlte::page')

@section('title', 'Tambah Mahasiswa')

@section('content_header')
<h1>Tambah Mahasiswa</h1>
@stop

@section('content')

<div class="card card-success">

    <form action="{{ route('mahasiswa.store') }}" method="POST">

        @csrf

        <div class="card-body">

            <div class="form-group">
                <label>NPM</label>
                <input type="text"
                       name="npm"
                       class="form-control">
            </div>

            <div class="form-group">
                <label>Nama Mahasiswa</label>
                <input type="text"
                       name="nama"
                       class="form-control">
            </div>

        </div>

        <div class="card-footer">

            <button class="btn btn-success">
                Simpan
            </button>

        </div>

    </form>

</div>

@stop