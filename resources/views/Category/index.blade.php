@extends('layouts.master')

@section('content')
<div class="container">
    <h1 class="my-4">Kategori</h1>
    <a href="{{route('category.tambah')}}" class="btn btn-primary mb-2">Tambah Kategori</a>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Judul</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no =1;
                        @endphp
                        @foreach($category as $item)
                        <tr>
                            <td>{{$no++}} </td> <!-- Menampilkan ID produk -->
                            <td>{{$item->title}} </td> <!-- Menampilkan judul produk -->
                            <td>
                                <a href="{{route('category.aksi_edit',$item->id)}} " class="btn btn-warning">Edit</a>
                                <form action="{{route('category.aksi_hapus',$item->id)}}" method="POST" class="d-inline">
                                    @csrf
                                    <button class="btn btn-danger" type="submit">Hapus</button>
                                </form>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
