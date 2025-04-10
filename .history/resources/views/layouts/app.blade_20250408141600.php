<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Elektronik</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-white shadow sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-blue-600">Toko Elektronik</h1>
            <a href="/cart" class="text-blue-600 hover:underline">Keranjang</a>
        </div>
    </nav>

    <!-- Hero -->
    <section class="bg-blue-100 py-10">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold text-gray-800 mb-2">Selamat Datang di Toko Elektronik!</h2>
            <p class="text-lg text-gray-600">Temukan berbagai produk elektronik terbaik dengan harga terjangkau.</p>
        </div>
    </section>

    <!-- Daftar Produk -->
    <section class="max-w-7xl mx-auto px-4 py-10">
        <h3 class="text-2xl font-bold text-gray-800 mb-6">Produk Unggulan</h3>

        <div class="flex overflow-x-auto space-x-6 pb-4">
            @foreach ($products as $product)
                <div class="flex-none w-72 bg-white rounded-2xl shadow-md p-4 hover:shadow-xl transition-all duration-300 ease-in-out">
                    <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="h-48 w-full object-cover rounded-xl mb-4">
                    <h4 class="text-lg font-semibold text-gray-800">{{ $product->name }}</h4>
                    <p class="text-gray-500 mb-2">Rp {{ number_format($product->price, 0, ',', '.') }}</p>

                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-xl hover:bg-blue-700 transition">
                            Tambah ke Keranjang
                        </button>
                    </form>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white shadow-inner py-6 mt-10">
        <div class="max-w-7xl mx-auto px-4 text-center text-gray-500">
            &copy; {{ date('Y') }} Toko Elektronik. All rights reserved.
        </div>
    </footer>

</body>
</html>
