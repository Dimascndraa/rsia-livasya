@extends('dashboard.layouts.main')

@section('container')
    <div class="card-body">
        <p class="text-right">
            <a href="/dashboard/dokter/create" class="btn btn-outline-success text-center">
                <i class="fas fa-plus-circle"></i> Tambah Dokter
            </a>
        </p>
        <table id="datatab" class="table table-striped table-bordered" style="width:100%;">
            <thead>
                <tr>
                    <th class="scope">#</th>
                    <th class="scope">Nama Dokter</th>
                    <th class="scope">Jabatan</th>
                    <th class="scope">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dokter as $d)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $d->nama_dokter }}</td>
                        <td>{{ $d->jabatan }}</td>
                        <td>
                            <a href="/dashboard/dokter/{{ $d->id }}" class="badge mx-1 bg-info p-2">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="/dashboard/dokter/{{ $d->id }}/edit" class="badge mx-1 bg-warning p-2">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="/dashboard/dokter/{{ $d->id }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <input type="hidden" name="oldImage" value="{{ $d->image }}">
                                <input type="hidden" name="oldPosterDokter" value="{{ $d->poster_dokter }}">
                                <input type="hidden" name="oldPosterJadwal" value="{{ $d->poster_jadwal }}">
                                <button class="badge mx-1 badge-danger p-2 border-0"
                                    onclick="return confirm('Anda takin?')">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
