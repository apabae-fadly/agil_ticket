@extends('layouts.app')

@section('content')
<div class="min-h-screen flex flex-col items-center bg-gradient-to-br from-blue-50 via-white to-blue-100 py-10">
    <div class="w-full max-w-2xl bg-white rounded-xl shadow-lg p-8 mb-8 flex flex-col items-center">
        <div class="h-16 w-16 rounded-full bg-blue-500 flex items-center justify-center mb-2">
            <i class="bi bi-train-front text-white text-3xl"></i>
        </div>
        <h1 class="text-2xl font-bold text-blue-700 mb-2 text-center">Daftar Kereta</h1>
        <p class="text-gray-600 text-center mb-4">Lihat dan kelola semua kereta yang tersedia di sistem.</p>
        <div class="flex space-x-4 mb-2">
            <a href="/" class="btn-secondary">Kembali ke Beranda</a>
            <a href="{{ route('trains.create') }}" class="btn-main">Tambah Kereta</a>
        </div>
    </div>
    <div class="w-full max-w-4xl bg-white rounded-xl shadow-lg p-6">
        <table class="min-w-full border rounded overflow-hidden">
            <thead class="bg-blue-100">
                <tr>
                    <th class="py-2 px-4 border">Nama</th>
                    <th class="py-2 px-4 border">Tipe</th>
                    <th class="py-2 px-4 border">Jumlah Kursi</th>
                    <th class="py-2 px-4 border">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($trains as $train)
                <tr class="hover:bg-blue-50 transition">
                    <td class="py-2 px-4 border font-semibold text-blue-700">{{ $train->name }}</td>
                    <td class="py-2 px-4 border">{{ $train->type }}</td>
                    <td class="py-2 px-4 border">{{ $train->seat_count }}</td>
                    <td class="py-2 px-4 border">
                        <a href="{{ route('trains.edit', $train->id) }}" class="btn-secondary mr-2">Edit</a>
                        <form action="{{ route('trains.destroy', $train->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-main" onclick="return confirm('Yakin hapus kereta ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center text-gray-400 py-8">Belum ada data kereta.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection 