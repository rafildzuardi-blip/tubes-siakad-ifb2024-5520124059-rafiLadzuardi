@extends('adminlte::page')

@section('title', 'Data Mahasiswa')

@section('content_header')
<div class="d-flex justify-content-between">
    <h1><i class="fas fa-users"></i> Data Mahasiswa</h1>

    <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary">
        <i class="fas fa-plus"></i> Tambah Mahasiswa
    </a>
</div>
@stop

@section('content')

<div class="card shadow-sm border-0">   

    <div class="card-header">
        <h3 class="card-title">Daftar Data Mahasiswa</h3>
    </div>

    <div class="card-body">

        <table class="table table-bordered table-hover">

            <thead style="background:#1E293B;color:white;">
                <tr>
                    <th>No</th>
                    <th>NPM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>

            @forelse($mahasiswa as $key => $m)

                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $m->npm }}</td>
                    <td>{{ $m->nama }}</td>

                    <td>

                        <a href="{{ route('mahasiswa.show',$m->npm) }}"
                           class="btn btn-info btn-sm">
                            Detail
                        </a>

                        <a href="{{ route('mahasiswa.edit',$m->npm) }}"
                           class="btn btn-warning btn-sm">
                            Edit
                        </a>

                    </td>

                </tr>

            @empty

                <tr>
                    <td colspan="4" class="text-center">
                        Belum ada data mahasiswa
                    </td>
                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

</div>

@stop