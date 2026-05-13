@props(['app'])

<a href="{{ $app->url }}" target="_blank" class="group flex flex-col bg-white border border-gray-100 rounded-2xl p-5 hover:border-corporate-green hover:shadow-xl transition-all duration-300 relative overflow-hidden h-full">
    <div class="absolute -right-6 -top-6 bg-corporate-green/5 w-24 h-24 rounded-full group-hover:scale-150 transition-transform duration-500"></div>
    
    <div class="flex items-start justify-between mb-4">
        <div class="w-14 h-14 bg-white flex items-center justify-center rounded-xl border-2 border-gray-200 shadow-sm p-2">
            @if($app->icon)
                <img src="{{ $app->icon }}" alt="{{ $app->name }}" class="w-9 h-9 object-contain">
            @else
                <svg class="w-7 h-7 text-corporate-green" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 002.25-2.25V6a2.25 2.25 0 00-2.25-2.25H6A2.25 2.25 0 003.75 6v2.25A2.25 2.25 0 006 10.5zm0 9.75h2.25A2.25 2.25 0 0010.5 18v-2.25a2.25 2.25 0 00-2.25-2.25H6a2.25 2.25 0 00-2.25 2.25V18A2.25 2.25 0 006 20.25zm9.75-9.75H18a2.25 2.25 0 002.25-2.25V6A2.25 2.25 0 0018 3.75h-2.25A2.25 2.25 0 0013.5 6v2.25a2.25 2.25 0 002.25 2.25z"></path></svg>
            @endif
        </div>
        @if($app->category)
            <span class="px-2.5 py-1 bg-gray-100 text-gray-600 text-xs font-medium rounded-full z-10">{{ $app->category }}</span>
        @endif
    </div>

    <h3 class="font-bold text-gray-900 text-lg mb-1 group-hover:text-corporate-green transition-colors leading-tight relative z-10">{{ $app->name }}</h3>
    <p class="text-sm text-gray-500 line-clamp-2 mt-1 mb-4 flex-grow relative z-10">{{ $app->description ?? 'Tidak ada deskripsi' }}</p>
    
    <div class="mt-auto pt-4 border-t border-gray-50 flex items-center justify-between text-sm font-medium text-corporate-green relative z-10">
        <span>Buka Link</span>
        <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
    </div>
</a>
