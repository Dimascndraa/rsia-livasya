@extends('dashboard.layouts.main')

@section('container')
    <div class="card-body">
        <p class="text-right">
            <a href="/dashboard/pages/review/create" class="btn btn-outline-success text-center">
                <i class="fas fa-plus-circle"></i> Tambah Review
            </a>
        </p>
        <table id="datatab" class="table table-striped table-bordered" style="width:100%;">
            <thead>
                <tr>
                    <th class="scope">#</th>
                    <th class="scope">Nama Klien</th>
                    <th class="scope">Rating</th>
                    <th class="scope">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($review as $r)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $r->nama_klien }}</td>
                        <td>{{ $r->rating }}</td>
                        <td>
                            <a href="/dashboard/pages/review/{{ $r->id }}" class="badge mx-1 bg-info p-2">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="/dashboard/pages/review/{{ $r->id }}/edit" class="badge mx-1 bg-warning p-2">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="/dashboard/pages/review/{{ $r->id }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
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
