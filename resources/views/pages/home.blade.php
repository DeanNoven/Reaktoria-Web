<x-layouts.app>
    <x-slot:title>Reaktoria — Low-Poly Medieval Fantasy Adventure & Chemistry</x-slot:title>
    <x-slot:description>Explore a colorful medieval world where chemistry becomes adventure. Combine real chemical elements, uncover the logic behind reactions, and forge powerful weapons.</x-slot:description>

    <!-- Top Navigation Bar -->
    <x-ui.navbar />

    <!-- Main Content Flow -->
    <main class="w-full">
        <!-- Section 1: Above-The-Fold Cinematic Hero Section (Untouched) -->
        <x-sections.hero />

        <!-- Section 2: Introduction — The Elemental Realm -->
        <x-sections.world />

        <!-- Section 3: Chemistry — The Art of Reaction -->
        <x-sections.chemistry />

        <!-- Section 4: From Reaction to Power — The Art of Forging -->
        <x-sections.forge />

        <!-- Section 5: Gameplay / Adventure — Discover. React. Battle. -->
        <x-sections.gameplay />

        <!-- Section 6: Features — Built to Experiment. Built to Explore. -->
        <x-sections.features />

        <!-- Section 7: Game Modes — Play Your Way (01 Campaign & 02 Creative) -->
        <x-sections.modes />

        <!-- Section 8: Elemental Archive — Know What You're Mixing -->
        <x-sections.archive />
    </main>

</x-layouts.app>
