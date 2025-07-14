@extends('layouts.app')

@section('content')
<div class="min-h-screen flex flex-col justify-center items-center bg-gradient-to-br from-blue-50 via-white to-blue-100 py-10">
    <div class="w-full max-w-md bg-white rounded-xl shadow-lg p-8">
        <div class="flex flex-col items-center mb-6">
            <div class="h-16 w-16 rounded-full bg-blue-500 flex items-center justify-center mb-2">
                <i class="bi bi-train-front text-white text-3xl"></i>
            </div>
            <h1 class="text-2xl font-bold text-blue-700 mb-1 text-center">Tambah Kereta</h1>
        </div>
        <form method="POST" action="{{ route('trains.store') }}">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-semibold mb-1">Nama Kereta</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <div class="mb-4">
                <label for="type" class="block text-gray-700 font-semibold mb-1">Tipe</label>
                <input id="type" type="text" name="type" value="{{ old('type') }}" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <div class="mb-6">
                <label for="seat_count" class="block text-gray-700 font-semibold mb-1">Jumlah Kursi</label>
                <input id="seat_count" type="number" name="seat_count" value="{{ old('seat_count') }}" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <button type="submit" class="btn-main w-full">Simpan</button>
        </form>
    </div>
</div>
@endsection 