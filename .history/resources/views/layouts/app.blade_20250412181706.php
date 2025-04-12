<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Toko Elektronik 88')</title>
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
        {{-- Navbar --}}
        @include('partials.navbar')

        {{-- Konten utama halaman --}}
        <main class="pt-32 min-h-screen">
            @yield('content')
        </main>

        {{-- Footer --}}
        @include('partials.footer')
    </div>

    {{-- Script --}}
    <script src="{{ asset('js/hide-loader.js') }}"></script>
    <script src="{{ asset('js/slide-banner.js') }}"></script>
    <script src="{{ asset('js/navbar-kategori.js') }}"></script>
</body>
</html>
