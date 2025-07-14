@extends('layouts.guest')

@section('content')
<div class="w-full flex flex-col items-center">
    <div class="w-full flex flex-col items-center mb-6">
        <div class="h-16 w-16 rounded-full bg-green-500 flex items-center justify-center mb-2">
            <i class="bi bi-train-front text-white text-3xl"></i>
        </div>
        <h1 class="text-2xl font-bold text-green-700 mb-1">Daftar Akun</h1>
        <p class="text-gray-500 text-sm mb-4">Buat akun untuk mulai memesan tiket kereta!</p>
    </div>
    <form method="POST" action="{{ route('register') }}" class="w-full">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-semibold mb-1">Nama Lengkap</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400">
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700 font-semibold mb-1">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400">
        </div>
        <div class="mb-4">
            <label for="password" class="block text-gray-700 font-semibold mb-1">Password</label>
            <input id="password" type="password" name="password" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400">
        </div>
        <div class="mb-4">
            <label for="password_confirmation" class="block text-gray-700 font-semibold mb-1">Konfirmasi Password</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400">
        </div>
        <button type="submit" class="btn-main w-full">Daftar</button>
    </form>
    <div class="mt-4 text-center text-sm text-gray-600">
        Sudah punya akun? <a href="{{ route('login') }}" class="text-green-500 font-semibold hover:underline">Login</a>
    </div>
</div>
@endsection
