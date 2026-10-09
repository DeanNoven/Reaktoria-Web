@props([
    'as' => 'div',
    'size' => 'default', // 'narrow', 'default', 'wide', 'full'
])

@php
$sizeClasses = match ($size) {
    'narrow' => 'max-w-4xl',
    'wide' => 'max-w-[1400px]',
    'full' => 'max-w-full',
    default => 'max-w-7xl',
};
@endphp

<{{ $as }} {{ $attributes->merge(['class' => "w-full mx-auto px-4 sm:px-6 lg:px-8 {$sizeClasses}"]) }}>
    {{ $slot }}
</{{ $as }}>
