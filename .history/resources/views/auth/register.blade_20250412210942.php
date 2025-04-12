@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="max-w-md mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-2xl font-bold mb-4">Register</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="mb-4">
            <label for="name" class="block font-medium">Name</label>
            <input type="text" name="name" id="name" class="w-full border rounded p-2" required>
        </div>
        <div class="mb-4">
            <label for="email" class="block font-medium">Email</label>
            <input type="email" name="email" id="email" class="w-full border rounded p-2" required>
        </div>
        <div class="mb-4">
            <label for="password" class="block font-medium">Password</label>
            <input type="password" name="password" id="password" class="w-full border rounded p-2" required>
        </div>
        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Register</button>
    </form>
</div>
@endsection
