<nav class="bg-white/90 backdrop-blur-md shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20 items-center">
            <div class="flex items-center">
                <div class="flex-shrink-0 flex items-center">
                    <div class="h-10 w-10 rounded-full bg-blue-500 flex items-center justify-center text-white">
                        <i class="bi bi-train-front text-xl"></i>
                    </div>
                    <span class="ml-3 text-xl font-bold bg-gradient-to-r from-blue-500 to-purple-600 bg-clip-text text-transparent">TrainTic</span>
                </div>
                <div class="hidden md:ml-10 md:flex md:space-x-8">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="nav-link active-link inline-flex items-center px-1 pt-1 text-sm font-medium">
                        <i class="bi bi-house-door mr-2"></i> Home
                    </x-nav-link>
                    <x-nav-link :href="route('schedules.index')" :active="request()->routeIs('schedules.*')" class="nav-link text-gray-600 hover:text-blue-500 inline-flex items-center px-1 pt-1 text-sm font-medium">
                        <i class="bi bi-calendar2-week mr-2"></i> Jadwal
                    </x-nav-link>
                    <x-nav-link :href="route('bookings.index')" :active="request()->routeIs('bookings.*')" class="nav-link text-gray-600 hover:text-blue-500 inline-flex items-center px-1 pt-1 text-sm font-medium">
                        <i class="bi bi-journal-bookmark mr-2"></i> Booking
                    </x-nav-link>
                    <x-nav-link :href="route('tickets.index')" :active="request()->routeIs('tickets.*')" class="nav-link text-gray-600 hover:text-blue-500 inline-flex items-center px-1 pt-1 text-sm font-medium">
                        <i class="bi bi-ticket-perforated mr-2"></i> Tiket
                    </x-nav-link>
                    @if(Auth::check() && Auth::user()->role === 'admin')
                    <x-nav-link :href="route('trains.index')" :active="request()->routeIs('trains.*')" class="nav-link text-gray-600 hover:text-blue-500 inline-flex items-center px-1 pt-1 text-sm font-medium">
                        <i class="bi bi-train-front mr-2"></i> Atur Kereta
                    </x-nav-link>
                    <x-nav-link :href="route('schedules.create')" :active="request()->routeIs('schedules.create')" class="nav-link text-gray-600 hover:text-blue-500 inline-flex items-center px-1 pt-1 text-sm font-medium">
                        <i class="bi bi-calendar-plus mr-2"></i> Atur Jadwal
                    </x-nav-link>
                    @endif
                </div>
            </div>
            <div class="hidden md:flex items-center space-x-4">
                <button class="px-4 py-2 text-sm font-medium text-gray-700 hover:text-blue-500 transition">
                    <i class="bi bi-bell mr-1"></i> Notifikasi
                </button>
                <div class="relative">
                    <button class="flex items-center space-x-2 focus:outline-none" id="user-menu-button">
                        <span class="text-sm font-medium text-gray-700">{{ Auth::user()->name ?? 'User' }}</span>
                        <i class="bi bi-chevron-down text-xs text-gray-500"></i>
                    </button>
                    <!-- Dropdown user menu -->
                    <div class="absolute right-0 mt-2 w-40 bg-white rounded shadow-lg z-50 hidden group-hover:block" id="user-dropdown">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="block w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="-mr-2 flex items-center md:hidden">
                <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none" id="mobile-menu-button">
                    <span class="sr-only">Open main menu</span>
                    <i class="bi bi-list"></i>
                </button>
            </div>
        </div>
    </div>
    <!-- Mobile menu bisa ditambahkan di sini -->
</nav>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const userMenuBtn = document.getElementById('user-menu-button');
        const userDropdown = document.getElementById('user-dropdown');
        if (userMenuBtn && userDropdown) {
            userMenuBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                userDropdown.classList.toggle('hidden');
            });
            // Klik di luar dropdown menutup menu
            document.addEventListener('click', function(e) {
                if (!userDropdown.classList.contains('hidden')) {
                    userDropdown.classList.add('hidden');
                }
            });
            // Cegah klik di dropdown menutup menu
            userDropdown.addEventListener('click', function(e) {
                e.stopPropagation();
            });
        }
    });
</script>
