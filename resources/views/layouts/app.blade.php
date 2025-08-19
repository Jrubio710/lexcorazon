<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Lex Corazón')</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
</head>
<body class="bg-neutral-900 text-white font-sans overflow-x-hidden">

    <!-- Navbar -->
    <nav class="fixed top-0 left-0 w-full bg-neutral-900 shadow-md z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
            <a href="{{ route('welcome') }}" class="text-2xl font-bold text-yellow-500 hover:text-yellow-400 transition">
                LexCorazon
            </a>
            <ul class="flex space-x-8">
                <li><a href="#services" class="hover:text-yellow-500 transition">Servicios</a></li>
                <li><a href="#portfolio" class="hover:text-yellow-500 transition">Portfolio</a></li>
                <li><a href="#contact" class="hover:text-yellow-500 transition">Contacto</a></li>
            </ul>
        </div>
    </nav>

    <!-- Contenido -->
    <main class="pt-20">
        @yield('content')
    </main>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
    @stack('scripts')
</body>
</html>
