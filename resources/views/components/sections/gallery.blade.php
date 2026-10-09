<!-- =========================================================================
     SECTION 9 — GALLERY: VISUAL ARCHIVE
     Editorial Curated Game Artbook: A World Worth Discovering
     ========================================================================= -->
<section id="gallery" class="relative py-16 sm:py-20 lg:py-24 overflow-hidden bg-gradient-to-b from-[#E9DFC9] via-[#F5EEDF] via-[#FAF6EE] to-[#ECE3D2]">

    <!-- Anchor Aliases for Global Navigation (#gallery, #visual-archive) -->
    <span id="visual-archive" class="absolute -top-24 pointer-events-none" aria-hidden="true"></span>

    <!-- Environmental Transition Layer (Warm Parchment / Cartographic Grid) -->
    <div class="absolute inset-0 z-0 pointer-events-none select-none">
        
        <!-- Seamless Transition from Section 8 (#E9DFC9) -->
        <div class="absolute inset-x-0 top-0 h-28 sm:h-32 bg-gradient-to-b from-[#E9DFC9] via-[#E9DFC9]/80 to-transparent"></div>

        <!-- Archival Metric Stipple Pattern -->
        <div class="absolute inset-0 opacity-[0.03] text-[#4A2E1D]">
            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                <defs>
                    <pattern id="gallery-grid-pattern" width="56" height="56" patternUnits="userSpaceOnUse">
                        <circle cx="28" cy="28" r="1" fill="currentColor" />
                        <line x1="28" y1="20" x2="28" y2="36" stroke="currentColor" stroke-width="0.5" opacity="0.4" />
                        <line x1="20" y1="28" x2="36" y2="28" stroke="currentColor" stroke-width="0.5" opacity="0.4" />
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#gallery-grid-pattern)" />
            </svg>
        </div>

        <!-- Warm Ambient Hearth & Parchment Glows -->
        <div class="absolute top-1/4 left-1/12 w-96 h-96 rounded-full bg-[radial-gradient(circle,_rgba(227,180,76,0.05)_0%,_transparent_70%)]"></div>
        <div class="absolute bottom-1/4 right-1/12 w-96 h-96 rounded-full bg-[radial-gradient(circle,_rgba(66,169,198,0.05)_0%,_transparent_70%)]"></div>

        <!-- Soft Bottom Blending -->
        <div class="absolute bottom-0 inset-x-0 h-24 bg-gradient-to-t from-[#ECE3D2] via-[#ECE3D2]/75 to-transparent"></div>

    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        <!-- =================================================================
             SECTION HEADER: Editorial Visual Archive
             ================================================================= -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-5 mb-10 sm:mb-12 lg:mb-14">
            
            <div class="space-y-3 max-w-2xl">
                <!-- Eyebrow Pill -->
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded bg-[#E4D7BE]/90 border border-[#CEBF9E] shadow-2xs">
                    <span class="w-2 h-2 rounded-full bg-[#14566A]"></span>
                    <span class="text-xs font-mono font-bold tracking-widest text-[#5A452E] uppercase">
                        VISUAL ARCHIVE
                    </span>
                </div>

                <!-- Main Display Heading -->
                <h2 class="font-display font-black text-3xl sm:text-4xl lg:text-5xl text-reaktoria-deep-forest tracking-tight uppercase leading-[1.08]">
                    A WORLD WORTH DISCOVERING.
                </h2>

                <!-- Subheading / Supporting Text -->
                <p class="text-sm sm:text-base lg:text-lg text-reaktoria-ink/80 leading-relaxed font-body">
                    Explore the places, experiments, and creations that shape the Elemental Realm.
                </p>
            </div>

            <!-- Top-Right Archival Registry Badge -->
            <div class="hidden sm:inline-flex items-center gap-2.5 font-mono text-xs text-[#5A452E] bg-[#E8DEC8]/90 px-3.5 py-2 rounded-lg border border-[#D0C2A5] shadow-xs select-none self-start md:self-end">
                <span class="w-2 h-2 rounded-full bg-[#E3B44C]"></span>
                <span class="font-bold tracking-wider text-reaktoria-deep-forest uppercase">CHRONICLE FOLIO</span>
                <span class="text-stone-400">&bull;</span>
                <span class="tracking-wide">FOUR FIELD STUDIES</span>
            </div>

        </div>

        <!-- =================================================================
             EDITORIAL ARTBOOK GALLERY COMPOSITION
             Varied Proportions: Wide Panoramic -> Two Medium Side-by-Side -> Wide Panoramic
             ================================================================= -->
        <div class="space-y-6 sm:space-y-8 lg:space-y-10">

            <!-- -------------------------------------------------------------
                 01. THE REALM (Large Wide Panoramic Spanning Full Width)
                 ------------------------------------------------------------- -->
            <article class="group relative rounded-xl sm:rounded-2xl overflow-hidden border-2 border-[#D5C6AA] bg-[#FAF6EE] shadow-[0_12px_32px_rgba(40,30,15,0.06),_0_2px_8px_rgba(40,30,15,0.03)] transition-all duration-300 hover:border-[#BFAF93] hover:shadow-[0_16px_40px_rgba(40,30,15,0.10)]">
                
                <!-- Panoramic Image Viewport -->
                <div class="relative overflow-hidden w-full aspect-[16/10] sm:aspect-[2/1] lg:aspect-[21/9] bg-[#141E22]">
                    <img 
                        src="{{ asset('images/gallery-realm.jpg') }}" 
                        alt="Reaktoria Low-Poly Realm Panoramic Landscape — Castle, River Valley, Village, and Distant Mountains" 
                        class="w-full h-full object-cover select-none transition-transform duration-700 ease-out group-hover:scale-[1.025]"
                        loading="lazy"
                    />
                    <!-- Subtle Archival Ring Edge -->
                    <div class="absolute inset-0 ring-1 ring-inset ring-black/10 pointer-events-none"></div>
                </div>

                <!-- Archival Caption Docket -->
                <div class="px-4 py-3 sm:px-6 sm:py-3.5 bg-[#FAF6EE] border-t border-[#E5DAC6] flex flex-wrap items-center justify-between gap-3 select-none">
                    <div class="flex items-center gap-3">
                        <span class="font-mono text-xs sm:text-sm font-bold text-[#8C6211] tracking-wider">01</span>
                        <span class="text-stone-300">&bull;</span>
                        <h3 class="font-display font-black text-sm sm:text-base text-reaktoria-deep-forest tracking-wider uppercase">
                            THE REALM
                        </h3>
                    </div>
                    
                    <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded font-mono text-[10px] sm:text-xs font-semibold uppercase tracking-wider text-[#5A452E] bg-[#EBE0CD] border border-[#D5C6AA]">
                        <span class="w-1.5 h-1.5 rounded-full bg-[#14566A]"></span>
                        <span>WORLD ENVIRONMENT</span>
                    </span>
                </div>

            </article>

            <!-- -------------------------------------------------------------
                 MIDDLE ROW: Two Equal Medium-Sized Images Side by Side
                 02. THE EXPERIMENT & 03. THE FORGE
                 ------------------------------------------------------------- -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8 lg:gap-10">

                <!-- 02. THE EXPERIMENT -->
                <article class="group relative rounded-xl sm:rounded-2xl overflow-hidden border-2 border-[#D5C6AA] bg-[#FAF6EE] shadow-[0_12px_32px_rgba(40,30,15,0.06),_0_2px_8px_rgba(40,30,15,0.03)] transition-all duration-300 hover:border-[#BFAF93] hover:shadow-[0_16px_40px_rgba(40,30,15,0.10)] flex flex-col justify-between">
                    
                    <!-- Medium Image Viewport (4:3 Classic Artbook Aspect) -->
                    <div class="relative overflow-hidden w-full aspect-[4/3] bg-[#141E22]">
                        <img 
                            src="{{ asset('images/gallery-experiment.jpg') }}" 
                            alt="Reaktoria Low-Poly Medieval Alchemy Botanical Conservatory with Iridescent Reagents and Glass Alembics" 
                            class="w-full h-full object-cover select-none transition-transform duration-700 ease-out group-hover:scale-[1.025]"
                            loading="lazy"
                        />
                        <!-- Subtle Archival Ring Edge -->
                        <div class="absolute inset-0 ring-1 ring-inset ring-black/10 pointer-events-none"></div>
                    </div>

                    <!-- Archival Caption Docket -->
                    <div class="px-4 py-3 sm:px-6 sm:py-3.5 bg-[#FAF6EE] border-t border-[#E5DAC6] flex flex-wrap items-center justify-between gap-3 select-none">
                        <div class="flex items-center gap-3">
                            <span class="font-mono text-xs sm:text-sm font-bold text-[#8C6211] tracking-wider">02</span>
                            <span class="text-stone-300">&bull;</span>
                            <h3 class="font-display font-black text-sm sm:text-base text-reaktoria-deep-forest tracking-wider uppercase">
                                THE EXPERIMENT
                            </h3>
                        </div>
                        
                        <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded font-mono text-[10px] sm:text-xs font-semibold uppercase tracking-wider text-[#5A452E] bg-[#EBE0CD] border border-[#D5C6AA]">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#42A9C6]"></span>
                            <span>ALCHEMY WORKSPACE</span>
                        </span>
                    </div>

                </article>

                <!-- 03. THE FORGE -->
                <article class="group relative rounded-xl sm:rounded-2xl overflow-hidden border-2 border-[#D5C6AA] bg-[#FAF6EE] shadow-[0_12px_32px_rgba(40,30,15,0.06),_0_2px_8px_rgba(40,30,15,0.03)] transition-all duration-300 hover:border-[#BFAF93] hover:shadow-[0_16px_40px_rgba(40,30,15,0.10)] flex flex-col justify-between">
                    
                    <!-- Medium Image Viewport (4:3 Classic Artbook Aspect) -->
                    <div class="relative overflow-hidden w-full aspect-[4/3] bg-[#141E22]">
                        <img 
                            src="{{ asset('images/gallery-forge.jpg') }}" 
                            alt="Reaktoria Low-Poly Medieval Fortress Armory Forge with Handcrafted Elemental Weapons and Anvil" 
                            class="w-full h-full object-cover select-none transition-transform duration-700 ease-out group-hover:scale-[1.025]"
                            loading="lazy"
                        />
                        <!-- Subtle Archival Ring Edge -->
                        <div class="absolute inset-0 ring-1 ring-inset ring-black/10 pointer-events-none"></div>
                    </div>

                    <!-- Archival Caption Docket -->
                    <div class="px-4 py-3 sm:px-6 sm:py-3.5 bg-[#FAF6EE] border-t border-[#E5DAC6] flex flex-wrap items-center justify-between gap-3 select-none">
                        <div class="flex items-center gap-3">
                            <span class="font-mono text-xs sm:text-sm font-bold text-[#8C6211] tracking-wider">03</span>
                            <span class="text-stone-300">&bull;</span>
                            <h3 class="font-display font-black text-sm sm:text-base text-reaktoria-deep-forest tracking-wider uppercase">
                                THE FORGE
                            </h3>
                        </div>
                        
                        <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded font-mono text-[10px] sm:text-xs font-semibold uppercase tracking-wider text-[#5A452E] bg-[#EBE0CD] border border-[#D5C6AA]">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#B84E1F]"></span>
                            <span>BLACKSMITH WORKSHOP</span>
                        </span>
                    </div>

                </article>

            </div>

            <!-- -------------------------------------------------------------
                 04. THE ADVENTURE (Large Wide Panoramic Spanning Full Width)
                 ------------------------------------------------------------- -->
            <article class="group relative rounded-xl sm:rounded-2xl overflow-hidden border-2 border-[#D5C6AA] bg-[#FAF6EE] shadow-[0_12px_32px_rgba(40,30,15,0.06),_0_2px_8px_rgba(40,30,15,0.03)] transition-all duration-300 hover:border-[#BFAF93] hover:shadow-[0_16px_40px_rgba(40,30,15,0.10)]">
                
                <!-- Panoramic Image Viewport -->
                <div class="relative overflow-hidden w-full aspect-[16/10] sm:aspect-[2/1] lg:aspect-[21/9] bg-[#141E22]">
                    <img 
                        src="{{ asset('images/gallery-adventure.jpg') }}" 
                        alt="Reaktoria Low-Poly Panoramic Realm Expedition — Ancient Arch Bridge, Waterfall Canyon, and Floating Sky Islands" 
                        class="w-full h-full object-cover select-none transition-transform duration-700 ease-out group-hover:scale-[1.025]"
                        loading="lazy"
                    />
                    <!-- Subtle Archival Ring Edge -->
                    <div class="absolute inset-0 ring-1 ring-inset ring-black/10 pointer-events-none"></div>
                </div>

                <!-- Archival Caption Docket -->
                <div class="px-4 py-3 sm:px-6 sm:py-3.5 bg-[#FAF6EE] border-t border-[#E5DAC6] flex flex-wrap items-center justify-between gap-3 select-none">
                    <div class="flex items-center gap-3">
                        <span class="font-mono text-xs sm:text-sm font-bold text-[#8C6211] tracking-wider">04</span>
                        <span class="text-stone-300">&bull;</span>
                        <h3 class="font-display font-black text-sm sm:text-base text-reaktoria-deep-forest tracking-wider uppercase">
                            THE ADVENTURE
                        </h3>
                    </div>
                    
                    <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded font-mono text-[10px] sm:text-xs font-semibold uppercase tracking-wider text-[#5A452E] bg-[#EBE0CD] border border-[#D5C6AA]">
                        <span class="w-1.5 h-1.5 rounded-full bg-[#2F6B3C]"></span>
                        <span>FIELD EXPLORATION</span>
                    </span>
                </div>

            </article>

        </div>

    </div>

</section>
