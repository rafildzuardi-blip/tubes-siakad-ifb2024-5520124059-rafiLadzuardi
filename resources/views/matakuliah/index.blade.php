@extends('adminlte::page')

@section('title', 'Data Mata Kuliah')

@section('content_header')

<div class="d-flex justify-content-between">
    <h1><i class="fas fa-book"></i> Data Mata Kuliah</h1>


<a href="{{ route('matakuliah.create') }}" class="btn btn-primary">
    <i class="fas fa-plus"></i> Tambah Mata Kuliah
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
    <h3 class="card-title">Daftar Data Mata Kuliah</h3>
</div>

<div class="card-body">

    <table class="table table-bordered table-hover">

        <thead style="background:#1E293B;color:white;">
            <tr>
                <th>No</th>
                <th>Kode MK</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
                <th width="220">Aksi</th>
            </tr>
        </thead>

        <tbody>

        @forelse($matakuliah as $key => $mk)

            <tr>
                <td>{{ $key + 1 }}</td>

                <td>
                    <span class="badge bg-info">
                        {{ $mk->kode_matakuliah }}
                    </span>
                </td>

                <td>{{ $mk->nama_matakuliah }}</td>

                <td>
                    <span class="badge bg-success">
                        {{ $mk->sks }}
                    </span>
                </td>

                <td>

                    <a href="{{ route('matakuliah.show',$mk->kode_matakuliah) }}"
                       class="btn btn-info btn-sm">
                        <i class="fas fa-eye"></i>
                    </a>

                    <a href="{{ route('matakuliah.edit',$mk->kode_matakuliah) }}"
                       class="btn btn-warning btn-sm">
                        <i class="fas fa-edit"></i>
                    </a>

                    <form action="{{ route('matakuliah.destroy',$mk->kode_matakuliah) }}"
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
                <td colspan="5" class="text-center">
                    Belum ada data mata kuliah
                </td>
            </tr>

        @endforelse

        </tbody>

    </table>

</div>


</div>

@stop
