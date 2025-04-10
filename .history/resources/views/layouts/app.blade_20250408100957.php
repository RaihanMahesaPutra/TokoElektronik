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

  <!-- Hero -->
  <section class="bg-gradient-to-r from-green-400 to-blue-500 py-20 text-white text-center">
    <h1 class="text-5xl font-bold">Welcome to Toko Elektronik 88</h1>
    <p class="mt-4 text-lg">Temukan berbagai produk elektronik terbaik dengan harga menarik!</p>
    <form action="#" method="GET" class="mt-6 flex justify-center">
      <input type="text" name="search" placeholder="Cari produk elektronik..." 
             class="w-1/2 px-4 py-2 rounded-l-lg focus:outline-none text-gray-700">
      <button type="submit" class="bg-green-500 hover:bg-green-700 text-white px-6 py-2 rounded-r-lg">Cari</button>
    </form>
  </section>

  <!-- Produk Section -->
  <!-- Bagian "Produk Unggulan" yang kamu buat tadi tetap dipertahankan -->

  <!-- Tombol Floating untuk Search Modal -->
  <div class="fixed bottom-6 right-6">
    <button class="bg-blue-500 hover:bg-blue-600 text-white p-3 rounded-full shadow-lg" onclick="document.getElementById('search-modal').classList.remove('hidden')">
      🔍
    </button>
  </div>

  <!-- Modal Pencarian -->
  <div id="search-modal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white rounded-lg p-6 w-96 relative">
      <button class="absolute top-2 right-2 text-gray-500 hover:text-gray-800" onclick="document.getElementById('search-modal').classList.add('hidden')">✖</button>
      <h2 class="text-xl font-bold mb-4">Cari Produk</h2>
      <form action="#" method="GET">
        <input type="text" name="search" placeholder="Nama produk..." class="w-full border px-4 py-2 rounded mb-4 focus:outline-none focus:ring focus:border-blue-300">
        <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-700">Cari</button>
      </form>
    </div>
  </div>

</body>
</html>
