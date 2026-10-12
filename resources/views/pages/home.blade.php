<x-layouts.app>
    <x-slot:title>Reaktoria: Low-Poly Medieval Fantasy Adventure & Chemistry</x-slot:title>
    <x-slot:description>Explore a colorful medieval world where chemistry becomes adventure. Combine real chemical elements, uncover the logic behind reactions, and forge powerful weapons.</x-slot:description>

    <!-- Top Navigation Bar -->
    <x-ui.navbar />

    <!-- Main Content Flow -->
    <main class="w-full">
        <!-- Section 1: Above-The-Fold Cinematic Hero Section (Untouched) -->
        <x-sections.hero />

        <!-- Section 2: Introduction: The Elemental Realm -->
        <x-sections.world />

        <!-- Section 3 & 4: Workshop Hall (Chemistry & Forging): Unified Single Background -->
        <div class="relative overflow-hidden bg-[#FAF6EE]">
            <!-- Single Continuous Background Spanning Both Section 3 and Section 4 -->
            <div class="absolute inset-0 z-0 pointer-events-none select-none">
                <img 
                    src="{{ asset('images/backgrounds/workshop-tall-bg.jpg') }}" 
                    alt="Reaktoria Low-Poly Medieval Craft Hall: chemistry-bg.jpg & forge-bg.jpg" 
                    class="w-full h-full object-cover object-center select-none pointer-events-none opacity-20 sm:opacity-25 contrast-[0.98] saturate-[0.95] brightness-[1.01]"
                    loading="lazy"
                />

                <!-- Seamless Transition from Section 2 (#EDF6EB meadow into workshop stone) -->
                <div class="absolute inset-x-0 top-0 h-40 bg-gradient-to-b from-[#EDF6EB] via-[#E7EDE3]/85 via-[#EEE5D5]/65 to-transparent pointer-events-none"></div>

                <!-- Subtle Ambient Workshop Lighting -->
                <div class="absolute top-1/6 right-1/6 w-[36rem] h-[36rem] bg-[radial-gradient(circle,_rgba(240,180,85,0.14)_0%,_transparent_65%)] pointer-events-none"></div>
                <div class="absolute top-1/5 left-1/6 w-[32rem] h-[32rem] bg-[radial-gradient(circle,_rgba(140,200,230,0.08)_0%,_transparent_65%)] pointer-events-none"></div>
                <div class="absolute bottom-1/4 right-1/12 w-[42rem] h-[42rem] bg-[radial-gradient(circle,_rgba(240,140,50,0.16)_0%,_transparent_65%)] pointer-events-none"></div>

                <!-- Seamless Transition to Section 5 (#DFD4C2 forge stone into gameplay meadow) -->
                <div class="absolute bottom-0 inset-x-0 h-32 bg-gradient-to-t from-[#DFD4C2] via-[#E2D7C5]/70 to-transparent pointer-events-none"></div>
            </div>

            <!-- Merged Interactive Section: Discover Chemistry and Forge -->
            <x-sections.chemistry />
        </div>

        <!-- Pilar 3: Field Battle & Game Modes (Combat Telemetry & Game Modes) -->
        <x-sections.gameplay />
        <x-sections.modes />

        <!-- Section 8: Elemental Archive: Know What You're Mixing -->
        <x-sections.archive />

        <!-- Section 9: Gallery: Visual Archive: A World Worth Discovering -->
        <x-sections.gallery />

        <!-- Section 10: Final CTA: Your Journey Begins: Enter The Realm -->
        <x-sections.cta />
    </main>

    <!-- Website Footer -->
    <x-ui.footer />

</x-layouts.app>
