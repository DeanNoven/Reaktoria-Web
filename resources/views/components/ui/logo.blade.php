@props([
    'size' => 'md', // 'sm', 'md', 'lg'
    'href' => '/',
])

@php
$dimensions = match ($size) {
    'sm' => 'h-7 text-lg',
    'lg' => 'h-11 text-2xl sm:text-3xl',
    default => 'h-9 text-xl sm:text-2xl',
};

$flaskSize = match ($size) {
    'sm' => 'w-5 h-6',
    'lg' => 'w-8 h-9',
    default => 'w-6 h-7',
};
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => 'inline-flex items-center gap-1.5 group select-none']) }}>
    <!-- Reaktoria Custom Flask Logo Mark -->
    <div class="relative flex items-center font-display font-black tracking-wider text-reaktoria-cream drop-shadow-[0_2px_4px_rgba(0,0,0,0.5)]">
        <span class="text-reaktoria-cream group-hover:text-white transition-colors">REAKT</span>
        
        <!-- Flask 'O' Icon Motif (Reference 02) -->
        <span class="inline-flex items-center justify-center mx-0.5 relative">
            <svg class="{{ $flaskSize }} text-reaktoria-chemistry transition-transform duration-300 group-hover:scale-110 drop-shadow-[0_0_8px_rgba(66,169,198,0.6)]" viewBox="0 0 24 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <!-- Flask Neck & Rim -->
                <path d="M10 2H14M11 2V8L5 20C4 22 5.5 25 8 25H16C18.5 25 20 22 19 20L13 8V2" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
                <!-- Chemical Liquid Inside -->
                <path d="M7 16L9.5 11L14.5 11L17 16C17.5 17 17.5 19 16 21C15 22.5 13.5 23 12 23C10.5 23 9 22.5 8 21C6.5 19 6.5 17 7 16Z" fill="#42A9C6" fill-opacity="0.85"/>
                <!-- Liquid Surface Wave & Bubbles -->
                <circle cx="12" cy="18" r="1.5" fill="#C6E6F4"/>
                <circle cx="14.5" cy="15" r="1" fill="#C6E6F4"/>
                <circle cx="9.5" cy="16" r="0.8" fill="#C6E6F4"/>
            </svg>
        </span>

        <span class="text-reaktoria-cream group-hover:text-white transition-colors">RIA</span>
    </div>
</a>
