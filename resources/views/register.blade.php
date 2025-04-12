@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="max-w-md mx-auto mt-10">
    <form action="{{ route('register') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label>Nama</label>
            <input type="text" name="name" class="w-full border rounded px-3 py-2">
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="email" class="w-full border rounded px-3 py-2">
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password" class="w-full border rounded px-3 py-2">
        </div>
        <div>
            <label>Konfirmasi Password</label>
            <input type="password" name="password_confirmation" class="w-full border rounded px-3 py-2">
        </div>
        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Register</button>
    </form>
</div>
@endsection
