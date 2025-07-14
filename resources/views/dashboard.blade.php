<!--
  bg-brown-50 bg-brown-100 bg-brown-200 bg-brown-300 bg-brown-400 bg-brown-500 bg-brown-600 bg-brown-700 bg-brown-800 bg-brown-900
  text-brown-50 text-brown-100 text-brown-200 text-brown-300 text-brown-400 text-brown-500 text-brown-600 text-brown-700 text-brown-800 text-brown-900
  border-brown-100 border-brown-200 border-brown-300 border-brown-400 border-brown-500 border-brown-600 border-brown-700 border-brown-800 border-brown-900
  bg-cream-50 bg-cream-100 bg-cream-200 bg-cream-300 bg-cream-400 bg-cream-500 bg-cream-600 bg-cream-700 bg-cream-800 bg-cream-900
  text-cream-50 text-cream-100 text-cream-200 text-cream-300 text-cream-400 text-cream-500 text-cream-600 text-cream-700 text-cream-800 text-cream-900
  bg-gold-400 bg-gold-500 bg-gold-600 text-gold-400 text-gold-500 text-gold-600 border-gold-400 border-gold-500 border-gold-600
-->
@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="gradient-bg text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-10 md:mb-0 fade-in">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Selamat datang, {{ Auth::user()->name ?? 'User' }}!</h1>
                <p class="text-xl mb-8 opacity-90">Email: <span class="font-semibold">{{ Auth::user()->email }}</span></p>
                <div class="flex space-x-4">
                    <a href="{{ route('bookings.index') }}" class="btn-main"><i class="bi bi-ticket-perforated mr-2"></i> Booking Tiket</a>
                    <a href="{{ route('tickets.index') }}" class="btn-secondary"><i class="bi bi-ticket-detailed mr-2"></i> Tiket Saya</a>
                    <a href="{{ route('schedules.index') }}" class="btn-secondary"><i class="bi bi-calendar2-week mr-2"></i> Jadwal Tiket</a>
                </div>
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
<!-- Statistik Card -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-12 z-10 relative fade-in">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center train-card transition">
            <i class="bi bi-train-front text-4xl text-blue-500 mb-2"></i>
            <div class="text-gray-700 font-semibold">Kereta</div>
            <div class="text-2xl font-bold text-gray-900">{{ \App\Models\Train::count() }}</div>
        </div>
        <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center train-card transition">
            <i class="bi bi-calendar2-week text-4xl text-purple-500 mb-2"></i>
            <div class="text-gray-700 font-semibold">Jadwal</div>
            <div class="text-2xl font-bold text-gray-900">{{ \App\Models\Schedule::count() }}</div>
        </div>
        <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center train-card transition">
            <i class="bi bi-journal-bookmark text-4xl text-pink-500 mb-2"></i>
            <div class="text-gray-700 font-semibold">Booking</div>
            <div class="text-2xl font-bold text-gray-900">{{ \App\Models\Booking::count() }}</div>
        </div>
        <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center train-card transition">
            <i class="bi bi-ticket-perforated text-4xl text-red-500 mb-2"></i>
            <div class="text-gray-700 font-semibold">Tiket</div>
            <div class="text-2xl font-bold text-gray-900">{{ \App\Models\Ticket::count() }}</div>
        </div>
    </div>
</section>
<!-- Info Section -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 fade-in">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition duration-300 text-center">
            <div class="h-16 w-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="bi bi-bolt text-blue-500 text-2xl"></i>
            </div>
            <h3 class="text-xl font-semibold text-gray-800 mb-2">Booking Instan</h3>
            <p class="text-gray-600">Pesan tiket hanya dalam beberapa klik dan dapatkan konfirmasi instan.</p>
        </div>
        <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition duration-300 text-center">
            <div class="h-16 w-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="bi bi-shield-lock text-purple-500 text-2xl"></i>
            </div>
            <h3 class="text-xl font-semibold text-gray-800 mb-2">Pembayaran Aman</h3>
            <p class="text-gray-600">Transaksi Anda dilindungi dengan keamanan terbaik.</p>
        </div>
        <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition duration-300 text-center">
            <div class="h-16 w-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="bi bi-headset text-green-500 text-2xl"></i>
            </div>
            <h3 class="text-xl font-semibold text-gray-800 mb-2">Dukungan 24/7</h3>
            <p class="text-gray-600">Tim CS kami siap membantu Anda kapan saja.</p>
        </div>
    </div>
</section>
@endsection
