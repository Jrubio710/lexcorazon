<button {{ $attributes->merge(['class' => 'px-6 py-3 bg-white text-pink-600 font-bold rounded-full shadow-lg hover:bg-pink-600 hover:text-white transition-all']) }}>
    {{ $slot }}
</button>
