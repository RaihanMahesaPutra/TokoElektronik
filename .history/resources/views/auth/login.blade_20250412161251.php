@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div id="login-modal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white p-6 rounded-lg shadow-lg w-80">
      <h2 class="text-xl font-bold mb-4 text-center">Login</h2>
      <form action="#" method="POST">
        <input type="email" placeholder="Email" class="w-full mb-3 px-4 py-2 border rounded-lg">
        <input type="password" placeholder="Password" class="w-full mb-4 px-4 py-2 border rounded-lg">
        <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white py-2 rounded-lg">Login</button>
      </form>
      <p class="text-sm text-center mt-4">Belum punya akun? <button onclick="showRegister()" class="text-blue-500 hover:underline">Daftar</button></p>
      <button class="mt-4 text-gray-500 hover:text-gray-700 block mx-auto" onclick="closeModal('login-modal')">Tutup</button>
    </div>
  </div>
@endsection
