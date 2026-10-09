<section id="world" class="relative py-16 sm:py-20 lg:py-28 overflow-hidden bg-[#EDF6EB]">

    <!-- Environmental Low-Poly Background Layer (Atmospheric 6/10 continuation of the game world) -->
    <div class="absolute inset-0 z-0">
        <!-- Wide Atmospheric Low-Poly Medieval Landscape (~6/10 visibility, recognizable terrain depth) -->
        <img 
            src="{{ asset('images/backgrounds/section2-wide-bg.jpg') }}" 
            alt="Reaktoria Low-Poly Medieval Meadow, Distant Forest and Mountains" 
            class="w-full h-full object-cover object-center sm:object-[center_35%] select-none pointer-events-none opacity-65 contrast-[0.92] saturate-[0.88] brightness-[1.01]"
        />

        <!-- Gradual Environmental Transition from Hero (Soft atmospheric fog preserving landscape shapes) -->
        <div class="absolute inset-x-0 top-0 h-28 bg-gradient-to-b from-[#EDF6EB]/70 via-[#EDF6EB]/30 to-transparent pointer-events-none"></div>

        <!-- Atmospheric Depth Veil: Soft daylight haze letting outer edges remain clearly visible (~7-8/10) -->
        <div class="absolute inset-y-0 right-0 w-full lg:w-7/12 bg-gradient-to-l from-transparent via-[#FAF8F1]/20 to-transparent pointer-events-none"></div>

        <!-- Subtle Left & Bottom Ambient Meadow Atmosphere -->
        <div class="absolute inset-y-0 left-0 w-1/4 bg-gradient-to-r from-[#EDF6EB]/20 to-transparent pointer-events-none"></div>
        <div class="absolute inset-x-0 bottom-0 h-28 bg-gradient-to-t from-[#EDF6EB]/85 via-[#EDF6EB]/40 to-transparent pointer-events-none"></div>
    </div>

    <!-- Main Content Container -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Two-Column Editorial Composition: Integrated Environmental Illustration + Adventure Narrative -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">
            
            <!-- LEFT: Environmental Illustration Integrated Into The World (No SaaS card styling) -->
            <div class="lg:col-span-6 relative">
                
                <!-- Medieval Explorer's Field Plate (Organic parchment and stone borders) -->
                <div class="relative rounded-2xl overflow-hidden border-2 border-[#D7CBAD]/80 shadow-[0_12px_28px_rgba(40,70,45,0.08)] bg-[#EDE4D0]/30 transition-transform duration-500 hover:scale-[1.01]">
                    
                    <img 
                        src="{{ asset('images/village-intro.jpg') }}" 
                        alt="Reaktoria Low-Poly Medieval Village, River, and Alchemist Workshop" 
                        class="w-full h-auto aspect-[4/3] object-cover object-center select-none"
                        loading="lazy"
                    />

                    <!-- In-World Plate Caption (Explorer's Journal Aesthetic) -->
                    <div class="px-4 py-2.5 bg-[#FAF6EE]/95 border-t border-[#D7CBAD]/80 flex flex-wrap items-center justify-between gap-2 text-xs text-[#5D5545]">
                        <span class="font-display font-bold tracking-wide flex items-center gap-1.5 text-reaktoria-deep-forest">
                            <span class="text-[#2F6B3C]">🌲</span>
                            <span>Wolfhaven Settlement &bull; Alchemist Workshop</span>
                        </span>
                        
                        <!-- Subtle Chemistry Cues integrated into discovery record -->
                        <span class="font-mono font-semibold text-[11px] text-[#2F6B3C] tracking-wider bg-[#E8F2E4] px-2 py-0.5 rounded border border-[#C5DCBD]">
                            Fe &bull; H &bull; O &bull; Na &bull; Cl
                        </span>
                    </div>

                </div>

            </div>

            <!-- RIGHT: Introduction Narrative & Adventure Journey Progression -->
            <div class="lg:col-span-6 space-y-7 relative">
                
                <!-- Atmospheric Parchment Readability Layer (Subtle un-shadowed environmental cushion) -->
                <div class="absolute -inset-x-4 -inset-y-5 sm:-inset-x-6 sm:-inset-y-7 bg-gradient-to-br from-[#FAF7EF]/55 via-[#F2F7ED]/45 to-[#FAF6EE]/40 rounded-3xl border border-[#DFD5BA]/25 pointer-events-none -z-10"></div>

                <!-- Eyebrow, Main Heading, and Supporting Text -->
                <div class="space-y-4">
                    <div class="inline-flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-reaktoria-grass animate-pulse"></span>
                        <span class="text-xs font-bold font-body uppercase tracking-[0.2em] text-[#2F6B3C]">
                            THE ELEMENTAL REALM
                        </span>
                    </div>

                    <h2 class="font-display font-extrabold text-3xl sm:text-4xl lg:text-[2.75rem] text-reaktoria-deep-forest tracking-tight leading-[1.14]">
                        WHERE CHEMISTRY <br class="hidden sm:inline" />
                        <span class="text-reaktoria-forest">MEETS ADVENTURE</span>
                    </h2>

                    <p class="text-base sm:text-lg text-reaktoria-ink/85 leading-relaxed font-body">
                        Reaktoria is a low-poly medieval world where chemistry becomes part of the adventure. Explore the realm, discover real elements, experiment with reactions, and turn your discoveries into power.
                    </p>
                </div>

                <!-- Adventure Progression Pillars (Unboxed Journey Milestones, No SaaS Cards) -->
                <div class="relative pl-7 sm:pl-8 space-y-6 before:absolute before:left-2.5 sm:before:left-3 before:top-3 before:bottom-3 before:w-[2px] before:bg-gradient-to-b before:from-[#2F6B3C]/50 before:via-[#1B7088]/50 before:to-[#C05621]/50">
                    
                    <!-- 01 — EXPLORE -->
                    <div class="relative group">
                        <!-- Journey Path Node Marker -->
                        <div class="absolute -left-7 sm:-left-8 top-0.5 w-5 h-5 rounded-full bg-[#FAF6EE] border-2 border-[#2F6B3C] text-[#2F6B3C] flex items-center justify-center shadow-xs group-hover:scale-110 transition-transform">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#2F6B3C]"></span>
                        </div>
                        <div class="space-y-1">
                            <div class="flex items-center gap-2">
                                <span class="font-mono text-xs font-bold text-[#2F6B3C]">01 &mdash;</span>
                                <h3 class="font-display font-bold text-sm sm:text-base tracking-wider text-reaktoria-deep-forest uppercase">
                                    EXPLORE
                                </h3>
                            </div>
                            <p class="text-xs sm:text-sm text-reaktoria-ink-muted leading-relaxed">
                                Explore forests, villages, ruins, and battlefields across the Elemental Realm.
                            </p>
                        </div>
                    </div>

                    <!-- 02 — EXPERIMENT -->
                    <div class="relative group">
                        <!-- Journey Path Node Marker -->
                        <div class="absolute -left-7 sm:-left-8 top-0.5 w-5 h-5 rounded-full bg-[#FAF6EE] border-2 border-[#1B7088] text-[#1B7088] flex items-center justify-center shadow-xs group-hover:scale-110 transition-transform">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#1B7088]"></span>
                        </div>
                        <div class="space-y-1">
                            <div class="flex items-center gap-2">
                                <span class="font-mono text-xs font-bold text-[#1B7088]">02 &mdash;</span>
                                <h3 class="font-display font-bold text-sm sm:text-base tracking-wider text-reaktoria-deep-forest uppercase">
                                    EXPERIMENT
                                </h3>
                                <span class="font-mono text-[11px] font-semibold text-[#1B7088]/70 hidden sm:inline">&bull; Real reactions</span>
                            </div>
                            <p class="text-xs sm:text-sm text-reaktoria-ink-muted leading-relaxed">
                                Combine real chemical elements and discover how they react.
                            </p>
                        </div>
                    </div>

                    <!-- 03 — FORGE -->
                    <div class="relative group">
                        <!-- Journey Path Node Marker -->
                        <div class="absolute -left-7 sm:-left-8 top-0.5 w-5 h-5 rounded-full bg-[#FAF6EE] border-2 border-[#C05621] text-[#C05621] flex items-center justify-center shadow-xs group-hover:scale-110 transition-transform">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#C05621]"></span>
                        </div>
                        <div class="space-y-1">
                            <div class="flex items-center gap-2">
                                <span class="font-mono text-xs font-bold text-[#C05621]">03 &mdash;</span>
                                <h3 class="font-display font-bold text-sm sm:text-base tracking-wider text-reaktoria-deep-forest uppercase">
                                    FORGE
                                </h3>
                                <span class="font-mono text-[11px] font-semibold text-[#C05621]/70 hidden sm:inline">&bull; Weapons &amp; items</span>
                            </div>
                            <p class="text-xs sm:text-sm text-reaktoria-ink-muted leading-relaxed">
                                Transform successful discoveries into powerful weapons.
                            </p>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
