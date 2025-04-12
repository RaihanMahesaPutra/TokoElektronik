@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="max-w-md mx-auto mt-10">
    <form action="{{ route('login') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label>Email</label>
            <input type="email" name="email" class="w-full border rounded px-3 py-2">
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password" class="w-full border rounded px-3 py-2">
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Login</button>
    </form>
</div>
@endsection
