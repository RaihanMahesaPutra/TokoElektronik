@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="bg-yellow-100 py-20">
    <div class="container mx-auto flex flex-col md:flex-row items-center px-6">
        <div class="md:w-1/2 text-center md:text-left">
            <h1 class="text-4xl font-bold text-green-700">Welcome to Toko Elektronik</h1>
            <p class="mt-4 text-gray-600">Temukan berbagai produk elektronik terbaik dengan harga menarik!</p>
            <a href="#" class="mt-6 inline-block bg-green-500 text-white px-6 py-2 rounded-lg">Join Now</a>
        </div>
        <div class="md:w-1/2">
            <img src="{{ asset('storage/products/sample-product.png') }}" alt="Produk Elektronik" class="mx-auto">
        </div>
    </div>
</section>

@endsection
