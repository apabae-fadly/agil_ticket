@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="gradient-bg text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-10 md:mb-0 fade-in">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Pemesanan Tiket</h1>
                <p class="text-xl mb-8 opacity-90">Kelola dan lihat riwayat pemesanan tiket kereta kamu!</p>
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
<!-- Booking Table Section -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-12 z-10 relative fade-in">
    <div class="overflow-x-auto bg-white rounded-xl shadow-lg p-6 mt-4">
        <table class="min-w-full border rounded">
            <thead class="bg-pink-100">
                <tr>
                    <th class="py-2 px-4 border">Nama Pemesan</th>
                    <th class="py-2 px-4 border">Kereta</th>
                    <th class="py-2 px-4 border">Jadwal</th>
                    <th class="py-2 px-4 border">Status</th>
                    <th class="py-2 px-4 border">Aksi</th>
                    @if(Auth::check() && Auth::user()->role === 'admin')
                    <th class="py-2 px-4 border">Aksi Admin</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @forelse($bookings as $booking)
                @if(auth()->user()->IsAdmin() || $booking->user_id == auth()->id())
                <tr class="hover:bg-pink-50">
                    <td class="py-2 px-4 border">{{ $booking->user->name ?? '-' }}</td>
                    <td class="py-2 px-4 border font-semibold text-pink-700">{{ $booking->schedule && $booking->schedule->train ? $booking->schedule->train->name : '-' }}</td>
                    <td class="py-2 px-4 border text-sm">
                        @if($booking->schedule)
                            <div><span class="font-semibold">{{ \App\Helpers\ValidationHelper::formatTanggal($booking->schedule->date) }}</span></div>
                            <div>Berangkat: <span class="font-semibold">{{ \App\Helpers\ValidationHelper::formatWaktu($booking->schedule->departure_time) }}</span></div>
                            <div>Tiba: <span class="font-semibold">{{ \App\Helpers\ValidationHelper::formatWaktu($booking->schedule->arrival_time) }}</span></div>
                        @else
                            -
                        @endif
                    </td>
                    <td class="py-2 px-4 border">{{ $booking->status }}</td>
                    <td class="py-2 px-4 border">
                        <a href="{{ route('bookings.show', $booking->id) }}" class="btn-secondary">Detail</a>
                    </td>
                    @if(Auth::check() && Auth::user()->role === 'admin')
                    <td class="py-2 px-4 border">
                        <a href="{{ route('bookings.edit', $booking->id) }}" class="btn-main mr-2">Edit</a>
                        <form action="{{ route('bookings.konfirmasiPembayaran', $booking->id) }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="btn-secondary" onclick="return confirm('Konfirmasi pembayaran booking ini?')">Konfirmasi Pembayaran</button>
                        </form>
                    </td>
                    @endif
                </tr>
                @endif
                @empty
                <tr><td colspan="5" class="text-center py-4">Belum ada data booking.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</section>
@endsection 