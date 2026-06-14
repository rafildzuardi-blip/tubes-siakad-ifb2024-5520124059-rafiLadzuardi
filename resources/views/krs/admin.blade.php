@extends('adminlte::page')

@section('title', 'Data KRS Mahasiswa')

@section('content_header')
<div class="d-flex justify-content-between align-items-center">
    <div>
        <h1 class="mb-0">
            <i class="fas fa-file-signature text-primary"></i>
            Data KRS Mahasiswa
        </h1>
        <small class="text-muted">
            Monitoring Pengambilan Mata Kuliah Mahasiswa
        </small>
    </div>
</div>
@stop

@section('content')

@if(session('success'))
<div class="alert alert-success alert-dismissible fade show">
    {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert">
        <span>&times;</span>
    </button>
</div>
@endif

<div class="card shadow-sm border-0">

    <div class="card-header bg-white">
        <h5 class="mb-0 font-weight-bold">
            <i class="fas fa-book-open text-primary"></i>
            Daftar KRS Mahasiswa
        </h5>
    </div>

    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-hover">

                <thead style="background:#1E293B;color:white;">

                    <tr>
                        <th>No</th>
                        <th>NPM</th>
                        <th>Mahasiswa</th>
                        <th>Kode MK</th>
                        <th>Mata Kuliah</th>
                        <th>SKS</th>
                    </tr>

                </thead>

                <tbody>

                @forelse($krs as $key => $k)

                    <tr>

                        <td>{{ $key + 1 }}</td>

                        <td>
                            <span class="badge badge-primary">
                                {{ $k->npm }}
                            </span>
                        </td>

                        <td>
                            {{ $k->mahasiswa->nama ?? '-' }}
                        </td>

                        <td>
                            {{ $k->kode_matakuliah }}
                        </td>

                        <td>
                            {{ $k->matakuliah->nama_matakuliah ?? '-' }}
                        </td>

                        <td>
                            <span class="badge badge-success">
                                {{ $k->matakuliah->sks ?? 0 }} SKS
                            </span>
                        </td>

                    </tr>

                @empty

                    <tr>
                        <td colspan="6" class="text-center py-4">

                            <i class="fas fa-info-circle text-muted"></i>
                            <br>
                            Belum ada data KRS

                        </td>
                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

<div class="row mt-4">

    <div class="col-md-6">

        <div class="card shadow-sm border-0">

            <div class="card-body text-center">

                <i class="fas fa-book fa-2x text-primary mb-3"></i>

                <h2 class="font-weight-bold">
                    {{ $krs->count() }}
                </h2>

                <p class="text-muted mb-0">
                    Total Pengambilan Mata Kuliah
                </p>

            </div>

        </div>

    </div>

    <div class="col-md-6">

        <div class="card shadow-sm border-0">

            <div class="card-body text-center">

                <i class="fas fa-graduation-cap fa-2x text-success mb-3"></i>

                <h2 class="font-weight-bold">
                    {{ $krs->sum(fn($item) => $item->matakuliah->sks ?? 0) }}
                </h2>

                <p class="text-muted mb-0">
                    Total SKS Diambil
                </p>

            </div>

        </div>

    </div>

</div>

@stop