@extends('dashboard.layout.main')

@section('container')
<div class="row my-5">
    <div class="col-lg-10">
        <h2 class="mb-4">Create Stuff</h2>
        <form action="/dashboard/update/{{ $penjualan->slug }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="form-group mb-3">
                <label for="title">Nama Barang</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="name" value="{{ old('name', $penjualan->name) }}" autofocus>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="slug">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" placeholder="slug" value="{{ old('slug',$penjualan->slug) }}">
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="harga">Harga Barang</label>
                <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" placeholder="harga" value="{{ old('harga',$penjualan->harga) }}">
                @error('harga')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Post Image</label>
                <input type="hidden" name="oldImage" value="{{ $penjualan->image }}">
                @if ($penjualan->image)
                    <img class="img-preview img-fuild mb-3 col-sm-5 d-block" src="{{ asset('storage/' . $penjualan->image) }}">
                @else
                    <img src="https://source.unsplash.com/1200x500?{{ $penjualan->category->name }}" class="img-preview img-fuild mb-3 col-sm-5">
                @endif
        
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
            <div class="form-group mb-3">
                <label for="category">Category</label>
                <select class="form-control" id="category" name="category_id">
                    @foreach ($category as $c)
                        <option value="{{ $c->id }}">{{ $c->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <input id="body" class="@error('body') is-invalid @enderror" type="hidden" name="body" value="{{ old('body', $penjualan->body) }}">
                <trix-editor input="body"></trix-editor>
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<script>

    const title = document.querySelector('#name');
    const slug = document.querySelector('#slug');

    title.addEventListener('keyup', function(){
    slug.value = title.value.toLowerCase().replace(/ /g, '-');
    });

    function previewImage() {
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
    };
}
</script>
@endsection