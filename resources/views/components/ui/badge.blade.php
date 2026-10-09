@props([
    'variant' => 'default', // 'forest', 'grass', 'sky', 'earth', 'wood', 'stone', 'roof', 'chemistry', 'gold', 'cream', 'hud', 'default'
    'size' => 'md', // 'sm', 'md'
])

@php
$baseClasses = 'inline-flex items-center gap-1.5 font-medium tracking-wide rounded select-none border transition-colors';

$variantClasses = match ($variant) {
    'forest' => 'bg-reaktoria-forest/15 border-reaktoria-forest/40 text-reaktoria-forest-dark',
    'grass' => 'bg-reaktoria-grass/15 border-reaktoria-grass/40 text-[#2B5E20]',
    'sky' => 'bg-reaktoria-sky/20 border-reaktoria-sky/60 text-[#1F5570]',
    'earth' => 'bg-reaktoria-earth/15 border-reaktoria-earth/40 text-reaktoria-earth-hover',
    'wood' => 'bg-reaktoria-wood/15 border-reaktoria-wood/40 text-reaktoria-wood-dark',
    'stone' => 'bg-reaktoria-stone/15 border-reaktoria-stone/40 text-reaktoria-stone-dark',
    'roof' => 'bg-reaktoria-roof/15 border-reaktoria-roof/40 text-[#8E341E]',
    'chemistry' => 'bg-reaktoria-chemistry/15 border-reaktoria-chemistry/50 text-[#185E73]',
    'gold' => 'bg-reaktoria-gold/20 border-reaktoria-gold/50 text-[#7D560C]',
    'cream' => 'bg-reaktoria-cream border-[#D7C29F] text-reaktoria-wood-dark',
    'hud' => 'bg-reaktoria-hud text-reaktoria-cream border-reaktoria-hud-border',
    default => 'bg-black/5 border-black/10 text-reaktoria-ink',
};

$sizeClasses = match ($size) {
    'sm' => 'px-2 py-0.5 text-xs',
    default => 'px-2.5 py-1 text-xs',
};
@endphp

<span {{ $attributes->merge(['class' => "{$baseClasses} {$variantClasses} {$sizeClasses}"]) }}>
    {{ $slot }}
</span>
