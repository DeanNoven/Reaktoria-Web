<section id="gameplay" class="relative py-10 sm:py-14 lg:py-16 overflow-hidden bg-gradient-to-b from-[#DFD4C2] via-[#E6EDE1] to-[#DDE9D7]">

    <!-- Anchor Aliases for Global Navbar Navigation (#gameplay, #battle) -->
    <span id="battle" class="absolute -top-20 pointer-events-none" aria-hidden="true"></span>

    <!-- Environmental Background Transition Layer (Elemental Wilderness Beyond the Adventure) -->
    <div class="absolute inset-0 z-0">
        <!-- Wide Low-Poly Elemental Wilderness Environment Background (Distant World Atmospheric Styling) -->
        <img 
            src="{{ asset('images/backgrounds/gameplay-bg.jpg') }}" 
            alt="Reaktoria Low-Poly Elemental Wilderness Environmental Background" 
            class="w-full h-full object-cover object-center select-none pointer-events-none opacity-20 sm:opacity-25 blur-[1.5px] scale-[1.02] contrast-[0.80] saturate-[0.62] brightness-[1.03]"
            loading="lazy"
        />

        <!-- Seamless Environmental Transition from Section 4 (#DFD4C2 forge stone into bright meadow green) -->
        <div class="absolute inset-x-0 top-0 h-32 sm:h-40 bg-gradient-to-b from-[#DFD4C2] via-[#DFD4C2]/85 via-[#E6EDE1]/60 to-transparent pointer-events-none"></div>

        <!-- Atmospheric Distance Haze Veil (Diffuses sharp geometric edges into distant aerial perspective) -->
        <div class="absolute inset-0 bg-[#E6EDE1]/30 pointer-events-none"></div>

        <!-- Gentle Sunlit Sky & Meadow Ambiance -->
        <div class="absolute top-1/6 right-1/4 w-[42rem] h-[30rem] bg-[radial-gradient(circle,_rgba(255,250,225,0.45)_0%,_transparent_65%)] pointer-events-none"></div>
        <div class="absolute bottom-1/4 left-1/5 w-[36rem] h-[36rem] bg-[radial-gradient(circle,_rgba(140,205,120,0.12)_0%,_transparent_65%)] pointer-events-none"></div>

        <!-- Central Daylight Clearing (Gently softens the middle area behind the main gameplay card while preserving flanking landscape silhouettes) -->
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_rgba(230,237,225,0.45)_0%,_rgba(230,237,225,0.15)_55%,_transparent_80%)] pointer-events-none"></div>

        <!-- Left & Right Soft Framing Tones -->
        <div class="absolute inset-y-0 left-0 w-24 sm:w-36 bg-gradient-to-r from-[#DFD4C2]/35 to-transparent pointer-events-none"></div>
        <div class="absolute inset-y-0 right-0 w-24 sm:w-36 bg-gradient-to-l from-[#DFD4C2]/35 to-transparent pointer-events-none"></div>

        <!-- Faint Outdoor Meadow Stipple Atmosphere -->
        <div class="absolute inset-0 pointer-events-none opacity-[0.035] select-none text-[#2F6B3C] overflow-hidden">
            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                <defs>
                    <pattern id="gameplay-stipple" width="36" height="36" patternUnits="userSpaceOnUse">
                        <circle cx="6" cy="6" r="0.8" fill="currentColor" opacity="0.4" />
                        <circle cx="24" cy="20" r="0.6" fill="currentColor" opacity="0.3" />
                        <circle cx="30" cy="10" r="0.5" fill="currentColor" opacity="0.3" />
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#gameplay-stipple)" />
            </svg>
        </div>

        <!-- Ambient Room Vignette & Bottom Blending -->
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_transparent_60%,_rgba(180,200,170,0.15)_100%)] pointer-events-none"></div>
        <div class="absolute bottom-0 inset-x-0 h-24 sm:h-28 bg-gradient-to-t from-[#DDE9D7] via-[#DFEAD9]/70 to-transparent pointer-events-none"></div>
    </div>

    <!-- Main Content Container -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Asymmetrical Editorial Header (Strengthened Title, Compact Vertical Footprint) -->
        <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-4 sm:gap-6 mb-5 sm:mb-6">
            
            <div class="space-y-2.5 max-w-2xl">
                <!-- Eyebrow with Meadow Pulse Indicator -->
                <div class="inline-flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-reaktoria-forest animate-pulse"></span>
                    <span class="text-xs font-bold font-body uppercase tracking-[0.2em] text-[#2F6B3C]">
                        THE ADVENTURE
                    </span>
                </div>

                <!-- Main Heading (Strengthened by ~18%, authoritative editorial presence) -->
                <h2 class="font-display font-extrabold text-3xl sm:text-4xl lg:text-[3.25rem] text-reaktoria-deep-forest tracking-tight leading-[1.08]">
                    DISCOVER. REACT. <span class="text-[#B84E1F]">BATTLE.</span>
                </h2>

                <!-- Supporting Copy -->
                <p class="text-sm sm:text-base lg:text-lg text-reaktoria-ink/85 leading-relaxed font-body">
                    Explore the Elemental Realm, experiment with real chemistry, and bring your discoveries into the field. Every reaction can change how you face the next encounter.
                </p>
            </div>

            <!-- In-World Stage Telemetry Badge (Quiet In-Game Metadata) -->
            <div class="hidden lg:flex items-center gap-2.5 font-mono text-xs text-[#5D6B50] bg-[#FAF6EE]/85 backdrop-blur-md px-3.5 py-1.5 rounded-xl border border-[#D5C6AA]/80 shadow-xs self-start lg:self-end select-none">
                <span class="w-2 h-2 rounded-full bg-[#2F6B3C]"></span>
                <span class="font-bold text-reaktoria-deep-forest">Active Field Stage</span>
                <span class="text-stone-300">&bull;</span>
                <span>Wolfhaven Outskirts Crossing</span>
            </div>

        </div>

        <!-- Dominant Widescreen Environmental Gameplay Viewport (Compact Height, High Impact) -->
        <div class="relative rounded-2xl sm:rounded-3xl overflow-hidden border-2 border-[#D5C6AA]/90 shadow-[0_16px_40px_rgba(35,50,30,0.12),_0_2px_8px_rgba(35,50,30,0.05)] bg-[#EFECE3] transition-transform duration-500 hover:scale-[1.004]">
            
            <!-- High-Resolution Low-Poly Gameplay Scene Artwork (Compact Panoramic Aspect Ratio) -->
            <img 
                src="{{ asset('images/gameplay-adventure.jpg') }}" 
                alt="Reaktoria Low-Poly Medieval Adventure Gameplay in Forest Clearing with Chemical Weapon and Enemy Encounter" 
                class="w-full h-auto aspect-[16/8.6] sm:aspect-[16/8.4] object-cover object-[center_56%] select-none"
                loading="lazy"
            />

            <!-- Soft Ambient In-Game Lens Vignette -->
            <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_transparent_65%,_rgba(35,50,25,0.14)_100%)] pointer-events-none"></div>

            <!-- IN-GAME HUD ELEMENT 1: Active Quest Marker (Top Left of Viewport) -->
            <div class="absolute top-3 left-3 sm:top-4 sm:left-4 z-20 flex items-center gap-2 sm:gap-2.5 px-3 py-1.5 rounded-xl bg-[#FAF6EE]/92 backdrop-blur-md border border-[#D5C6AA]/90 shadow-md text-xs font-mono select-none">
                <span class="w-2 h-2 rounded-full bg-[#2F6B3C]"></span>
                <span class="text-[10px] font-bold uppercase tracking-wider text-[#7A674D]">[ QUEST ]</span>
                <span class="font-display font-bold text-reaktoria-deep-forest text-xs sm:text-sm tracking-wide">FOREST PATH</span>
            </div>

            <!-- IN-GAME HUD ELEMENT 2: Environmental Landmark Marker (Top Right of Viewport, Desktop) -->
            <div class="absolute top-3 right-3 sm:top-4 sm:right-4 z-20 hidden md:flex items-center gap-2 px-3 py-1.5 rounded-xl bg-[#FAF6EE]/90 backdrop-blur-md border border-[#D5C6AA]/80 text-[11px] font-mono text-[#5A6F54] select-none shadow-sm">
                <span>🧭</span>
                <span class="font-semibold text-reaktoria-deep-forest">River Crossing &bull; Wolfhaven Lane</span>
            </div>

            <!-- IN-GAME HUD ELEMENT 3: Hostile Encounter Marker (Middle Right of Viewport, near Wildling Scouts) -->
            <div class="absolute top-[30%] sm:top-[35%] right-3 sm:right-6 z-20 hidden sm:flex items-center gap-2 px-3 py-1.5 rounded-xl bg-[#FAF6EE]/94 backdrop-blur-md border border-[#D5C6AA]/90 shadow-md text-xs font-mono select-none">
                <span class="w-2 h-2 rounded-full bg-[#B84E1F] animate-pulse"></span>
                <div class="flex flex-col">
                    <span class="text-[9px] uppercase tracking-wider text-[#B84E1F] font-bold">[ ENCOUNTER ]</span>
                    <span class="font-display font-bold text-reaktoria-deep-forest text-xs tracking-wide">WILDLING SCOUTS</span>
                </div>
            </div>

            <!-- IN-GAME HUD ELEMENT 4: Player Weapon & Chemical Reaction Telemetry (Lower Left of Viewport, near Adventurer) -->
            <div class="absolute bottom-3 left-3 sm:bottom-4 sm:left-4 z-20 hidden sm:flex flex-col gap-1 p-2.5 sm:p-3 rounded-xl bg-[#FAF6EE]/95 backdrop-blur-md border border-[#D5C6AA]/90 shadow-lg text-xs font-mono select-none max-w-xs">
                <div class="flex items-center justify-between gap-4 text-[10px] font-bold uppercase tracking-wider">
                    <span class="text-[#8C6211]">[ WEAPON ]</span>
                    <span class="text-[#14566A]">[ REACTION READY ]</span>
                </div>
                <div class="flex items-center justify-between gap-3 font-semibold">
                    <span class="font-display font-bold text-reaktoria-deep-forest flex items-center gap-1.5 text-xs sm:text-sm">
                        <span class="text-[#B84E1F]">⚔️</span> PYROS BLADE
                    </span>
                    <span class="text-[11px] font-mono font-bold text-[#14566A] bg-[#EAF2F5] px-2 py-0.5 rounded border border-[#BAD1DB]">
                        Fe + S &rarr; FeS
                    </span>
                </div>
                <span class="text-[10px] text-reaktoria-ink-muted">Elemental Heat &bull; Effective vs. Forest Encounters</span>
            </div>

            <!-- MOBILE HUD FALLBACK STRIP (Displays neatly below the image on mobile so visuals stay crisp and unobstructed) -->
            <div class="sm:hidden px-3.5 py-2.5 bg-[#FAF6EE]/98 border-t border-[#D5C6AA]/80 flex flex-wrap items-center justify-between gap-2 text-xs font-mono">
                <div class="flex items-center gap-1.5 text-[#14566A]">
                    <span class="font-bold text-[10px] text-[#8C6211]">[ WEAPON ]</span>
                    <span class="font-bold text-reaktoria-deep-forest">PYROS BLADE</span>
                </div>
                <div class="flex items-center gap-1 text-[11px] text-[#14566A] bg-[#EAF2F5] px-2 py-0.5 rounded border border-[#BAD1DB] font-bold">
                    <span>Fe + S &rarr; FeS</span>
                </div>
                <div class="flex items-center gap-1 text-[10px] text-[#B84E1F] font-bold">
                    <span>[ ENCOUNTER ]</span>
                    <span>Wildling Scouts</span>
                </div>
            </div>

        </div>

        <!-- Integrated Adventure Progression Sequence (Field Journal Sequence Strip, One Continuous Flow) -->
        <div class="mt-4 sm:mt-5 p-4 sm:p-5 bg-gradient-to-r from-[#FAF6EE]/95 via-[#F6F0E2]/92 to-[#FAF6EE]/95 rounded-xl border border-[#D6C5A2]/80 shadow-[0_6px_20px_rgba(40,55,30,0.05)]">
            
            <!-- Continuous 3-Step Gameplay Sequence -->
            <div class="flex flex-col md:flex-row items-stretch md:items-center justify-between gap-3.5 md:gap-2">
                
                <!-- 01 — EXPLORE -->
                <div class="flex items-start gap-3 flex-1 group">
                    <span class="font-mono text-xs font-bold text-[#2F6B3C] bg-[#E8F2E4] px-2 py-0.5 rounded-md border border-[#C6DCBF] shrink-0 group-hover:scale-105 transition-transform">
                        01
                    </span>
                    <div class="space-y-0.5">
                        <div class="flex items-center gap-1.5">
                            <h4 class="font-display font-bold text-xs sm:text-sm tracking-wider uppercase text-reaktoria-deep-forest">
                                EXPLORE
                            </h4>
                            <span class="font-mono text-[10px] font-semibold text-[#2F6B3C]/75">&bull; Discovery</span>
                        </div>
                        <p class="text-xs text-reaktoria-ink-muted leading-relaxed">
                            Discover the world and find raw elemental opportunities.
                        </p>
                    </div>
                </div>

                <!-- Connecting Flow Indicator (Desktop) -->
                <div class="hidden md:flex items-center justify-center text-[#B89B72]/70 px-2 shrink-0 select-none">
                    <span class="font-mono text-sm tracking-tighter text-[#B89B72]">&bull;&bull;&bull;&rarr;</span>
                </div>

                <!-- 02 — EXPERIMENT -->
                <div class="flex items-start gap-3 flex-1 border-t md:border-t-0 pt-3 md:pt-0 border-[#E2D4B5]/50 group">
                    <span class="font-mono text-xs font-bold text-[#1B7088] bg-[#EAF2F5] px-2 py-0.5 rounded-md border border-[#BCD4DC] shrink-0 group-hover:scale-105 transition-transform">
                        02
                    </span>
                    <div class="space-y-0.5">
                        <div class="flex items-center gap-1.5">
                            <h4 class="font-display font-bold text-xs sm:text-sm tracking-wider uppercase text-reaktoria-deep-forest">
                                EXPERIMENT
                            </h4>
                            <span class="font-mono text-[10px] font-semibold text-[#1B7088]/75">&bull; Synthesis</span>
                        </div>
                        <p class="text-xs text-reaktoria-ink-muted leading-relaxed">
                            Use chemistry knowledge to create useful reactions.
                        </p>
                    </div>
                </div>

                <!-- Connecting Flow Indicator (Desktop) -->
                <div class="hidden md:flex items-center justify-center text-[#B89B72]/70 px-2 shrink-0 select-none">
                    <span class="font-mono text-sm tracking-tighter text-[#B89B72]">&bull;&bull;&bull;&rarr;</span>
                </div>

                <!-- 03 — BATTLE -->
                <div class="flex items-start gap-3 flex-1 border-t md:border-t-0 pt-3 md:pt-0 border-[#E2D4B5]/50 group">
                    <span class="font-mono text-xs font-bold text-[#B84E1F] bg-[#FBEFE5] px-2 py-0.5 rounded-md border border-[#EAC9B0] shrink-0 group-hover:scale-105 transition-transform">
                        03
                    </span>
                    <div class="space-y-0.5">
                        <div class="flex items-center gap-1.5">
                            <h4 class="font-display font-bold text-xs sm:text-sm tracking-wider uppercase text-reaktoria-deep-forest">
                                BATTLE
                            </h4>
                            <span class="font-mono text-[10px] font-semibold text-[#B84E1F]/75">&bull; Tactical Combat</span>
                        </div>
                        <p class="text-xs text-reaktoria-ink-muted leading-relaxed">
                            Bring the result into combat to face hostile encounters.
                        </p>
                    </div>
                </div>

            </div>

            <!-- Grounded Chemistry-to-Gameplay Connection Bar -->
            <div class="mt-3.5 pt-2.5 border-t border-[#E8DCBF]/50 flex flex-wrap items-center justify-between gap-2.5 text-xs font-mono text-[#8C6D4A]/80">
                <div class="flex items-center gap-2">
                    <span class="text-[#2F6B3C]">🌲</span>
                    <span class="font-bold text-reaktoria-deep-forest">Gameplay Loop</span>
                    <span>&mdash;</span>
                    <span>Chemistry Discovery &rarr; Crafting &rarr; Gameplay Use</span>
                </div>
                <div class="flex items-center gap-1.5 text-[11px] font-semibold bg-[#FAF6EE] px-2.5 py-0.5 rounded border border-[#DFD3BB] text-[#14566A]">
                    <span>[Fe] + [S] &rarr; FeS &rarr; ⚔️ Pyros Blade Wielded</span>
                </div>
            </div>

        </div>

    </div>

</section>
