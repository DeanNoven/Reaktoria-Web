<section class="relative min-h-[calc(100vh-4.5rem)] flex items-center justify-between overflow-hidden bg-[#8CC8E8]">

    <!-- Environmental background -->
    <div class="absolute inset-0 z-0" aria-hidden="true">
        <img 
            src="{{ asset('images/hero-environment.jpg') }}" 
            alt="" 
            class="w-full h-full object-cover object-center lg:object-[65%_center] select-none pointer-events-none"
        />
        
        <div class="absolute inset-0 bg-gradient-to-r from-[#F7FAF6]/95 via-[#F7FAF6]/80 to-transparent sm:w-4/5 lg:w-3/5 pointer-events-none"></div>
        <div class="absolute inset-x-0 top-0 h-16 bg-gradient-to-b from-[#1E2E36]/30 to-transparent pointer-events-none"></div>
        <div class="absolute inset-x-0 bottom-0 h-24 bg-gradient-to-t from-[#EDF6EB] to-transparent pointer-events-none"></div>
    </div>

    <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16 lg:py-20 flex flex-col justify-center">
        
        <div class="max-w-2xl space-y-6 sm:space-y-7">
            
            <div class="flex flex-wrap items-center gap-2.5">
                <span class="inline-flex items-center px-3 py-1 rounded-lg text-xs font-bold font-body uppercase tracking-widest bg-reaktoria-forest/15 border-2 border-reaktoria-forest/40 text-reaktoria-deep-forest shadow-xs">
                    LOW-POLY MEDIEVAL ADVENTURE
                </span>

                <!-- Subtle Chemistry Cue: Science inside Fantasy -->
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-lg text-xs font-semibold font-mono bg-reaktoria-chemistry/15 border-2 border-reaktoria-chemistry/40 text-[#185E73] shadow-xs">
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
                    <svg class="w-4 h-4 text-reaktoria-cream-light" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14.5 17.5L3 6V3h3l11.5 11.5" />
                        <path d="M13 19l6-6" />
                        <path d="M16 16l4 4" />
                        <path d="M19 21l2-2" />
                    </svg>
                    <span>ENTER THE REALM</span>
                </x-ui.button>

                <!-- Secondary CTA: Educational / Exploratory -->
                <x-ui.button variant="chemistry" size="lg" href="#chemistry" class="px-6 py-3.5 text-sm sm:text-base font-display font-bold tracking-wider shadow-md hover:scale-102">
                    <svg class="w-4 h-4 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M10 2v5.5L4.5 18a2 2 0 0 0 1.7 3h11.6a2 2 0 0 0 1.7-3L14 7.5V2" />
                        <path d="M8.5 2h7" />
                        <path d="M7 15h10" />
                    </svg>
                    <span>DISCOVER CHEMISTRY</span>
                </x-ui.button>
            </div>

            <!-- Subtle Feature Tags / In-World Pills -->
            <div class="pt-4 border-t-2 border-[#DCE8DC] flex flex-wrap items-center gap-y-2 gap-x-4 text-xs font-semibold text-reaktoria-ink-muted uppercase tracking-wider">
                <div class="flex items-center gap-1.5">
                    <svg class="w-3.5 h-3.5 text-reaktoria-forest" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="m8 14-6 6h20l-6-6" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="m12 3-7 11h14z" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span>Low-Poly Medieval World</span>
                </div>
                <span class="text-reaktoria-stone/40">•</span>
                <div class="flex items-center gap-1.5">
                    <svg class="w-3.5 h-3.5 text-reaktoria-chemistry" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M10 2v5.5L4.5 18a2 2 0 0 0 1.7 3h11.6a2 2 0 0 0 1.7-3L14 7.5V2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M8.5 2h7" stroke-linecap="round"/>
                    </svg>
                    <span>Real Chemical Reactions</span>
                </div>
                <span class="text-reaktoria-stone/40">•</span>
                <div class="flex items-center gap-1.5">
                    <svg class="w-3.5 h-3.5 text-reaktoria-gold" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M14.5 17.5L3 6V3h3l11.5 11.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M13 19l6-6" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span>Elemental Adventure</span>
                </div>
            </div>

        </div>

    </div>

</section>
