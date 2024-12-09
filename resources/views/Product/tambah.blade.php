@extends('layouts.master')
@section('content')
<div class="card shadow mb-4">
    <div class="card-body">
        <h2>Tambah Produk</h2>
        @if ($errors)
        @foreach ($errors->all() as $item)
        <p class="text-danger"> {{ $item }}</p>
        @endforeach
        @endif

        <form class="user" action="{{ route('product.aksi_tambah') }}" enctype="multipart/form-data" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" name="title" id="title" class="form-control form-control-user"
                    placeholder="Masukkan judul">
            </div>
            <div class="form-group">
                <label for="category_id">Kategori</label>
                <select name="category_id" id="category_id" class="form-control">
                    <option value="">Pilih Kategori</option>
                    @foreach($category as $item)
                    <option value="{{$item->id}}">{{$item->title}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="price">Harga</label>
                <input type="number" name="price" id="price" class="form-control form-control-user"
                    placeholder="Masukkan harga">
            </div>
            <div class="form-group">
                <label for="discount">Diskon</label>
                <input type="number" name="discount" id="discount" class="form-control form-control-user"
                    placeholder="Masukkan diskon">
            </div>
            <div class="form-group">
                <label for="description">Deskripsi</label>
                <textarea name="description" id="description" class="form-control editor"
                    placeholder="Masukkan deskripsi" cols="30" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="file">File</label>
                <input type="file" name="file" id="file" class="form-control form-control-user"
                    placeholder="Masukkan file">
            </div>
            <div>
                <button type="submit" class="btn btn-primary btn-user">
                    Tambah
                </button>
            </div>
        </form>

    </div>
</div>
@endsection
