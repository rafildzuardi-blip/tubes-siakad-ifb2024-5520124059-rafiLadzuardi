@extends('adminlte::page')

@section('title', 'Tambah KRS')

@section('content_header')
<h1>Tambah KRS</h1>
@stop

@section('content')

<div class="card">

    <form action="{{ route('krs.store') }}" method="POST">

        @csrf

        <div class="card-body">

            <div class="form-group">

            <div class="form-group">
                
                <label>NPM</label>
                <input type="text"
                    class="form-control"
                    value="{{ auth()->user()->npm }}"
                    readonly>
            </div>

            </div>

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

        </div>

        <div class="card-footer">

            <button class="btn btn-success">
                Simpan
            </button>

        </div>

    </form>

</div>

@stop