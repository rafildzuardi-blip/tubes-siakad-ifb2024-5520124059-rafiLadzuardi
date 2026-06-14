@extends('adminlte::page')

@section('title', 'Data KRS Mahasiswa')

@section('content_header')
<div class="pb-2">
    <h1 class="mb-0 text-dark font-weight-bold" style="font-size: calc(1.5rem + 1vw);">
        <i class="fas fa-file-signature text-primary"></i>
        Data KRS Mahasiswa
    </h1>
    <small class="text-muted">
        Monitoring Pengambilan Mata Kuliah Mahasiswa
    </small>
</div>
@stop

@section('content')

@if(session('success'))
<div class="alert alert-success alert-dismissible fade show shadow-sm">
    {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert">
        <span>&times;</span>
    </button>
</div>
@endif

<div class="card card-outline card-primary shadow-sm border-0">

    <div class="card-header bg-white">
        <h5 class="mb-0 font-weight-bold text-secondary">
            <i class="fas fa-book-open text-primary mr-1"></i>
            Daftar KRS Mahasiswa
        </h5>
    </div>

    <div class="card-body p-0 p-sm-3"> <div class="table-responsive w-full" style="overflow-x: auto; -webkit-overflow-scrolling: touch;">

            <table class="table table-bordered table-hover mb-0" style="min-width: 750px; width: 100%;">

                <thead style="background:#1E293B; color:white;">
                    <tr>
                        <th class="text-center" width="60" style="border-color: #334155;">No</th>
                        <th width="140" style="border-color: #334155;">NPM</th>
                        <th style="border-color: #334155;">Mahasiswa</th>
                        <th class="text-center" width="120" style="border-color: #334155;">Kode MK</th>
                        <th style="border-color: #334155;">Mata Kuliah</th>
                        <th class="text-center" width="110" style="border-color: #334155;">SKS</th>
                    </tr>
                </thead>

                <tbody>

                @forelse($krs as $key => $k)

                    <tr>
                        <td class="text-center align-middle">{{ $key + 1 }}</td>

                        <td class="align-middle">
                            <span class="badge badge-primary px-2 py-1" style="font-size: 90%;">
                                {{ $k->npm }}
                            </span>
                        </td>

                        <td class="align-middle font-weight-bold text-dark">
                            {{ $k->mahasiswa->nama ?? '-' }}
                        </td>

                        <td class="text-center align-middle">{{ $k->kode_matakuliah }}</td>

                        <td class="align-middle">
                            {{ $k->matakuliah->nama_matakuliah ?? '-' }}
                        </td>

                        <td class="text-center align-middle">
                            <span class="badge badge-success px-2 py-1" style="font-size: 90%;">
                                {{ $k->matakuliah->sks ?? 0 }} SKS
                            </span>
                        </td>
                    </tr>

                @empty

                    <tr>
                        <td colspan="6" class="text-center py-5 text-muted">
                            <i class="fas fa-info-circle fa-2x mb-3 text-gray"></i>
                            <br>
                            <strong>Belum ada data KRS</strong>
                        </td>
                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

<div class="row mt-3">

    <div class="col-sm-6 mb-3 mb-sm-0">
        <div class="card shadow-sm border-0 mb-0 h-100">
            <div class="card-body text-center d-flex flex-column justify-content-center py-4">
                <i class="fas fa-book fa-2x text-primary mb-2"></i>
                <h2 class="font-weight-bold text-dark mb-1">
                    {{ $krs->count() }}
                </h2>
                <p class="text-muted mb-0 small uppercase font-weight-bold">
                    Total Pengambilan Mata Kuliah
                </p>
            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="card shadow-sm border-0 mb-0 h-100">
            <div class="card-body text-center d-flex flex-column justify-content-center py-4">
                <i class="fas fa-graduation-cap fa-2x text-success mb-2"></i>
                <h2 class="font-weight-bold text-dark mb-1">
                    {{ $krs->sum(fn($item) => $item->matakuliah->sks ?? 0) }}
                </h2>
                <p class="text-muted mb-0 small uppercase font-weight-bold">
                    Total SKS Diambil
                </p>
            </div>
        </div>
    </div>

</div>
@stop