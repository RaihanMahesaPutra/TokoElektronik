<nav class="bg-white shadow-md fixed top-0 w-full z-50 border-b p-3">
    <div class="max-w-7xl mx-auto px-4 md:px-6 py-3 flex items-center justify-between">
      <div class="text-2xl font-bold text-blue-600 tracking-wide">TokoElektronik</div>
      <div class="relative">
        <button onclick="toggleKategori()" class="flex items-center gap-2 text-gray-700 font-medium hover:text-blue-600 transition">
          <span>Kategori</span>
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
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

      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="text-red-600 hover:underline">
            Logout
        </button>
      </form>

      <!-- Login & Sign Up -->
      <div class="flex items-center space-x-4">
        <a href="{{ route('login') }}" class="px-4 py-1 border border-blue-500 text-blue-500 rounded-full hover:bg-blue-500 hover:text-white transition">Login</a>
        <a href="{{ route('register') }}" class="px-4 py-1 bg-blue-500 text-white rounded-full hover:bg-blue-600 transition">Sign Up</a>
      </div>
    </div>

    <div class="bg-white border-t0 py-2">
      <div class="max-w-7xl mx-auto px-4 md:px-6">
        <div class="flex justify-end">
          <div class="flex items-center bg-gray-100 px-5 py-1 rounded-full w-full h-10 md:w-80">
            <input type="text" placeholder="Cari Produk" class="bg-transparent outline-none w-full text-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M16 10a6 6 0 11-12 0 6 6 0 0112 0z" />
            </svg>
          </div>
        </div>
      </div>
    </div>
</nav>
