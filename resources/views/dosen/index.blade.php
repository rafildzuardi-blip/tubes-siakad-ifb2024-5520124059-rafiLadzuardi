@extends('adminlte::page')

@section('title', 'Data Dosen')

@section('content_header')
<div class="d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center pb-3 pb-sm-0">
    <div class="mb-3 mb-sm-0">
        <h1 class="mb-0 text-dark font-weight-bold" style="font-size: calc(1.5rem + 1vw);">
            <i class="fas fa-user-tie text-primary"></i> 
            Data Dosen
        </h1>
        <small class="text-muted">Kelola Informasi dan Biodata Dosen Pengajar</small>
    </div>

    <div class="w-100 w-sm-auto">
        <a href="{{ route('dosen.create') }}" class="btn btn-primary shadow-sm btn-block d-sm-inline-block">
            <i class="fas fa-plus-circle"></i> Tambah Dosen
        </a>
    </div>
</div>
@stop

@section('content')

@if(session('success'))
<div class="alert alert-success alert-dismissible fade show shadow-sm">
    <i class="fas fa-check-circle mr-1"></i>
    {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert">
        <span>&times;</span>
    </button>
</div>
@endif

<div class="card card-outline card-primary shadow-sm border-0">

    <div class="card-header bg-white">
        <h3 class="card-title font-weight-bold text-secondary mb-0">
            <i class="fas fa-list text-primary mr-1"></i>
            Daftar Data Dosen
        </h3>
    </div>

    <div class="card-body p-0 p-sm-3"> <div class="table-responsive w-full" style="overflow-x: auto; -webkit-overflow-scrolling: touch;">

            <table class="table table-bordered table-hover mb-0" style="min-width: 600px; width: 100%;">

                <thead style="background:#1E293B; color:white;">
                    <tr>
                        <th class="text-center" width="60" style="border-color: #334155;">No</th>
                        <th width="180" style="border-color: #334155;">NIDN</th>
                        <th style="border-color: #334155;">Nama Dosen</th>
                        <th class="text-center" width="150" style="border-color: #334155;">Aksi</th>
                    </tr>
                </thead>

                <tbody>

                @forelse($dosen as $key => $d)

                    <tr>
                        <td class="text-center align-middle">{{ $key + 1 }}</td>

                        <td class="align-middle font-weight-bold">
                            <span class="badge bg-info px-2 py-1" style="font-size: 90%;">
                                {{ $d->nidn }}
                            </span>
                        </td>

                        <td class="align-middle text-dark font-weight-bold">
                            {{ $d->nama }}
                        </td>

                        <td class="text-center align-middle">
                            <div class="btn-group" role="group">
                                <a href="{{ route('dosen.show',$d->nidn) }}"
                                   class="btn btn-outline-info btn-sm mx-1 rounded shadow-sm" title="Detail">
                                    <i class="fas fa-eye"></i>
                                </a>

                                <a href="{{ route('dosen.edit',$d->nidn) }}"
                                   class="btn btn-outline-warning btn-sm mx-1 rounded shadow-sm" title="Ubah">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <form action="{{ route('dosen.destroy',$d->nidn) }}"
                                      method="POST"
                                      style="display:inline">
                                    @csrf
                                    @method('DELETE')

                                    <button onclick="return confirm('Yakin hapus data?')"
                                            class="btn btn-outline-danger btn-sm mx-1 rounded shadow-sm" title="Hapus">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>

                @empty

                    <tr>
                        <td colspan="4" class="text-center py-5 text-muted">
                            <i class="fas fa-user-slash fa-2x mb-3 text-gray"></i>
                            <br>
                            <strong>Belum ada data dosen</strong>
                        </td>
                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>
@stop