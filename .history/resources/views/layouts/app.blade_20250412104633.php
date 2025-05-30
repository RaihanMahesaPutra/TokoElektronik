<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Elektronik 88</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="font-sans bg-white-100">
  <div id="loader" class="fixed inset-0 flex items-center justify-center bg-white z-50">
    <div class="flex space-x-2">
      <div class="w-5 h-5 bg-blue-500 rounded-full animate-bounce"></div>
      <div class="w-5 h-5 bg-green-500 rounded-full animate-bounce [animation-delay:0.1s]"></div>
      <div class="w-5 h-5 bg-red-500 rounded-full animate-bounce [animation-delay:0.2s]"></div>
    </div>
  </div>
  <div id="main-content" class="hidden">
    <nav class="bg-white/90 backdrop-blur-md shadow-md fixed top-0 w-full z-50 border-b border-gray-200">
      <div class="max-w-7xl mx-auto px-4 md:px-6 py-3 flex items-center justify-between">
    
        <!-- Logo -->
        <div class="text-2xl font-bold text-blue-600 tracking-wide">TokoElektronik</div>
    
        <!-- Kategori Dropdown -->
        <div class="relative">
          <button onclick="toggleKategori()" class="flex items-center gap-2 text-gray-700 font-medium hover:text-blue-600 transition">
            <span>Kategori</span>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
    
          <!-- Dropdown -->
          <div id="dropdownKategori" class="hidden absolute top-full left-0 bg-white shadow-xl rounded-lg mt-2 w-64 z-50 max-h-96 overflow-y-auto border">
            <ul class="divide-y divide-gray-100">
              <li class="px-4 py-2 hover:bg-blue-50 cursor-pointer">📺 TV</li>
              <li class="px-4 py-2 hover:bg-blue-50 cursor-pointer">❄️ Air Conditioner</li>
              <li class="px-4 py-2 hover:bg-blue-50 cursor-pointer">🧊 Kulkas</li>
              <li class="px-4 py-2 hover:bg-blue-50 cursor-pointer">🧺 Mesin Cuci</li>
              <li class="px-4 py-2 hover:bg-blue-50 cursor-pointer">🏠 Home Appliance</li>
              <li class="px-4 py-2 hover:bg-blue-50 cursor-pointer">👨‍🍳 Kitchen Major</li>
              <li class="px-4 py-2 hover:bg-blue-50 cursor-pointer">🍽️ Kitchen Small</li>
              <li class="px-4 py-2 hover:bg-blue-50 cursor-pointer">🏢 HOREKA</li>
              <li class="px-4 py-2 hover:bg-blue-50 cursor-pointer">🛠️ JASA</li>
            </ul>
          </div>
        </div>
    
        <!-- Menu Tengah -->
        <ul class="hidden md:flex space-x-6 font-medium text-gray-700">
          <li><a href="#" class="hover:text-blue-500 transition">Home</a></li>
          <li><a href="#" class="hover:text-blue-500 transition">Shop</a></li>
          <li><a href="#" class="hover:text-blue-500 transition">Kontak</a></li>
        </ul>
    
        <!-- Search dan Auth -->
        <div class="flex items-center space-x-4">
          <input type="text" placeholder="Cari..." class="hidden md:block w-40 px-3 py-1 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-400 focus:outline-none text-sm">
          <a href="#" class="px-4 py-1 border border-blue-500 text-blue-500 rounded-full hover:bg-blue-500 hover:text-white transition">Login</a>
          <a href="#" class="px-4 py-1 bg-blue-500 text-white rounded-full hover:bg-blue-600 transition">Sign Up</a>
        </div>
    
      </div>
    </nav>    

    <div id="promo" class="opacity-0 translate-y-10 transition-all duration-1000">
      <img src="/images/banner1.jpg" class="w-full">
      <img src="/images/banner.png" class="w-full">
    </div>

    <section class="bg-gradient-to-r from-green-400 to-blue-500 py-20 pt-24 text-white text-center">
        <h1 class="text-5xl font-bold">Welcome to Toko Elektronik 88</h1>
        <p class="mt-4 text-lg">Temukan berbagai produk elektronik terbaik dengan harga menarik!</p>
        <form action="#" method="GET" class="mt-6 flex justify-center">
            <input type="text" name="search" placeholder="Cari produk elektronik..." 
                   class="w-1/2 px-4 py-2 rounded-l-lg focus:outline-none text-gray-700">
            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white px-6 py-2 rounded-r-lg">Cari</button>
        </form>
    </section>    

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
    
    <footer class="bg-[#002f47] text-white pt-10 pb-6 px-6">
      <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-10 text-sm border-b border-gray-600 pb-8">
    
        <!-- Logo & Lokasi -->
        <div>
          <p class="text-gray-300 text-lg">
            Jl. RezaAditiya No.5 km 5, Penumping, Laweyan, Surakarta
          </p>
          <a href="#" class="text-green-400 hover:underline block mt-2 text-lg">Google Map</a>
          <p class="mt-4 font-semibold text-white text-lg">Buka setiap hari:</p>
          <p class="text-gray-300 text-lg">Senin – Minggu: 09:00 – 21:30</p>
        </div>
    
        <!-- My Account -->
        <div>
          <h2 class="text-white font-semibold mb-3 text-2xl">My Account</h2>
          <ul class="space-y-2">
            <li><a href="#" class="hover:text-green-400 transition">&rsaquo; My orders</a></li>
            <li><a href="#" class="hover:text-green-400 transition">&rsaquo; My returns</a></li>
            <li><a href="#" class="hover:text-green-400 transition">&rsaquo; My information</a></li>
            <li><a href="#" class="hover:text-green-400 transition">&rsaquo; Email preferences</a></li>
          </ul>
        </div>
    
        <!-- Customer Service -->
        <div>
          <h2 class="text-white font-semibold mb-3 text-2xl">Customer Service</h2>
          <ul class="space-y-2">
            <li><a href="#" class="hover:text-green-400 transition">&rsaquo; Pembayaran</a></li>
            <li><a href="#" class="hover:text-green-400 transition">&rsaquo; FAQ</a></li>
            <li><a href="#" class="hover:text-green-400 transition">&rsaquo; Lokasi Toko</a></li>
            <li><a href="#" class="hover:text-green-400 transition">&rsaquo; Kebijakan Privasi</a></li>
          </ul>
        </div>
    
        <!-- Contact -->
        <div>
          <h2 class="text-white font-semibold mb-3 text-2xl">Contact</h2>
          <ul class="space-y-2">
            <li><a href="#" class="hover:text-green-400 transition">&rsaquo; About us</a></li>
            <li><a href="#" class="hover:text-green-400 transition">&rsaquo; Services</a></li>
            <li><a href="#" class="hover:text-green-400 transition">&rsaquo; Blog</a></li>
            <li><a href="#" class="hover:text-green-400 transition">&rsaquo; Contact</a></li>
          </ul>
        </div>
      </div>
    
      <!-- Footer Bottom -->
      <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between pt-6 text-sm text-gray-400">
        <p>&copy; 2025 Toko Elektronik. All rights reserved.</p>
        <div class="flex space-x-4 mt-4 md:mt-0">
          <a href="#" class="hover:text-green-400 transition">
            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M22 12..."/></svg>
          </a>
          <a href="#" class="hover:text-green-400 transition">
            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M18.9 3.1..."/></svg>
          </a>
          <a href="#" class="hover:text-green-400 transition">
            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M16 8a6 6 0 11-12 0..."/></svg>
          </a>
        </div>
      </div>
    </footer>
  </div>
      
  <script src="js/hide-loader.js"></script> 
  <script src="js/navbar-kategori.js"></script> 
  
</body>
</html>