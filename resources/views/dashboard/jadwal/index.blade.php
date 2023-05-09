@extends('dashboard.layouts.main')

@section('container')
      <div class="card-body">
        <p class="text-right">
            <a href="/dashboard/pages/jadwal/create" class="btn btn-outline-success text-center">
                <i class="fas fa-plus-circle"></i> Tambah Jadwal
            </a>
        </p>
        <table id="datatab" class="table table-striped table-bordered" style="width:100%;">
            <thead>
                <tr>
                    <th class="scope">#</th>
                    <th class="scope">Image</th>
                    <th class="scope">Caption</th>
                    <th class="scope">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jadwals as $jadwal)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><img src="{{ asset('/public/' . $jadwal->image) }}" width="200" alt="jadwal" class="img-thumbnail"></td>
                        <td>{!! $jadwal->caption !!}</td>
                        <td width="150">
                            <a href="/dashboard/pages/jadwal/{{ $jadwal->id }}/edit" class="badge mx-1 bg-warning p-2">
                                <i class="fas fa-edit"></i> Ubah
                            </a>
                            <form action="/dashboard/pages/jadwal/{{ $jadwal->id }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge mx-1 badge-danger p-2 border-0"
                                    onclick="return confirm('Anda takin?')">
                                    <i class="fas fa-trash"></i> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection