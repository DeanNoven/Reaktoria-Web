@props([
    'title' => 'Reaktoria — Chemistry Fantasy Adventure',
    'description' => 'An educational low-poly 3D medieval fantasy adventure game discovering chemical reactions and elements.',
])

<x-layouts.app :title="$title" :description="$description">
    {{ $slot }}
</x-layouts.app>
