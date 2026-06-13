@extends('adminlte::page')

@section('title', 'Tambah Mata Kuliah')

@section('content_header')
<h1><i class="fas fa-book-medical"></i> Tambah Mata Kuliah</h1>
@stop

@section('content')

<div class="card card-warning">

    <div class="card-header">
        <h3 class="card-title">Form Input Mata Kuliah</h3>
    </div>

    <form action="{{ route('matakuliah.store') }}" method="POST">

        @csrf

        <div class="card-body">

            <div class="form-group">
                <label>Kode Mata Kuliah</label>

                <input type="text"
                       name="kode_matakuliah"
                       class="form-control"
                       placeholder="Contoh: IF101"
                       required>
            </div>

            <div class="form-group">
                <label>Nama Mata Kuliah</label>

                <input type="text"
                       name="nama_matakuliah"
                       class="form-control"
                       placeholder="Contoh: Pemrograman Web"
                       required>
            </div>

            <div class="form-group">
                <label>SKS</label>

                <input type="number"
                       name="sks"
                       class="form-control"
                       min="1"
                       max="6"
                       placeholder="Contoh: 3"
                       required>
            </div>

        </div>

        <div class="card-footer">

            <button type="submit"
                    class="btn btn-success">

                <i class="fas fa-save"></i>
                Simpan

            </button>

            <a href="{{ route('matakuliah.index') }}"
               class="btn btn-secondary">

                <i class="fas fa-arrow-left"></i>
                Kembali

            </a>

        </div>

    </form>

</div>

@stop