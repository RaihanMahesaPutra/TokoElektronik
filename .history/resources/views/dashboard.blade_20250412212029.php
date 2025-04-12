@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="max-w-4xl mx-auto p-6 bg-white rounded shadow">
    <h1 class="text-2xl font-bold mb-4">Selamat Datang, {{ Auth::user()->name }}!</h1>
    <p class="text-gray-700">Ini adalah halaman dashboard sederhana kamu.</p>
</div>
@endsection