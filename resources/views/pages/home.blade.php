<x-layouts.app>
    <x-slot:title>Reaktoria: Low-Poly Medieval Fantasy Adventure & Chemistry</x-slot:title>
    <x-slot:description>Explore a colorful medieval world where chemistry becomes adventure. Combine real chemical elements, uncover the logic behind reactions, and forge powerful weapons.</x-slot:description>

    <!-- Top Navigation Bar -->
    <x-ui.navbar />

    <!-- Main Content Flow -->
    <main class="w-full">
        <!-- Section 1: Above-The-Fold Cinematic Hero Section (Untouched) -->
        <x-sections.hero />

        <!-- =================================================================
             GLOBAL CANVAS SYSTEM (Sections 2, 3 & 4, 5, 6, 8)
             Unified Base Color: #EDF6EB (Light Sage-Meadow Wash)
             Shared Ambient Radial Illumination System:
             - Warm parchment: rgba(255, 252, 242, 0.75)
             - Secondary parchment: rgba(250, 245, 232, 0.60)
             - Meadow illumination: rgba(225, 242, 228, 0.50)
             ================================================================= -->
        <div 
            class="relative w-full bg-[#EDF6EB] overflow-hidden"
            x-data="{
                progress: 0,
                updateProgress() {
                    const bg = this.$refs.tapestryBg;
                    if (!bg) return;
                    const rect = this.$el.getBoundingClientRect();
                    const maxScroll = this.$el.offsetHeight - window.innerHeight;
                    if (maxScroll > 0) {
                        const current = -rect.top;
                        this.progress = Math.min(Math.max(current / maxScroll, 0), 1);
                        bg.style.backgroundPosition = `center ${(this.progress * 100).toFixed(2)}%`;
                    }
                }
            }"
            x-init="
                $nextTick(() => updateProgress());
                let ticking = false;
                const onScroll = () => {
                    if (!ticking) {
                        requestAnimationFrame(() => {
                            updateProgress();
                            ticking = false;
                        });
                        ticking = true;
                    }
                };
                window.addEventListener('scroll', onScroll, { passive: true });
                window.addEventListener('resize', onScroll, { passive: true });
            "
        >
            
            <!-- Continuous Grand Realm Tapestry Backdrop (Spans Section 2 through Section 8 Seamlessly) -->
            <div class="absolute inset-0 z-0 pointer-events-none select-none" aria-hidden="true">
                <div 
                    x-ref="tapestryBg"
                    class="w-full h-full image-background bg-cover bg-no-repeat bg-fixed select-none pointer-events-none opacity-85 contrast-[1.02] saturate-[1.05] transition-[background-position] duration-150 ease-out motion-reduce:transition-none"
                    style="background-image: url('{{ asset('images/backgrounds/grand-realm-scroll.jpg') }}'); background-position: center 0%;  filter: brightness(65%);"
                    role="img"
                    aria-label="Reaktoria Continuous Grand Realm Tapestry"
                ></div>

                <!-- Top Seamless Transition from Hero Section -->
                <div class="absolute inset-x-0 top-0 h-36 bg-gradient-to-b from-[#EDF6EB] via-[#EDF6EB]/85 to-transparent"></div>

                <!-- Continuous Ambient Radial Illuminations Across Shared Canvas Flow -->
                <div class="absolute top-[3%] left-[6%] w-[46rem] h-[46rem] bg-[radial-gradient(circle,_rgba(255,252,242,0.60)_0%,_transparent_65%)]"></div>
                <div class="absolute top-[18%] right-[8%] w-[42rem] h-[42rem] bg-[radial-gradient(circle,_rgba(225,242,228,0.40)_0%,_transparent_65%)]"></div>
                <div class="absolute top-[36%] left-[10%] w-[40rem] h-[40rem] bg-[radial-gradient(circle,_rgba(250,245,232,0.50)_0%,_transparent_65%)]"></div>
                <div class="absolute top-[54%] right-[6%] w-[44rem] h-[44rem] bg-[radial-gradient(circle,_rgba(255,252,242,0.60)_0%,_transparent_65%)]"></div>
                <div class="absolute top-[72%] left-[8%] w-[42rem] h-[42rem] bg-[radial-gradient(circle,_rgba(225,242,228,0.40)_0%,_transparent_65%)]"></div>
                <div class="absolute bottom-[4%] right-[10%] w-[40rem] h-[40rem] bg-[radial-gradient(circle,_rgba(250,245,232,0.50)_0%,_transparent_65%)]"></div>
            </div>

            <!-- Section 2: Introduction: The Elemental Realm -->
            <x-sections.world />

            <!-- Section 3 & 4 (Merged): Workshop Hall (Discover Chemistry and Forge) -->
            <x-sections.chemistry />

            <!-- Section 5: Field Battle / Gameplay -->
            <x-sections.gameplay />

            <!-- Section 6: Game Modes -->
            <x-sections.modes />

            <!-- Section 8: Elemental Archive -->
            <x-sections.archive />

            <!-- Bottom Seamless Transition into Section 9 (Gallery Parchment #E9DFC9) -->
            <div class="absolute bottom-0 inset-x-0 h-36 bg-gradient-to-t from-[#E9DFC9] via-[#E9DFC9]/80 to-transparent pointer-events-none z-10"></div>
        </div>

        <!-- Section 9: Gallery: Visual Archive: A World Worth Discovering (Untouched) -->
        <x-sections.gallery />

        <!-- Section 10: Final CTA: Your Journey Begins: Enter The Realm (Untouched) -->
        <x-sections.cta />
    </main>

    <!-- Website Footer -->
    <x-ui.footer />

</x-layouts.app>
