@extends('layouts.app')

@section('content')
<div class="min-h-screen flex flex-col justify-center items-center bg-gradient-to-br from-green-50 via-white to-green-100 py-10">
    <div class="w-full max-w-md bg-white rounded-xl shadow-lg p-8">
        <div class="flex flex-col items-center mb-6">
            <div class="h-16 w-16 rounded-full bg-green-500 flex items-center justify-center mb-2">
                <i class="bi bi-clock text-white text-3xl"></i>
            </div>
            <h1 class="text-2xl font-bold text-green-700 mb-1 text-center">Tambah Jadwal Kereta</h1>
            <a href="{{ route('schedules.index') }}" class="text-green-500 hover:underline text-sm">Kembali ke Jadwal</a>
        </div>
        <form method="POST" action="{{ route('schedules.store') }}">
            @csrf
            <div class="mb-4">
                <label for="price" class="block text-gray-700 font-semibold mb-1">Harga Tiket</label>
                <input id="price" type="number" name="price" value="{{ old('price') }}" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400">
            </div>
            <div class="mb-4">
                <label for="train_id" class="block text-gray-700 font-semibold mb-1">Kereta</label>
                <select id="train_id" name="train_id" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400">
                    <option value="">Pilih Kereta</option>
                    @foreach($trains as $train)
                        <option value="{{ $train->id }}" {{ old('train_id') == $train->id ? 'selected' : '' }}>{{ $train->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="date" class="block text-gray-700 font-semibold mb-1">Tanggal</label>
                <input id="date" type="date" name="date" value="{{ old('date') }}" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400">
            </div>
            <div class="mb-4">
                <label for="departure_time" class="block text-gray-700 font-semibold mb-1">Waktu Berangkat</label>
                <input id="departure_time" type="time" name="departure_time" value="{{ old('departure_time') }}" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400">
            </div>
            <div class="mb-6">
                <label for="arrival_time" class="block text-gray-700 font-semibold mb-1">Waktu Tiba</label>
                <input id="arrival_time" type="time" name="arrival_time" value="{{ old('arrival_time') }}" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400">
            </div>
            <button type="submit" class="btn-main w-full">Simpan</button>
        </form>
    </div>
</div>
@endsection 