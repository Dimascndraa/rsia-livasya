@extends('dashboard.layouts.main')

@section('container')
    <div class="card-body">
        <p class="text-right">
            <a href="/dashboard/user/create" class="btn btn-outline-success text-center">
                <i class="fas fa-plus-circle"></i> Tambah User
            </a>
        </p>
        <table id="datatab" class="table table-striped table-bordered" style="width:100%;">
            <thead>
                <tr>
                    <th class="scope">#</th>
                    <th class="scope">Nama</th>
                    <th class="scope">Email</th>
                    <th class="scope">Username</th>
                    <th class="scope">Role</th>
                    <th class="scope">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $u)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $u->name }}</td>
                        <td>{{ $u->email }}</td>
                        <td>{{ $u->username }}</td>
                        <td>{{ $u->role }}</td>
                        <td>
                            <a href="/dashboard/user/{{ $u->id }}" class="badge mx-1 bg-info p-2">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="/dashboard/user/{{ $u->id }}/edit" class="badge mx-1 bg-warning p-2">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="/dashboard/user/{{ $u->id }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <input type="hidden" name="oldImage" value="{{ $u->image }}">
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
