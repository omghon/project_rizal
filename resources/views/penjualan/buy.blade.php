@extends('navbar.main')

@section('konten')
<div class="row mt-5">
    <div class="col-lg-8">
        @if ($penjualan->image)
        <img src="{{ asset('storage/' . $penjualan->image) }}" class="card-img-top" alt="...">

        @else
        <img src="https://source.unsplash.com/1200x500?{{ $penjualan->category->name }}" class="card-img-top" alt="...">
            
        @endif  
        <h3 class="mt-4">{{ $penjualan->name }}</h3>
        <p class="mt-3 fw-bold fs-3">{{ $penjualan->harga }}</p>
        <p class="mt-3">{!! $penjualan->body !!}</p>
        <a href="/checkout/{{ $penjualan->name }}" class="btn btn-primary my-4">Buy</a>
    </div>
</div>
@endsection