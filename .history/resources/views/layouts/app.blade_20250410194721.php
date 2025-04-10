<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Elektronik 88</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center p-4">
            <a href="#" class="text-2xl font-bold text-blue-600">Toko Elektronik 88</a>
            <ul class="flex space-x-6">
                <li><a href="#" class="text-gray-500 font-semibold hover:text-cyan-400">Home</a></li>
                <li><a href="#" class="text-gray-500 font-semibold hover:text-cyan-400">Shop</a></li>
                <li><a href="#" class="text-gray-500 font-semibold hover:text-cyan-400">Delivery</a></li>
                <li><a href="#" class="text-gray-500 font-semibold hover:text-cyan-400">About</a></li>
                <li><a href="#" class="text-gray-500 font-semibold hover:text-cyan-400">Contact</a></li>
            </ul>
        </div>
    </nav>

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
    <section class="py-16">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center mb-8">Produk Unggulan</h2>

            <!-- Kategori Kulkas -->
            <div class="relative p-10 bg-cover bg-center">
                <h2 class="text-2xl font-bold text-black mb-4">Kulkas</h2>
                <div class="flex overflow-x-scroll space-x-6 pb-4">
                    <!-- Produk 1 -->
                    <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-xl transition-shadow min-w-[250px]">
                        <img src="https://media.monotaro.id/mid01/full/Perlengkapan%20Dapur%20%26%20Horeka/Alat%20Dapur/Perlengkapan%20Dapur%20Profesional/Kulkas%2C%20Lemari%20Pendingin%20Atau%20Pemanas/MODENA%20Kulkas%20Argento%20(Kulkas)/ebP103236515-1.jpg" alt="Produk" class="w-full h-48 object-cover rounded">
                        <h3 class="text-xl font-semibold mt-4">MODENA Kulkas Argento</h3>
                        <span class="block mt-4 text-green-500 font-bold">Rp 10.999.900</span>
                        <button class="mt-4 w-full bg-cyan-500 text-white py-2 rounded-lg hover:bg-blue-900">Tambah ke Keranjang</button>
                    </div>
                    <!-- Produk lainnya (Kulkas)... -->
                    <!-- Salin struktur yang sama untuk produk lainnya -->
                </div>
            </div>

            <!-- Kategori Mesin Cuci -->
            <div class="relative p-10 pt-5">
                <h2 class="text-2xl font-bold text-black mb-4">Mesin Cuci</h2>
                <div class="flex overflow-x-scroll space-x-6 pt-2 pb-4">
                    <!-- Produk 1 -->
                    <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-xl transition-shadow min-w-[250px]">
                        <img src="https://media.monotaro.id/mid01/small/Alat%20Laboratorium/Pembersihan%2C%20Sterilisasi%2C%20Pembersih%2C%20Sanitasi%2C%20Pembuangan/Pembersih%20Alat%20Kerja%2C%20Pembersih%20Ultrasonik/Mesin%20Cuci/Branson%20Ultrasonic%20Cleaner%20Bransonic/p8P108275908-1.jpg" alt="Produk" class="w-full h-48 object-cover rounded">
                        <h3 class="text-xl font-semibold mt-4">Branson Ultrasonic Cleaner Bransonic</h3>
                        <span class="block mt-4 text-green-500 font-bold">Rp 12.999.900</span>
                        <button class="mt-4 w-full bg-cyan-500 text-white py-2 rounded-lg hover:bg-blue-900">Tambah ke Keranjang</button>
                    </div>
                    <!-- Produk lainnya (Mesin Cuci)... -->
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white text-center py-6 border-t mt-10">
        <p class="text-gray-500">&copy; 2025 Toko Elektronik 88. All rights reserved.</p>
    </footer>

</body>
</html>
