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
                <li><a href="#" class="text-gray-700 hover:text-green-500">App</a></li>
                <li><a href="#" class="text-gray-700 hover:text-green-500">About</a></li>
                <li><a href="#" class="text-gray-700 hover:text-green-500">Contact</a></li>
            </ul>
        </div>
    </nav>

    @yield('content')

</body>
</html>
