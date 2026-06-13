@extends('adminlte::page')

@section('title', 'Data Dosen')

@section('content_header')
<div class="d-flex justify-content-between">
    <h1><i class="fas fa-user-tie"></i> Data Dosen</h1>

    <a href="{{ route('dosen.create') }}" class="btn btn-primary">
        <i class="fas fa-plus"></i> Tambah Dosen
    </a>
</div>
@stop

@section('content')

@if(session('success'))
<div class="alert alert-success alert-dismissible fade show">
    <i class="fas fa-check-circle"></i>
    {{ session('success') }}
</div>
@endif

<div class="card shadow-sm border-0">

    <div class="card-header">
        <h3 class="card-title">
            Daftar Data Dosen
        </h3>
    </div>

    <div class="card-body">

        <table class="table table-bordered table-hover">

            <thead style="background:#1E293B;color:white;">

                <tr>
                    <th width="50">No</th>
                    <th>NIDN</th>
                    <th>Nama Dosen</th>
                    <th width="220">Aksi</th>
                </tr>

            </thead>

            <tbody>

            @forelse($dosen as $key => $d)

                <tr>

                    <td>{{ $key + 1 }}</td>

                    <td>
                        <span class="badge bg-info">
                            {{ $d->nidn }}
                        </span>
                    </td>

                    <td>{{ $d->nama }}</td>

                    <td>

                        <a href="{{ route('dosen.show',$d->nidn) }}"
                           class="btn btn-info btn-sm">
                            <i class="fas fa-eye"></i>
                        </a>

                        <a href="{{ route('dosen.edit',$d->nidn) }}"
                           class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i>
                        </a>

                        <form action="{{ route('dosen.destroy',$d->nidn) }}"
                              method="POST"
                              style="display:inline">

                            @csrf
                            @method('DELETE')

                            <button
                                onclick="return confirm('Yakin hapus data?')"
                                class="btn btn-danger btn-sm">

                                <i class="fas fa-trash"></i>

                            </button>

                        </form>

                    </td>

                </tr>

            @empty

                <tr>
                    <td colspan="4" class="text-center text-muted">
                        Belum ada data dosen
                    </td>
                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

</div>

@stop