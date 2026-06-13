@extends('adminlte::page')

@section('title', 'Tambah Jadwal')

@section('content_header')
<h1><i class="fas fa-calendar-plus"></i> Tambah Jadwal</h1>
@stop

@section('content')

<div class="card card-primary">

    <div class="card-header">
        <h3 class="card-title">Form Jadwal Kuliah</h3>
    </div>

    <form action="{{ route('jadwal.store') }}" method="POST">

        @csrf

        <div class="card-body">

            <div class="form-group">
                <label>Mata Kuliah</label>

                <select name="kode_matakuliah" class="form-control">

                    @foreach($matakuliah as $mk)

                        <option value="{{ $mk->kode_matakuliah }}">
                            {{ $mk->kode_matakuliah }} -
                            {{ $mk->nama_matakuliah }}
                        </option>

                    @endforeach

                </select>

            </div>

            <div class="form-group">
                <label>Dosen</label>

                <select name="nidn" class="form-control">

                    @foreach($dosen as $d)

                        <option value="{{ $d->nidn }}">
                            {{ $d->nama }}
                        </option>

                    @endforeach

                </select>

            </div>

            <div class="form-group">
                <label>Kelas</label>

                <input type="text"
                       name="kelas"
                       class="form-control"
                       placeholder="Contoh: A">
            </div>

            <div class="form-group">
                <label>Hari</label>

                <select name="hari" class="form-control">

                    <option>Senin</option>
                    <option>Selasa</option>
                    <option>Rabu</option>
                    <option>Kamis</option>
                    <option>Jumat</option>
                    <option>Sabtu</option>

                </select>

            </div>

            <div class="form-group">
                <label>Jam</label>

                <input type="time"
                       name="jam"
                       class="form-control">
            </div>

        </div>

        <div class="card-footer">

            <button type="submit"
                    class="btn btn-success">

                <i class="fas fa-save"></i>
                Simpan

            </button>

            <a href="{{ route('jadwal.index') }}"
               class="btn btn-secondary">

                Kembali

            </a>

        </div>

    </form>

</div>

@stop