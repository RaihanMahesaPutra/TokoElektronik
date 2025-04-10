<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Toko Elektronik 88')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-white shadow py-4 fixed w-full z-50">
        <div class="max-w-6xl mx-auto px-4 flex items-center justify-between">
            <div class="text-xl font-bold text-gray-800">Toko Elektronik</div>

            <div class="relative">
                <button onclick="toggleKategori()" class="flex items-center gap-2 font-semibold text-gray-700 hover:text-blue-600">
                    <span>Pilih <span class="text-blue-600">Kategori</span></span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <!-- Dropdown -->
                <div id="dropdownKategori" class="hidden absolute top-full left-0 bg-white shadow-lg rounded-md mt-2 w-64 z-50 max-h-96 overflow-y-auto">
                    <ul class="divide-y divide-gray-200">
                        <li class="flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer">📺 TV</li>
                        <li class="flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer">❄️ Air Conditioner</li>
                        <li class="flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer">🧊 Kulkas</li>
                        <li class="flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer">🧺 Mesin Cuci</li>
                        <li class="flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer">🏠 Home Appliance</li>
                        <li class="flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer">👨‍🍳 Kitchen Major</li>
                        <li class="flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer">🍽️ Kitchen Small</li>
                        <li class="flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer">🏢 HOREKA</li>
                        <li class="flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer">🛠️ JASA</li>
                    </ul>
                </div>
            </div>

            <ul class="hidden md:flex space-x-6 font-medium text-gray-700">
                <li><a href="#" class="hover:text-blue-500">Home</a></li>
                <li><a href="#" class="hover:text-blue-500">Shop</a></li>
                <li><a href="#" class="hover:text-blue-500">Kontak</a></li>
            </ul>

            <div class="flex items-center space-x-3">
                <input type="text" placeholder="Cari..." class="border rounded-lg px-3 py-1 hidden md:block">
                <a href="#" class="text-gray-600 hover:text-blue-500">Login</a>
            </div>
        </div>
    </nav>

    <!-- Konten Halaman -->
    <main class="pt-24">zz
        @yield('content')
    </main>

    <!-- JS Script untuk toggle kategori -->
    <script>
        function toggleKategori() {
            const dropdown = document.getElementById('dropdownKategori');
            dropdown.classList.toggle('hidden');
        }
    </script>
</body>
</html>
