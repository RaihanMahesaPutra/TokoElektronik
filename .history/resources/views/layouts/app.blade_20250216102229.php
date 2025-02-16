<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Elektronik</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="container mx-auto flex justify-between items-center p-4">
            <a href="#" class="text-2xl font-bold text-green-600">Toko Elektronik</a>
            <ul class="flex space-x-6">
                <li><a href="#" class="text-gray-700 hover:text-green-500">Home</a></li>
                <li><a href="#" class="text-gray-700 hover:text-green-500">Shop</a></li>
                <li><a href="#" class="text-gray-700 hover:text-green-500">Delivery</a></li>
                <li><a href="#" class="text-gray-700 hover:text-green-500">About</a></li>
                <li><a href="#" class="text-gray-700 hover:text-green-500">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-green-400 to-blue-500 py-20 text-white">
        <div class="container mx-auto text-center">
            <h1 class="text-5xl font-bold">Welcome to Toko Elektronik</h1>
            <p class="mt-4 text-lg">Temukan berbagai produk elektronik terbaik dengan harga menarik!</p>
            <a href="#" class="mt-6 inline-block bg-white text-green-600 px-6 py-2 rounded-lg font-semibold">Belanja Sekarang</a>
        </div>
    </section>

    <!-- Products Section -->
    <section class="py-16">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center mb-8">Produk Unggulan</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Product Card -->
                <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-xl transition-shadow">
                    <img src="https://via.placeholder.com/300" alt="Produk" class="w-full h-48 object-cover rounded">
                    <h3 class="text-xl font-semibold mt-4">Laptop Gaming</h3>
                    <p class="text-gray-600 mt-2">Laptop gaming dengan spesifikasi tinggi untuk pengalaman terbaik.</p>
                    <span class="block mt-4 text-green-600 font-bold">Rp 15.000.000</span>
                    <button class="mt-4 w-full bg-green-500 text-white py-2 rounded-lg hover:bg-green-600">Tambah ke Keranjang</button>
                </div>
                <!-- Product Card -->
                <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-xl transition-shadow">
                    <img src="https://via.placeholder.com/300" alt="Produk" class="w-full h-48 object-cover rounded">
                    <h3 class="text-xl font-semibold mt-4">Smartphone</h3>
                    <p class="text-gray-600 mt-2">Smartphone canggih dengan kamera terbaik di kelasnya.</p>
                    <span class="block mt-4 text-green-600 font-bold">Rp 7.500.000</span>
                    <button class="mt-4 w-full bg-green-500 text-white py-2 rounded-lg hover:bg-green-600">Tambah ke Keranjang</button>
                </div>
                <!-- Product Card -->
                <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-xl transition-shadow">
                    <img src="https://via.placeholder.com/300" alt="Produk" class="w-full h-48 object-cover rounded">
                    <h3 class="text-xl font-semibold mt-4">Headphone</h3>
                    <p class="text-gray-600 mt-2">Headphone dengan kualitas suara jernih dan bass mendalam.</p>
                    <span class="block mt-4 text-green-600 font-bold">Rp 2.000.000</span>
                    <button class="mt-4 w-full bg-green-500 text-white py-2 rounded-lg hover:bg-green-600">Tambah ke Keranjang</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6">
        <div class="container mx-auto text-center">
            <p>&copy; 2025 Toko Elektronik. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
