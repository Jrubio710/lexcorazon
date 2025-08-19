<div {{ $attributes->merge(['class' => 'bg-white/20 backdrop-blur-md rounded-xl p-6 hover:scale-105 transition-transform shadow-lg']) }}>
    <h2 class="text-2xl font-semibold text-white mb-2">{{ $title }}</h2>
    <p class="text-white/90">{{ $slot }}</p>
</div>
