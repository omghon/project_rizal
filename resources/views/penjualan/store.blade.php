
@extends('navbar.main')

@section('konten')
@if (session()->has('berhasil'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{ session('berhasil') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
</div>
@endif
{{-- corousel --}}
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" >
        <img src="/image/gambar1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/image/gambar2.jpg" class="d-block  w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/image/gambar3.jpg" class="d-block  w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
{{-- end corousel --}}

{{-- card --}}
<div class="row">
  <h2 class="fw-bold text-center">ALL RECENT</h2>
  @foreach ($stores as $store)
    <div class="col-md-4 my-5">
      <div class="card" style="width: 18rem;">
        @if ($store->image)
          <img src="{{ asset('storage/' . $store->image) }}" class="card-img-top" alt="...">

        @else
        <img src="https://source.unsplash.com/1200x500?{{ $store->category->name }}" class="card-img-top" alt="...">

        @endif
        <div class="card-body">
          <h5 class="card-title">{{ $store->name }}</h5>
          <p class="card-text">{{ $store->category->name }} In {{ $store->created_at->diffForHumans() }}</p>
          <p class="fs-4 fw-bold">{{ $store->harga }}</p>
          <a href="/buy/{{ $store->slug }}" class="btn btn-primary">Desc</a>
        </div>
      </div>
    </div>
    @endforeach
</div>
{{-- end card --}}

@endsection
