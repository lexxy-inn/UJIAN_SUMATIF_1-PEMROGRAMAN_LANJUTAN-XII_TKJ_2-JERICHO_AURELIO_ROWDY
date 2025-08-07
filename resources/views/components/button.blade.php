<button {{ $attributes->merge(['class' => 'bg-gray-300 hover:bg-gray-400 text-black px-4 py-2 rounded']) }}>
    {{ $slot }}
</button>
