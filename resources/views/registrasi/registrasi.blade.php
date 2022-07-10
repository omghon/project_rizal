@extends('navbar.main')

@section('konten')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <h1 class="text-center mb-5">Registrasi</h1>
        <form action="/registrasi" method="POST">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Name</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" autofocus>
              @error('name')
                  <div class="invalid-feedback">
                        {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Username</label>
              <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{ old('username') }}">
              @error('username')
              <div class="invalid-feedback">
                    {{ $message }}
              </div>
          @enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
              @error('email')
              <div class="invalid-feedback">
                    {{ $message }}
              </div>
          @enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
              @error('password')
              <div class="invalid-feedback">
                    {{ $message }}
              </div>
          @enderror
            </div>
            <button type="submit" class="btn btn-primary">Registrasi</button>
            <small>Sudah Punya Akun ? <a href="/login" class="text-decoration-none fw-bold">Login</a></small>
          </form>
    </div>
</div>
@endsection