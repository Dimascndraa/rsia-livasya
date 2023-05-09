@extends('layouts.main')
@section('container')
    <link href="signin.css" rel="stylesheet">

    <div class="home container">
        <main class="form-signin w-100 mb-5">
            <div class="row justify-content-center">
                <div class="col-10 col-lg-6">

                    @if (session('success'))
                        <div class="alert mb-5 m-auto alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session('success') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if (session('loginError'))
                        <script>
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Login Gagal!',
                            })
                        </script>
                    @endif

                    <div class="card p-5 m-5" style="outline: none !important; background-color: rgba(255, 255, 255, .7);">
                        <form action="/bukan-login" method="POST" class="mb-5" autocomplete="off">
                            @csrf
                            <div class="row justify-content-center">
                                <img class="mb-4 w-25" src="../img/logo.png" alt="">
                                <h1 class="h3 mb-3 fs-1 fw-normal text-center" style="transform: scale(1.99)">
                                    <strong>Login</strong>
                                </h1>
                            </div>
                            <div class="form-floating mt-5 mb-3">
                                <input type="text" style="background-color: rgba(255, 255, 255, .8); outline: none !important" class="form-control @error('username') is-invalid @enderror"
                                    value="{{ old('username') }}" id="username" name="username" placeholder="Dimas Kasep"
                                    autofocus required>
                                <label for="username" class="fs-5">Username</label>
                                @error('username')
                                    <div class="text-danger ms-3">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-floating mb-5">
                                <input type="password" style="background-color: rgba(255, 255, 255, .8); outline: none !important" class="form-control" id="password" name="password"
                                    placeholder="Password" required>
                                <label for="password" class="fs-5">Password</label>
                            </div>
                            <button class="w-100 btn btn-lg" type="submit">Login</button>
                        </form>
                    </div>

                </div>
            </div>
        </main>
    </div>
@endsection
