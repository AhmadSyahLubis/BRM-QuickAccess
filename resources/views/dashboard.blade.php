<x-layout>
    <div class="mb-8">
        <h2 class="text-3xl font-bold text-gray-900">Welcome Back!</h2>
        <p class="text-gray-500 mt-2">Board Of Regional Management Quick Access Portal</p>
    </div>

    <!-- Statistics -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
        <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm flex items-center">
            <div class="w-14 h-14 bg-corporate-green/10 rounded-full flex items-center justify-center mr-4 text-corporate-green">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
            </div>
            <div>
                <p class="text-sm text-gray-500 font-medium">Total Aplikasi BRM</p>
                <p class="text-3xl font-bold text-gray-900">{{ $brmCount }}</p>
            </div>
        </div>

        <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm flex items-center">
            <div class="w-14 h-14 bg-blue-50 rounded-full flex items-center justify-center mr-4 text-blue-500">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
            </div>
            <div>
                <p class="text-sm text-gray-500 font-medium">Total AI Tools</p>
                <p class="text-3xl font-bold text-gray-900">{{ $aiCount }}</p>
            </div>
        </div>
    </div>

    <!-- Shortcuts -->
    <div class="mb-8">
        <h3 class="text-xl font-bold text-gray-900 mb-4">Shortcut AI Tools</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($shortcuts as $app)
                <x-app-card :app="$app" />
            @endforeach
        </div>
    </div>
</x-layout>
