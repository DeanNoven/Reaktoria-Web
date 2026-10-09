<section class="relative min-h-[calc(100vh-4.5rem)] flex items-center justify-between overflow-hidden bg-[#8CC8E8]">

    <!-- Background Low-Poly Environment Image -->
    <div class="absolute inset-0 z-0">
        <img 
            src="{{ asset('images/hero-environment.jpg') }}" 
            alt="Reaktoria Low-Poly Medieval Fantasy World" 
            class="w-full h-full object-cover object-center lg:object-[65%_center] select-none pointer-events-none"
        />
        
        <!-- Soft Daytime Atmosphere Gradients (No heavy black vignette or dark shadows) -->
        <!-- Left daylight wash for crisp typography legibility -->
        <div class="absolute inset-0 bg-gradient-to-r from-[#F7FAF6]/95 via-[#F7FAF6]/80 to-transparent sm:w-4/5 lg:w-3/5 pointer-events-none"></div>
        
        <!-- Subtle sunlit ambient top & bottom transitions -->
        <div class="absolute inset-x-0 top-0 h-16 bg-gradient-to-b from-[#1E2E36]/30 to-transparent pointer-events-none"></div>
        <div class="absolute inset-x-0 bottom-0 h-24 bg-gradient-to-t from-[#EDF6EB] to-transparent pointer-events-none"></div>
    </div>

    <!-- Main Hero Content Container -->
    <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16 lg:py-20 flex flex-col justify-center">
        
        <div class="max-w-2xl space-y-6 sm:space-y-7">
            
            <!-- Eyebrow & Chemistry Visual Cue -->
            <div class="flex flex-wrap items-center gap-2.5">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold font-body uppercase tracking-widest bg-reaktoria-forest/15 border-2 border-reaktoria-forest/40 text-reaktoria-deep-forest shadow-xs">
                    <span class="w-2 h-2 rounded-full bg-reaktoria-grass animate-pulse"></span>
                    THE ELEMENTAL REALM
                </span>

                <!-- Subtle Chemistry Cue: Science inside Fantasy -->
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold font-mono bg-reaktoria-chemistry/15 border-2 border-reaktoria-chemistry/40 text-[#185E73] shadow-xs">
                    <svg class="w-3.5 h-3.5 text-reaktoria-chemistry" viewBox="0 0 24 28" fill="none">
                        <path d="M10 2H14M11 2V8L5 20C4 22 5.5 25 8 25H16C18.5 25 20 22 19 20L13 8V2" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
                        <circle cx="12" cy="18" r="2" fill="currentColor"/>
                    </svg>
                    <span>[Fe] + [S] &rarr; Reaction</span>
                </span>
            </div>

            <!-- Main Headline -->
            <div class="space-y-3">
                <h1 class="font-display font-extrabold text-4xl sm:text-5xl lg:text-6xl text-reaktoria-deep-forest tracking-tight leading-[1.08] drop-shadow-[0_2px_2px_rgba(255,255,255,0.8)]">
                    FORGE THE <br />
                    <span class="text-reaktoria-forest underline decoration-reaktoria-grass/60 decoration-4 underline-offset-8">
                        ELEMENTAL REALM
                    </span>
                </h1>

                <!-- Alternative Supporting Line -->
                <p class="font-display font-bold text-sm sm:text-base lg:text-lg text-[#185E73] tracking-wide uppercase">
                    COMBINE THE ELEMENTS. DISCOVER THEIR POWER.
                </p>
            </div>

            <!-- Supporting Description -->
            <p class="text-base sm:text-lg text-reaktoria-ink leading-relaxed font-body max-w-xl">
                Explore a colorful medieval world where chemistry becomes adventure. Combine real chemical elements, uncover the logic behind their reactions, and forge the results into powerful weapons.
            </p>

            <!-- CTA Buttons -->
            <div class="pt-2 flex flex-wrap items-center gap-3.5 sm:gap-4">
                <!-- Primary CTA: Adventurous & Inviting -->
                <x-ui.button variant="forest" size="lg" href="#enter-game" class="px-6 py-3.5 text-sm sm:text-base font-display font-bold tracking-wider shadow-md hover:scale-102">
                    <span class="text-lg">⚔️</span>
                    <span>ENTER THE REALM</span>
                </x-ui.button>

                <!-- Secondary CTA: Educational / Exploratory -->
                <x-ui.button variant="chemistry" size="lg" href="#chemistry" class="px-6 py-3.5 text-sm sm:text-base font-display font-bold tracking-wider shadow-md hover:scale-102">
                    <span class="text-lg">🧪</span>
                    <span>DISCOVER CHEMISTRY</span>
                </x-ui.button>
            </div>

            <!-- Subtle Feature Tags / In-World Pills -->
            <div class="pt-4 border-t-2 border-[#DCE8DC] flex flex-wrap items-center gap-y-2 gap-x-4 text-xs font-semibold text-reaktoria-ink-muted uppercase tracking-wider">
                <div class="flex items-center gap-1.5">
                    <span class="text-reaktoria-forest">🌲</span>
                    <span>Low-Poly Medieval World</span>
                </div>
                <span class="text-reaktoria-stone/40">•</span>
                <div class="flex items-center gap-1.5">
                    <span class="text-reaktoria-chemistry">⚗️</span>
                    <span>Real Chemical Reactions</span>
                </div>
                <span class="text-reaktoria-stone/40">•</span>
                <div class="flex items-center gap-1.5">
                    <span class="text-reaktoria-gold">⚔️</span>
                    <span>Elemental Adventure</span>
                </div>
            </div>

        </div>

    </div>

</section>
