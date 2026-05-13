<nav class="bg-white border-b border-gray-100 sticky top-0 z-30 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center lg:hidden">
                <button @click="sidebarOpen = !sidebarOpen" class="text-gray-500 hover:text-corporate-green focus:outline-none">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
            
            <div class="flex justify-between items-center w-full ml-4 lg:ml-0">
                <div class="flex items-center shrink-0 gap-4">
                    <img src="{{ asset('images/holdingptpn3.png') }}" alt="Holding Logo" class="object-contain" style="height: 32px;">
                    <div class="h-6 w-px bg-gray-200"></div>
                    <img src="{{ asset('images/ptpnreg1.png') }}" alt="PTPN Logo" class="object-contain" style="height: 40px;">
                    <div class="h-6 w-px bg-gray-200"></div>
                    <img src="{{ asset('images/Danantara.png') }}" alt="Danantara Logo" class="object-contain" style="height: 32px;">
                </div>
                
                <div class="hidden sm:flex sm:items-center">
                    <div class="flex items-center px-4 py-2 bg-gray-50 rounded-full border border-gray-100" x-data="realtimeClock()">
                        <svg class="w-4 h-4 text-corporate-green mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <span class="text-sm font-medium text-gray-700" x-text="time"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('realtimeClock', () => ({
            time: '',
            init() {
                this.updateTime();
                setInterval(() => this.updateTime(), 1000);
            },
            updateTime() {
                const now = new Date();
                this.time = now.toLocaleTimeString('id-ID', { hour: '2-digit', minute: '2-digit', second: '2-digit' }) + ' WIB';
            }
        }));
    });
</script>
