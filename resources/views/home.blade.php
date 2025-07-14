@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="gradient-bg text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-10 md:mb-0 fade-in">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Selamat Datang di TrainTic</h1>
                <p class="text-xl mb-8 opacity-90">Pesan tiket kereta dengan mudah, cepat, dan aman!</p>
                <div class="flex space-x-4">
                @auth
                    <a href="{{ route('dashboard') }}" class="btn-main"><i class="bi bi-speedometer2 mr-2"></i> Ke Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="btn-main"><i class="bi bi-box-arrow-in-right mr-2"></i> Login</a>
                    <a href="{{ route('register') }}" class="btn-secondary"><i class="bi bi-person-plus mr-2"></i> Register</a>
                @endauth
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