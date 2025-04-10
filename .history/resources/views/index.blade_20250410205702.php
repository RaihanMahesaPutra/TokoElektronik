@extends('layouts.app')

@section('title', 'Beranda | Toko Elektronik 88')

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-green-400 to-blue-500 py-20 text-white text-center">
        <h1 class="text-5xl font-bold">Welcome to Toko Elektronik 88</h1>
        <p class="mt-4 text-lg">Temukan berbagai produk elektronik terbaik dengan harga menarik!</p>
        <form action="#" method="GET" class="mt-6 flex justify-center">
            <input type="text" name="search" placeholder="Cari produk elektronik..." 
                   class="w-1/2 px-4 py-2 rounded-l-lg focus:outline-none text-gray-700">
            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white px-6 py-2 rounded-r-lg">Cari</button>
        </form>
    </section>    

    <!-- Produk Unggulan -->
    <section class="font-sans py-16">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center mb-8">Produk Unggulan</h2>

            @include('partials.produk-kulkas')
            @include('partials.produk-mesin-cuci')

        </div>
    </section>
@endsection
