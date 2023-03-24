@extends('layouts.master')
@section('title', 'Cart')
@section('content')
    <div class="d-flex row gap-4 justify-content-center">
        @foreach ($carts as $cart)
            <div class="col-3 mt-2 mb-1">
                <div class="card" style="min-width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $cart->product->name }}</h5>
                        <p class="card-text my-1">Category: {{ $cart->product->name }}</p>
                        <p class="card-text my-1">Description: {{ $cart->product->description }}</p>
                        <p class="card-text text-muted  my-1">Price: {{ $cart->product->price }}</p>
                        <p class="card-text text-muted  my-1">Qty: {{ $cart->qty }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
