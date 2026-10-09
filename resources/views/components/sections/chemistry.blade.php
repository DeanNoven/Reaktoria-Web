<section id="chemistry" class="relative py-16 sm:py-20 lg:py-28 overflow-hidden bg-gradient-to-b from-[#F3ECE1] via-[#EFE7DC] to-[#EAE1D3]">

    <!-- Environmental Transition & Subtle Alchemist Workshop Background Layer -->
    <div class="absolute inset-0 z-0">
        <!-- Wide Low-Poly Alchemist Research Chamber Background (Controlled Opacity & Atmospheric Depth) -->
        <img 
            src="{{ asset('images/backgrounds/chemistry-bg.jpg') }}" 
            alt="Reaktoria Low-Poly Medieval Alchemist Research Chamber Environment" 
            class="w-full h-full object-cover object-center select-none pointer-events-none opacity-30 sm:opacity-35 contrast-[0.95] saturate-[0.9] brightness-[1.01]"
            loading="lazy"
        />

        <!-- Gradual transition from Section 2 (#EDF6EB meadow atmosphere into warm stone/wood workshop tones) -->
        <div class="absolute inset-x-0 top-0 h-44 bg-gradient-to-b from-[#EDF6EB] via-[#E7EDE3]/85 via-[#EEE5D5]/65 to-transparent pointer-events-none"></div>

        <!-- Subtle Workshop Architecture Ambiance: Left & Right soft timber framing -->
        <div class="absolute inset-y-0 left-0 w-24 sm:w-36 bg-gradient-to-r from-[#DFD5C2]/40 to-transparent pointer-events-none"></div>
        <div class="absolute inset-y-0 right-0 w-24 sm:w-36 bg-gradient-to-l from-[#DFD5C2]/40 to-transparent pointer-events-none"></div>

        <!-- Watermark Atmosphere: Faint Medieval Workshop Silhouettes (Timber beams, apothecary shelves, glassware & parchment texture) -->
        <div class="absolute inset-0 pointer-events-none opacity-[0.06] select-none text-[#5A381A] overflow-hidden">
            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                <defs>
                    <!-- Faint Parchment Dot Stippling -->
                    <pattern id="workshop-stipple" width="28" height="28" patternUnits="userSpaceOnUse">
                        <circle cx="2" cy="2" r="0.75" fill="currentColor" opacity="0.6" />
                        <circle cx="16" cy="16" r="0.6" fill="currentColor" opacity="0.4" />
                    </pattern>
                </defs>

                <!-- Full surface stipple pattern -->
                <rect width="100%" height="100%" fill="url(#workshop-stipple)" />

                <!-- Faint ceiling timber beams -->
                <line x1="0" y1="50" x2="100%" y2="50" stroke="currentColor" stroke-width="4" stroke-dasharray="80 12" />
                <line x1="0" y1="120" x2="100%" y2="120" stroke="currentColor" stroke-width="2" stroke-dasharray="120 16" />

                <!-- Left-side faint apothecary shelf & glassware silhouettes -->
                <g transform="translate(40, 200)">
                    <rect x="0" y="0" width="140" height="2" fill="currentColor" />
                    <!-- Flask / vial silhouettes -->
                    <path d="M20 0 L20 -15 L26 -28 L30 -28 L30 -34 L16 -34 L16 -28 L20 -28 Z" fill="currentColor" />
                    <path d="M50 0 C45 -12 45 -22 52 -30 L52 -36 L44 -36 L44 -30 C51 -22 51 -12 46 0 Z" fill="currentColor" />
                    <rect x="75" y="-24" width="18" height="24" rx="2" fill="currentColor" />
                    <!-- Botanical herb sprig silhouette -->
                    <path d="M110 0 Q112 -18 120 -30 Q122 -18 114 0 M116 -14 Q124 -16 128 -12 M114 -22 Q106 -24 104 -20" stroke="currentColor" stroke-width="1.5" fill="none" />
                </g>

                <!-- Right-side faint alchemy shelf & alembic silhouettes -->
                <g transform="translate(calc(100% - 180px), 180)">
                    <rect x="0" y="0" width="140" height="2" fill="currentColor" />
                    <path d="M25 0 Q25 -16 35 -24 L35 -32 L28 -32 L28 -36 L42 -36 L42 -32 L35 -32 Q45 -16 45 0 Z" fill="currentColor" />
                    <rect x="60" y="-20" width="14" height="20" rx="1" fill="currentColor" />
                    <rect x="80" y="-28" width="16" height="28" rx="2" fill="currentColor" />
                    <!-- Flask curve -->
                    <path d="M115 0 C110 -10 110 -20 116 -28 L116 -34 L110 -34 L110 -28 C116 -20 116 -10 111 0 Z" fill="currentColor" />
                </g>
            </svg>
        </div>

        <!-- Ambient Atmospheric Glow & Soft Room Vignette (Spatial Depth without darkening) -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[60rem] h-[40rem] bg-[radial-gradient(ellipse,_rgba(255,250,230,0.45)_0%,_transparent_70%)] pointer-events-none"></div>
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_transparent_55%,_rgba(215,200,180,0.22)_100%)] pointer-events-none"></div>

        <!-- Ambient Workshop Lighting: Amber lantern glow at top right, daylight window at top left, warm hearth at bottom -->
        <div class="absolute top-1/4 right-1/6 w-[36rem] h-[36rem] bg-[radial-gradient(circle,_rgba(240,180,85,0.15)_0%,_transparent_65%)] pointer-events-none"></div>
        <div class="absolute top-1/3 left-1/6 w-[32rem] h-[32rem] bg-[radial-gradient(circle,_rgba(140,200,230,0.09)_0%,_transparent_65%)] pointer-events-none"></div>
        <div class="absolute bottom-0 inset-x-0 h-32 bg-gradient-to-t from-[#EAE1D3] to-transparent pointer-events-none"></div>
    </div>

    <!-- Main Content Container -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Two-Column Editorial Composition: Left Alchemist Journal, Right Workshop Artwork -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">
            
            <!-- LEFT: Alchemist's Field Folio & Gameplay Process Steps -->
            <div class="lg:col-span-6 relative">
                
                <!-- Alchemist Field Journal Parchment Surface (Warm, authentic, physically grounded folio) -->
                <div class="relative p-6 sm:p-8 bg-gradient-to-br from-[#FAF5E8]/90 via-[#F7F1DF]/85 to-[#FAF4E6]/88 rounded-2xl border border-[#D6C6A5]/70 ring-1 ring-inset ring-[#EFE5CD]/50 shadow-[0_12px_32px_rgba(65,45,25,0.08),_0_2px_6px_rgba(65,45,25,0.04)] space-y-6">
                    
                    <!-- Faint Parchment Corner Accents (Quiet & elegant) -->
                    <span class="absolute top-2.5 left-3 text-[#BFAF89]/30 font-serif text-xs select-none pointer-events-none">&plus;</span>
                    <span class="absolute top-2.5 right-3 text-[#BFAF89]/30 font-serif text-xs select-none pointer-events-none">&plus;</span>
                    <span class="absolute bottom-2.5 left-3 text-[#BFAF89]/30 font-serif text-xs select-none pointer-events-none">&plus;</span>
                    <span class="absolute bottom-2.5 right-3 text-[#BFAF89]/30 font-serif text-xs select-none pointer-events-none">&plus;</span>

                    <!-- Alchemist Folio Header (Refined, quiet metadata) -->
                    <div class="flex items-center justify-between border-b border-[#E2D4B5]/40 pb-2.5 text-xs select-none">
                        <span class="font-mono text-[11px] font-medium text-[#8C7355]/75 tracking-widest uppercase flex items-center gap-1.5">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#8C7355]/60"></span>
                            Alchemist&apos;s Field Folio
                        </span>
                        <span class="font-mono text-[10px] text-[#8C7355]/50 tracking-wider">
                            Folio 03
                        </span>
                    </div>

                    <!-- Eyebrow, Main Heading, and Supporting Text -->
                    <div class="space-y-3.5">
                        <div class="inline-flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-reaktoria-chemistry animate-pulse"></span>
                            <span class="text-xs font-bold font-body uppercase tracking-[0.2em] text-[#1B7088]">
                                THE ART OF REACTION
                            </span>
                        </div>

                        <h2 class="font-display font-extrabold text-3xl sm:text-4xl lg:text-[2.75rem] text-reaktoria-deep-forest tracking-tight leading-[1.14]">
                            DISCOVER THE <br class="hidden sm:inline" />
                            <span class="text-[#1B7088]">ELEMENTS</span>
                        </h2>

                        <p class="text-base sm:text-lg text-reaktoria-ink/85 leading-relaxed font-body">
                            Combine real chemical elements, observe their reactions, and discover what happens when science becomes part of the adventure.
                        </p>
                    </div>

                    <!-- Chemistry Gameplay Progression (Unboxed 3-Step Process) -->
                    <div class="relative pl-7 sm:pl-8 space-y-6 before:absolute before:left-2.5 sm:before:left-3 before:top-3 before:bottom-3 before:w-[2px] before:bg-gradient-to-b before:from-[#1B7088]/60 before:via-[#8C6211]/60 before:to-[#2F6B3C]/60 pt-1">
                        
                        <!-- 01 — SELECT -->
                        <div class="relative group">
                            <!-- Gameplay Step Node Marker -->
                            <div class="absolute -left-7 sm:-left-8 top-0.5 w-5 h-5 rounded-full bg-[#FAF6EE] border-2 border-[#1B7088] text-[#1B7088] flex items-center justify-center shadow-xs group-hover:scale-110 transition-transform">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#1B7088]"></span>
                            </div>
                            <div class="space-y-1">
                                <div class="flex items-center gap-2">
                                    <span class="font-mono text-xs font-bold text-[#1B7088]">01 &mdash;</span>
                                    <h3 class="font-display font-bold text-sm sm:text-base tracking-wider text-reaktoria-deep-forest uppercase">
                                        SELECT
                                    </h3>
                                </div>
                                <p class="text-xs sm:text-sm text-reaktoria-ink-muted leading-relaxed">
                                    Choose elements from the Elemental Table.
                                </p>
                            </div>
                        </div>

                        <!-- 02 — REACT -->
                        <div class="relative group">
                            <!-- Gameplay Step Node Marker -->
                            <div class="absolute -left-7 sm:-left-8 top-0.5 w-5 h-5 rounded-full bg-[#FAF6EE] border-2 border-[#8C6211] text-[#8C6211] flex items-center justify-center shadow-xs group-hover:scale-110 transition-transform">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#8C6211]"></span>
                            </div>
                            <div class="space-y-1">
                                <div class="flex items-center gap-2">
                                    <span class="font-mono text-xs font-bold text-[#8C6211]">02 &mdash;</span>
                                    <h3 class="font-display font-bold text-sm sm:text-base tracking-wider text-reaktoria-deep-forest uppercase">
                                        REACT
                                    </h3>
                                </div>
                                <p class="text-xs sm:text-sm text-reaktoria-ink-muted leading-relaxed">
                                    Combine them and observe the reaction.
                                </p>
                            </div>
                        </div>

                        <!-- 03 — DISCOVER -->
                        <div class="relative group">
                            <!-- Gameplay Step Node Marker -->
                            <div class="absolute -left-7 sm:-left-8 top-0.5 w-5 h-5 rounded-full bg-[#FAF6EE] border-2 border-[#2F6B3C] text-[#2F6B3C] flex items-center justify-center shadow-xs group-hover:scale-110 transition-transform">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#2F6B3C]"></span>
                            </div>
                            <div class="space-y-1">
                                <div class="flex items-center gap-2">
                                    <span class="font-mono text-xs font-bold text-[#2F6B3C]">03 &mdash;</span>
                                    <h3 class="font-display font-bold text-sm sm:text-base tracking-wider text-reaktoria-deep-forest uppercase">
                                        DISCOVER
                                    </h3>
                                </div>
                                <p class="text-xs sm:text-sm text-reaktoria-ink-muted leading-relaxed">
                                    Learn why the reaction works &mdash; or why it fails.
                                </p>
                            </div>
                        </div>

                    </div>

                    <!-- Journal Footnote: Quiet In-World Record -->
                    <div class="pt-2.5 border-t border-[#E8DCBF]/40 flex items-center justify-between text-[11px] font-mono text-[#8C7355]/60">
                        <span>Reaktoria Field Study</span>
                        <span>Record: Fe + S &rarr; FeS</span>
                    </div>

                </div>

            </div>

            <!-- RIGHT: Alchemist Workshop Environment & Reaction Vessel Focal Point -->
            <div class="lg:col-span-6 relative">
                
                <!-- Medieval Alchemist's Field Plate Frame (Physically grounded frame) -->
                <div class="relative rounded-2xl overflow-hidden border-2 border-[#D5C6AA]/85 shadow-[0_18px_40px_rgba(65,45,25,0.11),_0_2px_8px_rgba(65,45,25,0.05)] bg-[#EFE7D8]/60 transition-transform duration-500 hover:scale-[1.01]">
                    
                    <!-- Ambient Glow Emphasizing the Reaction Vessel Focal Point -->
                    <div class="absolute top-[48%] left-[50%] -translate-x-1/2 -translate-y-1/2 w-44 h-44 rounded-full bg-[radial-gradient(circle,_rgba(255,200,90,0.35)_0%,_rgba(63,163,83,0.1)_45%,_transparent_70%)] pointer-events-none animate-pulse"></div>

                    <!-- Main Workshop Artwork (Untouched Image) -->
                    <img 
                        src="{{ asset('images/alchemist-workshop.jpg') }}" 
                        alt="Reaktoria Low-Poly Medieval Alchemist Workshop with Reaction Flask and Raw Materials" 
                        class="w-full h-auto aspect-[4/3] object-cover object-center select-none"
                        loading="lazy"
                    />

                    <!-- In-World Status Badge (Active Reaction Vessel) -->
                    <div class="absolute top-3 left-3 sm:top-4 sm:left-4 z-10 flex items-center gap-2 px-3 py-1.5 rounded-lg bg-[#FAF6EE]/90 backdrop-blur-md border border-[#D5C6AA] shadow-xs text-xs font-mono font-semibold text-[#14566A] select-none">
                        <span class="w-2 h-2 rounded-full bg-reaktoria-chemistry animate-pulse"></span>
                        <span>Active Reaction Vessel</span>
                    </div>

                    <!-- Subtle Natural Element Inventory Tag -->
                    <div class="absolute top-3 right-3 sm:top-4 sm:right-4 z-10 hidden sm:flex items-center gap-1.5 px-2.5 py-1 rounded-md bg-[#FAF6EE]/90 backdrop-blur-md border border-[#D5C6AA] text-xs font-mono font-medium text-reaktoria-wood-dark select-none">
                        <span>Fe &bull; H &bull; O &bull; Na &bull; Cl</span>
                    </div>

                    <!-- Storytelling Plate Footer: ELEMENTS -> REACTION VESSEL -> DISCOVERY -->
                    <div class="px-4 py-3 bg-[#FAF6EE]/95 border-t border-[#D5C6AA]/80 flex flex-wrap items-center justify-between gap-2 text-xs">
                        <div class="flex items-center gap-2 text-reaktoria-deep-forest font-display font-bold">
                            <span class="text-reaktoria-chemistry">⚗️</span>
                            <span>Reaction Progression</span>
                        </div>
                        
                        <!-- Immediate Storytelling Progression Formula -->
                        <div class="flex items-center gap-1.5 font-mono text-[11px] font-semibold text-[#14566A] bg-[#EAF3F7] px-2.5 py-1 rounded-md border border-[#BBD8E4]">
                            <span class="text-reaktoria-wood-dark">[Fe + S] Elements</span>
                            <span class="text-reaktoria-wood/50">&rarr;</span>
                            <span class="text-[#14566A] font-bold">Reaction Vessel</span>
                            <span class="text-reaktoria-wood/50">&rarr;</span>
                            <span class="text-[#2F6B3C] font-bold">FeS Discovery</span>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
