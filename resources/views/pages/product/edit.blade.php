@extends('layouts.default')

@section('content')
<div class="card">
    <div class="card-header">
        <strong>Edit Barang</strong>
    </div>
    <div class="card-body card-block">
        <form action="{{ route('product.update', $product->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="" class="form-control-label">Nama</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ? old('name') : $product->name }}">
                @error('name')
                <div class="text-muted">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="" class="form-control-label">Type</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ old('type') ? old('type') : $product->type }}">
                @error('type')
                <div class="text-muted">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="description" class="form-control-label">Deskripsi</label>
                <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror">{!! old('description') ? old('description') : $product->description !!}</textarea>
                @error('description')
                <div class="text-muted">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="" class="form-control-label">Price</label>
                <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') ? old('price') : $product->price }}">
                @error('price')
                <div class="text-muted">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="" class="form-control-label">Quantity</label>
                <input type="number" class="form-control @error('quantity') is-invalid @enderror" name="quantity" value="{{ old('quantity') ? old('quantity') : $product->quantity }}">
                @error('quantity')
                <div class="text-muted">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('script')
<script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#description'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });
</script>
@endpush