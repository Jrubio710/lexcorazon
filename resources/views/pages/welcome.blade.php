@extends('layouts.app')

@section('title', 'Bienvenido')

@section('content')
<!-- Hero con video -->
<section class="relative h-screen flex items-center justify-center text-center overflow-hidden">
    
    <!-- Overlay oscuro -->
    <div class="absolute inset-0 bg-black/60"></div>

    <!-- LEX CORAZÓN inicial -->
    <div id="intro-text" class="relative z-10 px-6">
        <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 animate-fade-in">
            LEX CORAZON
        </h1>
        <p class="text-lg md:text-2xl text-gray-200 mb-8 max-w-2xl mx-auto">
            Una nueva forma de conectar con tus ideas, tu visión y tu futuro digital.
        </p>
    </div>

    <!-- Bloques de servicios (ocultos al inicio) -->
    <div id="services-block" class="absolute inset-0 flex items-center justify-center gap-10 hidden z-10 px-6">
        <!-- Coaching Astrológico -->
        <div class="group relative w-72 p-6 bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl shadow-lg 
                    cursor-pointer opacity-0 -translate-x-40 transition duration-1000">
            <h2 class="text-3xl font-bold text-white mb-4">Coaching Astrológico</h2>
            <p class="text-gray-200 mb-4 opacity-0 group-hover:opacity-100 transition duration-500">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur euismod.
            </p>
            <a href="#reserva" class="inline-block px-6 py-2 bg-indigo-600 text-white rounded-full shadow-lg 
                                   hover:bg-indigo-700 transition transform hover:scale-105 opacity-0 group-hover:opacity-100">
                Reservar
            </a>
        </div>

        <!-- Mentoría Creativa -->
        <div class="group relative w-72 p-6 bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl shadow-lg 
                    cursor-pointer opacity-0 translate-x-40 transition duration-1000">
            <h2 class="text-3xl font-bold text-white mb-4">Mentoría Creativa</h2>
            <p class="text-gray-200 mb-4 opacity-0 group-hover:opacity-100 transition duration-500">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur euismod.
            </p>
            <a href="#reserva" class="inline-block px-6 py-2 bg-indigo-600 text-white rounded-full shadow-lg 
                                   hover:bg-indigo-700 transition transform hover:scale-105 opacity-0 group-hover:opacity-100">
                Reservar
            </a>
        </div>
    </div>
</section>



<!-- Portfolio - preview -->
<section class="min-h-screen bg-neutral-900 text-white px-6 py-20">
    <h2 class="text-4xl font-bold mb-12 text-center" data-aos="fade-up">Nuestro Portfolio</h2>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <a href="{{ route('portfolio') }}" class="block group overflow-hidden rounded-2xl shadow-lg" data-aos="zoom-in">
            <img src="{{ asset('images/portfolio1.jpg') }}" alt="Proyecto 1" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
        </a>
        <a href="{{ route('portfolio') }}" class="block group overflow-hidden rounded-2xl shadow-lg" data-aos="zoom-in" data-aos-delay="100">
            <img src="{{ asset('images/portfolio2.jpg') }}" alt="Proyecto 2" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
        </a>
        <a href="{{ route('portfolio') }}" class="block group overflow-hidden rounded-2xl shadow-lg" data-aos="zoom-in" data-aos-delay="200">
            <img src="{{ asset('images/portfolio3.jpg') }}" alt="Proyecto 3" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
        </a>
        <a href="{{ route('portfolio') }}" class="block group overflow-hidden rounded-2xl shadow-lg" data-aos="zoom-in" data-aos-delay="300">
            <img src="{{ asset('images/portfolio4.jpg') }}" alt="Proyecto 4" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
        </a>
        <a href="{{ route('portfolio') }}" class="block group overflow-hidden rounded-2xl shadow-lg" data-aos="zoom-in" data-aos-delay="400">
            <img src="{{ asset('images/portfolio5.jpg') }}" alt="Proyecto 5" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
        </a>
        <a href="{{ route('portfolio') }}" class="block group overflow-hidden rounded-2xl shadow-lg" data-aos="zoom-in" data-aos-delay="500">
            <img src="{{ asset('images/portfolio6.jpg') }}" alt="Proyecto 6" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
        </a>
    </div>

    <div class="text-center mt-12">
        <a href="{{ route('portfolio') }}" class="inline-block px-8 py-3 bg-indigo-600 rounded-full text-white font-semibold shadow-lg hover:bg-indigo-700 transition transform hover:scale-105">
            Ver Portfolio Completo
        </a>
    </div>
</section>

<!-- Sección de transición -->
<section class="py-20 bg-white text-center">
    <h2 class="text-4xl font-bold text-gray-900 mb-6">Creamos experiencias únicas</h2>
    <p class="text-gray-600 max-w-3xl mx-auto">
        Diseño, branding y desarrollo con un enfoque fresco y contemporáneo.
    </p>
</section>

<!-- Script para animación hero -->
<script>
document.addEventListener("DOMContentLoaded", () => {
    const intro = document.getElementById("intro-text");
    const services = document.getElementById("services-block");

    if (intro && services) {
        setTimeout(() => {
            // Desvanecer LEX CORAZÓN
            intro.classList.add("opacity-0", "transition", "duration-1000");

            setTimeout(() => {
                intro.style.display = "none";
                services.classList.remove("hidden");

                const [coaching, mentoria] = services.querySelectorAll("div");
                if (coaching) {
                    coaching.classList.remove("opacity-0", "-translate-x-40");
                    coaching.classList.add("animate-slide-in-left");
                }
                if (mentoria) {
                    mentoria.classList.remove("opacity-0", "translate-x-40");
                    mentoria.classList.add("animate-slide-in-right");
                }
            }, 1000);
        }, 2500);
    }
});
</script>
@endsection
