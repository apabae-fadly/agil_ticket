@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="gradient-bg text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-10 md:mb-0 fade-in">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Jadwal Kereta</h1>
                <p class="text-xl mb-8 opacity-90">Cek jadwal keberangkatan dan kedatangan kereta favoritmu!</p>
                <a href="/" class="btn-main"><i class="bi bi-house-door mr-2"></i> Kembali ke Beranda</a>
            </div>
            <div class="md:w-1/2 flex justify-center fade-in">
                <div class="relative floating">
                    <div class="absolute -inset-4 bg-white/20 rounded-full blur-xl"></div>
                    <div class="relative w-full max-w-md flex justify-center items-center">
                      <svg width="220" height="120" viewBox="0 0 220 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="20" y="50" width="180" height="40" rx="10" fill="#3b82f6"/>
                        <rect x="40" y="60" width="40" height="20" rx="4" fill="#fff"/>
                        <rect x="90" y="60" width="40" height="20" rx="4" fill="#fff"/>
                        <rect x="140" y="60" width="40" height="20" rx="4" fill="#fff"/>
                        <circle cx="50" cy="100" r="10" fill="#222"/>
                        <circle cx="170" cy="100" r="10" fill="#222"/>
                        <rect x="100" y="40" width="20" height="20" rx="4" fill="#fbbf24"/>
                      </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Jadwal Table Section -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-12 z-10 relative fade-in">
    <div class="overflow-x-auto bg-white rounded-xl shadow-lg p-6 mt-4">
        <table class="min-w-full border rounded">
            <thead class="bg-blue-100">
                <tr>
                    <th class="py-2 px-4 border">Kereta</th>
                    <th class="py-2 px-4 border">Tanggal</th>
                    <th class="py-2 px-4 border">Berangkat</th>
                    <th class="py-2 px-4 border">Tiba</th>
                    <th class="py-2 px-4 border">Harga</th>
                    @if(Auth::check() && Auth::user()->role !== 'admin')
                    <th class="py-2 px-4 border">Aksi</th>
                    @endif
                    @if(Auth::check() && Auth::user()->role === 'admin')
                    <th class="py-2 px-4 border">Aksi Admin</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach($schedules as $schedule)
                <tr class="hover:bg-blue-50">
                    <td class="py-2 px-4 border font-semibold text-blue-700">{{ $schedule->train->name ?? '-' }}</td>
                    <td class="py-2 px-4 border">{{ \App\Helpers\ValidationHelper::formatTanggal($schedule->date) }}</td>
                    <td class="py-2 px-4 border">{{ \App\Helpers\ValidationHelper::formatWaktu($schedule->departure_time) }}</td>
                    <td class="py-2 px-4 border">{{ \App\Helpers\ValidationHelper::formatWaktu($schedule->arrival_time) }}</td>
                    <td class="py-2 px-4 border font-bold">{{ \App\Helpers\ValidationHelper::formatRupiah($schedule->price) }}</td>
                    @if(Auth::check() && Auth::user()->role !== 'admin')
                    <td class="py-2 px-4 border">
                        <a href="{{ route('bookings.create', ['schedule_id' => $schedule->id]) }}" class="btn-main">Booking Tiket</a>
                    </td>
                    @endif
                    @if(Auth::check() && Auth::user()->role === 'admin')
                    <td class="py-2 px-4 border">
                        <a href="{{ route('schedules.edit', $schedule->id) }}" class="btn-secondary mr-2">Edit</a>
                        <form action="{{ route('schedules.destroy', $schedule->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-main" onclick="return confirm('Yakin hapus jadwal ini?')">Hapus</button>
                        </form>
                    </td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection 