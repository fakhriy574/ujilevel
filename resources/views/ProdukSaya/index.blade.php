@extends('layouts.master')

@section('content')
<div class="container">
    <ul class="list-group list-group-horizontal">
        <li class="list-group-item">
            <a href="{{ route('product_saya') }}" class="text-dark">
                Semua
            </a>
        </li>
        @foreach ($category as $item)
        <li class="list-group-item">
            <a href="{{ route('product_saya', ['category' => $item->id]) }}" class="text-dark">
                {{ $item->title }}
            </a>
        </li>
        @endforeach
    </ul>

    <div class="row mt-4">
        @foreach ($product as $item)
        <div class="col-12 col-md-4 mb-4">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset($item->file) }}" class="card-img-top" alt="{{ $item->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->title }}</h5>
                    <p class="card-text">{{ $item->description }}</p>
                    <b class="body2 text-black mt-2">
                        Rp {{ number_format($item->price - $item->discount) }}
                        @if($item->discount > 0)
                        <del>Rp {{ number_format($item->price) }}</del>
                        @endif
                    </b>
                    <br>
                    <a href="https://api.whatsapp.com/send?phone=62895352074525&text=hallo saya ingin membeli produk {{$item->title}}" class="btn btn-primary mt-2">Order WhatsApp</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
