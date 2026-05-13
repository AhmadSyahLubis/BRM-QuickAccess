<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BRM Quick Access Portal</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-[#f8fafc] text-corporate-dark antialiased" x-data="{ sidebarOpen: false }">

    <!-- Sidebar -->
    <x-sidebar />

    <!-- Main Content wrapper -->
    <div class="lg:ml-64 min-h-screen flex flex-col transition-all duration-300">
        
        <!-- Navbar -->
        <x-navbar />

        <!-- Page Content -->
        <main class="flex-1 p-4 lg:p-8 w-full max-w-7xl mx-auto">
            {{ $slot }}
        </main>

        <!-- Footer -->
        <footer class="mt-auto py-6 px-8 border-t border-gray-200 text-center text-sm text-gray-500">
            &copy; {{ date('Y') }} PT Perkebunan Nusantara IV Regional I. Board Of Regional Management.
        </footer>
    </div>

</body>
</html>
