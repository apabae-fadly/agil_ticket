<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrainTic - Premium Train Ticket Booking</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 font-sans antialiased">
    <!-- Hero Section -->
    <section class="gradient-bg text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0 fade-in">
                    <h1 class="text-4xl md:text-5xl font-bold mb-4">Selamat Datang di TrainTic</h1>
                    <p class="text-xl mb-8 opacity-90">Pesan tiket kereta dengan mudah, cepat, dan aman!</p>
                    <div class="flex space-x-4">
                        <a href="{{ route('login') }}" class="btn-main"><i class="bi bi-box-arrow-in-right mr-2"></i> Login</a>
                        <a href="{{ route('register') }}" class="btn-secondary"><i class="bi bi-person-plus mr-2"></i> Register</a>
                    </div>
                </div>
                <div class="md:w-1/2 flex justify-center fade-in">
                    <div class="relative floating">
                        <div class="absolute -inset-4 bg-white/20 rounded-full blur-xl"></div>
                        <img src="https://illustrations.popsy.co/amber/railway.svg" alt="Train illustration" class="relative w-full max-w-md">
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
</body>
</html>
