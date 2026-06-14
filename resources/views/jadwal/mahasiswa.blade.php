@extends('adminlte::page')

@section('title', 'Jadwal Kuliah')

@section('content_header')
<div class="pb-2">
    <h1 class="mb-0 text-dark font-weight-bold" style="font-size: calc(1.5rem + 1vw);">
        <i class="fas fa-calendar-alt text-primary"></i>
        Jadwal Kuliah
    </h1>
    <small class="text-muted">Sistem Informasi Akademik Mahasiswa</small>
</div>
@stop

@section('content')

<div class="card card-outline card-primary shadow-sm border-0">

    <div class="card-header bg-white">
        <h3 class="card-title font-weight-bold text-secondary mb-0">
            <i class="fas fa-clock text-primary mr-1"></i>
            Jadwal Perkuliahan
        </h3>
    </div>

    <div class="card-body p-0 p-sm-3"> <div class="table-responsive w-full" style="overflow-x: auto; -webkit-overflow-scrolling: touch;">

            <table class="table table-bordered table-hover mb-0" style="min-width: 750px; width: 100%;">

                <thead style="background:#1E293B; color:white;">
                    <tr>
                        <th class="text-center" width="60" style="border-color: #334155;">No</th>
                        <th style="border-color: #334155;">Mata Kuliah</th>
                        <th class="text-center" width="100" style="border-color: #334155;">SKS</th>
                        <th style="border-color: #334155;">Dosen</th>
                        <th class="text-center" width="100" style="border-color: #334155;">Kelas</th>
                        <th class="text-center" width="130" style="border-color: #334155;">Hari</th>
                        <th class="text-center" width="110" style="border-color: #334155;">Jam</th>
                    </tr>
                </thead>

                <tbody>

                @forelse($jadwal as $key => $j)

                    <tr>
                        <td class="text-center align-middle">{{ $key + 1 }}</td>

                        <td class="align-middle font-weight-bold text-dark">
                            {{ $j->matakuliah->nama_matakuliah ?? '-' }}
                        </td>

                        <td class="text-center align-middle">
                            <span class="badge badge-success px-2 py-1">
                                {{ $j->matakuliah->sks ?? 0 }} SKS
                            </span>
                        </td>

                        <td class="align-middle">
                            {{ $j->dosen->nama ?? '-' }}
                        </td>

                        <td class="text-center align-middle">
                            <span class="badge badge-primary px-2 py-1">
                                {{ $j->kelas }}
                            </span>
                        </td>

                        <td class="text-center align-middle">
                            <span class="badge badge-info px-2 py-1">
                                {{ $j->hari }}
                            </span>
                        </td>

                        <td class="text-center align-middle font-weight-bold text-secondary">
                            <i class="far fa-clock mr-1 text-muted small"></i>{{ substr($j->jam,0,5) }}
                        </td>

                    </tr>

                @empty

                    <tr>
                        <td colspan="7" class="text-center py-5 text-muted">
                            <i class="fas fa-calendar-times fa-2x mb-3 text-gray"></i>
                            <br>
                            <strong>Belum ada jadwal perkuliahan</strong>
                        </td>
                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@stop