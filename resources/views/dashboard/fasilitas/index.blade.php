@extends('dashboard.layouts.main')

@section('container')
    <div class="card-body">
        <p class="text-right">
            <a href="/dashboard/facility/create" class="btn btn-outline-success text-center">
                <i class="fas fa-plus-circle"></i> Tambah Fasilitas Unggulan
            </a>
        </p>
        <table id="datatab" class="table table-striped table-bordered" style="width:100%;">
            <thead>
                <tr>
                    <th class="scope">#</th>
                    <th class="scope">Nama Fasilitas</th>
                    <th class="scope">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($fasilitas as $f)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $f->name }}</td>
                        <td>
                            <a href="/dashboard/facility/{{ $f->slug }}" class="badge mx-1 bg-info p-2">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="/dashboard/facility/{{ $f->slug }}/edit" class="badge mx-1 bg-warning p-2">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="/dashboard/facility/{{ $f->slug }}" method="POST" class="d-inline">
                                <input type="hidden" name="oldImage" value="{{ $f->image }}">
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
