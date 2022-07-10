@extends('navbar.main')

@section('konten')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <h1 class="text-center mb-5">Login</h1>
        <div class="container mt-4">
          @if (session()->has('berhasil'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('berhasil') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
            </div>
          @endif
        
          @if (session()->has('gagal'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ session('gagal') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
            </div>
          @endif
        <form action="/login" method="POST">
          @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control @error('email') is-invaliid @enderror" id="email" name="email" value="{{ old('email') }}">
              @error('email')
                  <div class="invalid-feedback">
                        {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control @error('email') is-invaliid @enderror" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            <small>Belum Punya Akun ? <a href="/registrasi" class="text-decoration-none fw-bold">Registrasi</a></small>
          </form>
    </div>
</div>
@endsection