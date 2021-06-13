@extends('layout.master')
@section('title', 'Login | SPK Coffee')
@section('konten')
<form class="container animated fadeInUp" method="POST">
    <div class="row justify-content-center mt-4 mb-2">
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <p class="card-title h4 mb-4 text-center">Login</p>
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
                        <label for="password">password</label>
                        <input class="form-control" type="password" name="password" id="password">
                        @error('password')
                        <div>
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button class="btn btn-primary btn-block my-4" type="submit">login</button>
                    <p>Belum Punya Akun? <a href="{{route('login')}}">Daftar</a></p>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
