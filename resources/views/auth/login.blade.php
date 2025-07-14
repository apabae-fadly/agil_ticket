@extends('layouts.guest')

@section('content')
<div class="w-full flex flex-col items-center">
    <div class="w-full flex flex-col items-center mb-6">
        <div class="h-16 w-16 rounded-full bg-blue-500 flex items-center justify-center mb-2">
            <i class="bi bi-train-front text-white text-3xl"></i>
        </div>
        <h1 class="text-2xl font-bold text-blue-700 mb-1">Login</h1>
        <p class="text-gray-500 text-sm mb-4">Masuk untuk memesan tiket kereta atau kelola data!</p>
    </div>
    <form method="POST" action="{{ route('login') }}" class="w-full">
        @csrf
        <div class="mb-4">
            <label for="email" class="block text-gray-700 font-semibold mb-1">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>
        <div class="mb-4">
            <label for="password" class="block text-gray-700 font-semibold mb-1">Password</label>
            <input id="password" type="password" name="password" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>
        <div class="mb-4 flex items-center justify-between">
            <div>
                <input type="checkbox" name="remember" id="remember" class="mr-1">
                <label for="remember" class="text-sm text-gray-600">Ingat saya</label>
            </div>
            <a href="{{ route('password.request') }}" class="text-sm text-blue-500 hover:underline">Lupa password?</a>
        </div>
        <button type="submit" class="btn-main w-full">Login</button>
    </form>
    <div class="mt-4 text-center text-sm text-gray-600">
        Belum punya akun? <a href="{{ route('register') }}" class="text-blue-500 font-semibold hover:underline">Daftar</a>
    </div>
</div>
@endsection
