<x-layout>
    <div class="mb-8">
        <h2 class="text-3xl font-bold text-gray-900">BRM Quick Access</h2>
        <p class="text-gray-500 mt-2">Akses seluruh sistem operasional dan informasi rutin Board Of Regional Management.</p>
    </div>

    <!-- Toolbar: Search & Filter -->
    <div class="bg-white p-4 rounded-2xl border border-gray-100 shadow-sm mb-8">
        <form method="GET" action="{{ route('brm-access') }}" class="flex flex-col md:flex-row gap-4">
            <div class="flex-1 relative">
                <svg class="w-5 h-5 absolute left-3 top-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari nama aplikasi..." class="w-full pl-10 pr-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl focus:border-corporate-green focus:ring focus:ring-corporate-green/20 outline-none transition-all">
            </div>
            
            <div class="w-full md:w-64">
                <select name="category" onchange="this.form.submit()" class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl focus:border-corporate-green focus:ring focus:ring-corporate-green/20 outline-none transition-all text-gray-700">
                    <option value="">Semua Kategori</option>
                    @foreach($categories as $cat)
                        <option value="{{ $cat->category }}" {{ request('category') == $cat->category ? 'selected' : '' }}>
                            {{ $cat->category }}
                        </option>
                    @endforeach
                </select>
            </div>
            
            <button type="submit" class="px-6 py-2.5 bg-corporate-green hover:bg-emerald-600 text-white font-medium rounded-xl transition-colors shadow-sm">
                Cari
            </button>
            @if(request()->filled('search') || request()->filled('category'))
                <a href="{{ route('brm-access') }}" class="px-6 py-2.5 bg-gray-100 hover:bg-gray-200 text-gray-700 font-medium rounded-xl transition-colors text-center shadow-sm">
                    Reset
                </a>
            @endif
        </form>
    </div>

    <!-- Application Grid -->
    @if($applications->count() > 0)
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach($applications as $app)
                <x-app-card :app="$app" />
            @endforeach
        </div>
    @else
        <div class="text-center py-16 bg-white rounded-2xl border border-gray-100 shadow-sm">
            <svg class="w-16 h-16 mx-auto text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
            <h3 class="text-lg font-medium text-gray-900">Aplikasi Tidak Ditemukan</h3>
            <p class="text-gray-500 mt-1">Coba gunakan kata kunci atau kategori yang berbeda.</p>
        </div>
    @endif
</x-layout>
