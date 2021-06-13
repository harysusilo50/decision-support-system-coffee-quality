@extends('layout.master')
@section('title', 'Registrasi | SPK Coffee')
@section('konten')

<form class="container animated fadeInUp" method="POST">
    <div class="row justify-content-center mt-4 mb-2">
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <p class="card-title h4 mb-4 text-center">Registrasi</p>
                    @csrf
                    <div class="md-form mb-1">
                        <label for="username">Username</label>
                        <input class="form-control" value="{{ old('username') }}" type="text" name="username"
                            id="username">
                        @error('username')
                        <div>
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="md-form mb-1">
                        <label for="nama">Nama</label>
                        <input class="form-control" value="{{ old('nama') }}" type="text" name="nama" id="nama">
                        @error('nama')
                        <div>
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="md-form mb-1">
                        <label for="password">Password</label>
                        <input class="form-control" type="password" name="password" id="password">
                        @error('password')
                        <div>
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="md-form">
                        <label for="password_confirmation">Confirm Password</label>
                        <input class="form-control" type="password" name="password_confirmation"
                            id="password_confirmation">
                        @error('password_confirmation')
                        <div>
                            {{ $message }}
                        </div>
                        @enderror
                        <button class="btn btn-primary btn-block my-4" type="submit">Register</button>
                        <p>Sudah Punya Akun? <a href="{{route('login')}}">Login</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
