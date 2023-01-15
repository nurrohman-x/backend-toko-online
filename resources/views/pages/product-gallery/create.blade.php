@extends('layouts.default')

@section('content')
<div class="card">
    <div class="card-header">
        <strong>Tambah Foto Barang</strong>
    </div>
    <div class="card-body card-block">
        <form action="{{ route('product-gallery.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="" class="form-control-label">Nama</label>
                <select name="product_id" class="form-control @error('product_id') is-invalid @enderror" id="">
                    @foreach($products as $data)
                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                    @endforeach
                </select>
                @error('product_id')
                <div class="text-muted">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="" class="form-control-label">Photo</label>
                <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" value="{{ old('photo') }}" accept="image/*">
                @error('photo')
                <div class="text-muted">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="" class="form-control-label">Is Default</label>
                <br>
                <div class="form-check">
                    <input class="form-check-input @error('is_default') is-invalid @enderror" type="radio" name="is_default" id="inlineRadio1" value="1">
                    <label class="form-check-label" for="inlineRadio1">Ya</label>
                </div>
                <div class="form-check">
                    <input checked class="form-check-input @error('is_default') is-invalid @enderror" type="radio" name="is_default" id="inlineRadio2" value="0">
                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                </div>
                @error('is_default')
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
@endpush