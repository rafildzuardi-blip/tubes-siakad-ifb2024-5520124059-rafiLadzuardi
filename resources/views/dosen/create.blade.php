    @extends('adminlte::page')

@section('title', 'Tambah Dosen')

@section('content_header')
<h1><i class="fas fa-user-plus"></i> Tambah Dosen</h1>
@stop

@section('content')

<div class="card card-primary">

    <div class="card-header">
        <h3 class="card-title">Form Input Dosen</h3>
    </div>

    <form action="{{ route('dosen.store') }}" method="POST">

        @csrf

        <div class="card-body">

            <div class="form-group">
                <label>NIDN</label>

                <input type="text"
                       name="nidn"
                       class="form-control"
                       placeholder="Masukkan NIDN">
            </div>

            <div class="form-group">
                <label>Nama Dosen</label>

                <input type="text"
                       name="nama"
                       class="form-control"
                       placeholder="Masukkan Nama Dosen">
            </div>

        </div>

        <div class="card-footer">

            <button type="submit"
                    class="btn btn-success">

                <i class="fas fa-save"></i>
                Simpan

            </button>

            <a href="{{ route('dosen.index') }}"
               class="btn btn-secondary">

                Kembali

            </a>

        </div>

    </form>

</div>

@stop