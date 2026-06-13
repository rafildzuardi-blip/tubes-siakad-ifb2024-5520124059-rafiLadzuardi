@extends('adminlte::page')

@section('title', 'Data Jadwal')

@section('content_header')
<div class="d-flex justify-content-between">
    <h1><i class="fas fa-calendar-alt"></i> Data Jadwal</h1>

    <a href="{{ route('jadwal.create') }}" class="btn btn-primary">
        <i class="fas fa-plus"></i> Tambah Jadwal
    </a>
</div>
@stop

@section('content')

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="card shadow-sm border-0">

    <div class="card-header">
        <h3 class="card-title">Daftar Jadwal Perkuliahan</h3>
    </div>

    <div class="card-body">

        <table class="table table-bordered table-hover">

            <thead style="background:#1E293B;color:white;">

                <tr>
                    <th>No</th>
                    <th>Mata Kuliah</th>
                    <th>Dosen</th>
                    <th>Kelas</th>
                    <th>Hari</th>
                    <th>Jam</th>
                    <th width="220">Aksi</th>
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
                        {{ $j->dosen->nama ?? '-' }}
                    </td>

                    <td>{{ $j->kelas }}</td>

                    <td>
                        <span class="badge bg-info">
                            {{ $j->hari }}
                        </span>
                    </td>

                    <td>{{ $j->jam }}</td>

                    <td>

                        <a href="{{ route('jadwal.show',$j->id) }}"
                           class="btn btn-info btn-sm">
                            <i class="fas fa-eye"></i>
                        </a>

                        <a href="{{ route('jadwal.edit',$j->id) }}"
                           class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i>
                        </a>

                        <form action="{{ route('jadwal.destroy',$j->id) }}"
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
                    <td colspan="7" class="text-center">
                        Belum ada data jadwal
                    </td>
                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

</div>

@stop