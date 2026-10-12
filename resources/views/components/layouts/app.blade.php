@props([
    'title' => 'Reaktoria: Chemistry Fantasy Adventure',
    'description' => 'A colorful low-poly 3D medieval fantasy adventure game with chemistry as its core gameplay mechanic.',
])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}">

    <!-- Google Fonts: Cinzel (Display), Plus Jakarta Sans (Body), JetBrains Mono (Chemical UI) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;600;700;800;900&family=Plus+Jakarta+Sans:ital,wght@0,400..700;1,400..700&family=JetBrains+Mono:wght@500;600&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body id="top" class="min-h-full flex flex-col bg-[#F7FAF6] text-reaktoria-ink font-sans antialiased selection:bg-reaktoria-grass selection:text-white">
    <!-- Bright Warm Daylight Ambient Backdrop (Sky blue atmosphere blending into sunlit meadow) -->
    <div class="fixed inset-0 pointer-events-none -z-10 bg-gradient-to-b from-reaktoria-sky-light/40 via-[#F7FAF6] to-[#EDF6EB]/70"></div>

    <div class="flex-1 flex flex-col w-full">
        {{ $slot }}
    </div>
</body>
</html>
