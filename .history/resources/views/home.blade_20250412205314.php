@extends('layouts.app')

@section('title', 'Toko

@section('content')
<div class="relative w-full overflow-hidden max-w-5xl mx-auto m-">
    <div id="slider" class="flex transition-transform duration-500 ease-in-out">
      <img src="/images/banner1.jpg" class="w-full flex-shrink-0" alt="Promo 1">
      <img src="/images/banner2.jpg" class="w-full flex-shrink-0" alt="Promo 2">
      <img src="/images/elektronik.jpg" class="w-full flex-shrink-0" alt="Promo 3">
    </div>
    <button onclick="slideLeft()"
        class="absolute left-2 top-1/2 -translate-y-1/2 bg-white text-gray-700 rounded-full p-3 shadow-lg hover:bg-gray-200 hover:scale-110 transition-all duration-300 ease-in-out">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
    </button>
    <button onclick="slideRight()"
        class="absolute right-2 top-1/2 -translate-y-1/2 bg-white text-gray-700 rounded-full p-3 shadow-lg hover:bg-gray-200 hover:scale-110 transition-all duration-300 ease-in-out">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
    </button>
</div>   

<section class="font-sans py-16">
    <div class="container mx-auto">
        <h2 class="text-3xl font-bold text-center mb-8">Produk Unggulan</h2>
        @include('category.produk-kulkas')
        @include('category.produk-mesincuci')
    </div>
</section>
  
<div class="fixed bottom-6 right-6">
    <button class="bg-blue-500 hover:bg-blue-600 text-white p-3 rounded-full shadow-lg" onclick="document.getElementById('search-modal').classList.remove('hidden')">
      🔍
    </button>
</div>
  
<div id="search-modal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center">
    <div class="bg-white p-6 rounded-lg shadow-lg w-1/3">
        <h2 class="text-xl font-bold mb-4">Cari Produk</h2>
        <form action="#" method="GET">
            <input type="text" name="search" placeholder="Masukkan kata kunci..." class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none">
            <button type="submit" class="mt-4 w-full bg-cyan-600 hover:bg-cyan-700 text-white py-2 rounded-lg">Cari</button>
        </form>
        <button class="mt-4 text-gray-500 hover:text-gray-700" onclick="document.getElementById('search-modal').classList.add('hidden')">Tutup</button>
    </div>
</div>
@endsection
