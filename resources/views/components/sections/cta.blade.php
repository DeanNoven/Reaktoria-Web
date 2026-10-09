<!-- =========================================================================
     SECTION 10 — FINAL CTA: YOUR JOURNEY BEGINS
     Cinematic Closing Invitation: Enter The Realm
     ========================================================================= -->
<section id="enter-realm" class="relative py-20 sm:py-28 lg:py-36 overflow-hidden bg-[#D8E6DB] flex items-center justify-center min-h-[520px] sm:min-h-[580px] lg:min-h-[640px]">

    <!-- Anchor Aliases for Navigation (#final-cta, #enter-realm, #cta, #enter-game) -->
    <span id="final-cta" class="absolute -top-20 pointer-events-none" aria-hidden="true"></span>
    <span id="enter-game" class="absolute -top-20 pointer-events-none" aria-hidden="true"></span>
    <span id="cta" class="absolute -top-20 pointer-events-none" aria-hidden="true"></span>

    <!-- =================================================================
         CINEMATIC BACKGROUND ENVIRONMENT
         Panoramic Golden-Hour Low-Poly Landscape of the Elemental Realm
         ================================================================= -->
    <div class="absolute inset-0 z-0 pointer-events-none select-none">
        <!-- Golden-Hour Late Afternoon Sunlight Widescreen Landscape -->
        <img 
            src="{{ asset('images/final-cta-bg.jpg') }}" 
            alt="Reaktoria Low-Poly Medieval Fantasy Landscape at Golden Hour — Castle, Monumental Bridge, River Valley, and Mountains" 
            class="w-full h-full object-cover object-center select-none pointer-events-none"
            loading="lazy"
        />

        <!-- Seamless Transition from Section 9 Parchment Base (#ECE3D2) -->
        <div class="absolute inset-x-0 top-0 h-24 sm:h-32 bg-gradient-to-b from-[#ECE3D2] via-[#ECE3D2]/65 to-transparent"></div>

        <!-- Central Readability Dissolve (Restrained soft parchment veil focused directly behind typography, leaving castle, bridge, and river crisp) -->
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_rgba(250,246,238,0.72)_0%,_rgba(250,246,238,0.40)_38%,_rgba(250,246,238,0.10)_60%,_transparent_80%)]"></div>

        <!-- Archival Metric Stipple Accent -->
        <div class="absolute inset-0 opacity-[0.02] text-[#4A2E1D]">
            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                <defs>
                    <pattern id="cta-grid-pattern" width="64" height="64" patternUnits="userSpaceOnUse">
                        <circle cx="32" cy="32" r="1" fill="currentColor" />
                        <line x1="32" y1="24" x2="32" y2="40" stroke="currentColor" stroke-width="0.5" opacity="0.35" />
                        <line x1="24" y1="32" x2="40" y2="32" stroke="currentColor" stroke-width="0.5" opacity="0.35" />
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#cta-grid-pattern)" />
            </svg>
        </div>

        <!-- Intentional Bottom Footer Transition / Grounding Base -->
        <div class="absolute inset-x-0 bottom-0 h-20 sm:h-28 bg-gradient-to-t from-[#152228]/40 via-[#152228]/10 to-transparent"></div>
    </div>

    <!-- =================================================================
         CENTERED CALL-TO-ACTION CONTENT
         ================================================================= -->
    <div class="relative z-10 w-full max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

        <div class="space-y-6 sm:space-y-8">

            <!-- Eyebrow Pill -->
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-[#FAF6EE]/92 backdrop-blur-xs border border-[#D5C6AA] shadow-xs select-none">
                <span class="w-2 h-2 rounded-full bg-reaktoria-grass animate-pulse"></span>
                <span class="text-xs font-mono font-bold tracking-widest text-[#4A2E1D] uppercase">
                    YOUR JOURNEY BEGINS
                </span>
            </div>

            <!-- Main Headline (Primary Visual Focal Point) -->
            <h2 class="font-display font-black text-4xl sm:text-5xl lg:text-6xl text-reaktoria-deep-forest tracking-tight uppercase leading-[1.08] drop-shadow-[0_2px_4px_rgba(255,255,255,0.75)]">
                ENTER THE REALM.
            </h2>

            <!-- Supporting Description -->
            <p class="text-base sm:text-lg lg:text-xl text-reaktoria-ink/90 font-body leading-relaxed max-w-xl mx-auto drop-shadow-[0_1px_2px_rgba(255,255,255,0.6)]">
                Experiment with the elements. Forge your discoveries. Shape your own adventure.
            </p>

            <!-- CTA Actions Group -->
            <div class="pt-2 sm:pt-4 flex flex-wrap items-center justify-center gap-4 sm:gap-5">
                
                <!-- Primary CTA: Enter The Realm -->
                <x-ui.button 
                    variant="forest" 
                    size="lg" 
                    href="#enter-game" 
                    class="px-7 py-3.5 sm:py-4 text-sm sm:text-base font-display font-bold tracking-wider shadow-lg hover:scale-102 transition-transform cursor-pointer">
                    <svg class="w-4 h-4 text-reaktoria-cream-light" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14.5 17.5L3 6V3h3l11.5 11.5" />
                        <path d="M13 19l6-6" />
                        <path d="M16 16l4 4" />
                        <path d="M19 21l2-2" />
                    </svg>
                    <span>ENTER THE REALM</span>
                </x-ui.button>

                <!-- Secondary CTA: Back To The Top -->
                <x-ui.button 
                    variant="cream" 
                    size="lg" 
                    href="#" 
                    onclick="window.scrollTo({ top: 0, behavior: 'smooth' }); return false;"
                    class="px-6 py-3.5 sm:py-4 text-sm sm:text-base font-display font-bold tracking-wider shadow-md hover:scale-102 transition-transform cursor-pointer border-2 border-[#C9BCA0]">
                    <svg class="w-4 h-4 text-[#8C6211]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                    </svg>
                    <span>BACK TO THE TOP</span>
                </x-ui.button>

            </div>

        </div>

    </div>

</section>
