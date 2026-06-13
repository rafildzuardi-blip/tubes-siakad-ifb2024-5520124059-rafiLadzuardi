@extends('adminlte::page')

@section('title', 'Jadwal Kuliah')

@section('content_header')
<h1>
    <i class="fas fa-calendar-alt"></i>
    Jadwal Kuliah
</h1>
@stop

@section('content')

<div class="card card-outline card-primary">

    <div class="card-header">
        <h3 class="card-title">Jadwal Perkuliahan</h3>
    </div>

    <div class="card-body">

        <table class="table table-bordered table-hover">

            <thead style="background:#1E293B;color:white;">
                <tr>
                    <th>No</th>
                    <th>Mata Kuliah</th>
                    <th>SKS</th>
                    <th>Dosen</th>
                    <th>Kelas</th>
                    <th>Hari</th>
                    <th>Jam</th>
                </tr>
            </thead>

            <tbody>

            @forelse($jadwal as $key => $j)

                <tr>
                    <td>{{ $key + 1 }}</td>

                    <td>
                        {{ $j->matakuliah->nama_matakuliah ?? '-' }}
                    </td>

                    <td>
                        <span class="badge badge-success">
                            {{ $j->matakuliah->sks ?? 0 }} SKS
                        </span>
                    </td>

                    <td>
                        {{ $j->dosen->nama ?? '-' }}
                    </td>

                    <td>
                        <span class="badge badge-primary">
                            {{ $j->kelas }}
                        </span>
                    </td>

                    <td>
                        <span class="badge badge-info">
                            {{ $j->hari }}
                        </span>
                    </td>

                    <td>
                        {{ substr($j->jam,0,5) }}
                    </td>

                </tr>

            @empty

                <tr>
                    <td colspan="6" class="text-center">
                        Belum ada jadwal
                    </td>
                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

</div>

@stop