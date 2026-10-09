<section id="adventure" class="relative py-16 sm:py-20 lg:py-28 overflow-hidden bg-gradient-to-b from-[#EAE1D3] via-[#E6DDD0] to-[#DFD4C2]">

    <!-- Anchor Aliases for Global Navbar Navigation (#adventure, #forge) -->
    <span id="forge" class="absolute -top-24 pointer-events-none" aria-hidden="true"></span>

    <!-- Environmental Low-Poly Forge Background Layer (Controlled Opacity & Atmospheric Depth) -->
    <div class="absolute inset-0 z-0">
        <!-- Wide Low-Poly Blacksmith Forge Environment (Stone walls, wooden beams, furnace, anvil, weapon racks) -->
        <img 
            src="{{ asset('images/backgrounds/forge-bg.jpg') }}" 
            alt="Reaktoria Low-Poly Medieval Blacksmith Forge Workshop" 
            class="w-full h-full object-cover object-center sm:object-[center_40%] select-none pointer-events-none opacity-45 sm:opacity-50 contrast-[0.95] saturate-[0.92] brightness-[1.01]"
        />

        <!-- Seamless Environmental Transition from Section 3 (#EAE1D3 alchemist tone into warm forge stone) -->
        <div class="absolute inset-x-0 top-0 h-44 bg-gradient-to-b from-[#EAE1D3] via-[#EAE1D3]/85 via-[#E6DDD0]/60 to-transparent pointer-events-none"></div>

        <!-- Subtle Workshop Architecture Ambiance: Left timber doorway & Right stone forge warmth -->
        <div class="absolute inset-y-0 left-0 w-24 sm:w-36 bg-gradient-to-r from-[#D8CCA8]/35 to-transparent pointer-events-none"></div>
        <div class="absolute inset-y-0 right-0 w-24 sm:w-36 bg-gradient-to-l from-[#D8CCA8]/35 to-transparent pointer-events-none"></div>

        <!-- Faint Workshop Stipple & Ember Dust Atmosphere -->
        <div class="absolute inset-0 pointer-events-none opacity-[0.05] select-none text-[#7C3D12] overflow-hidden">
            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                <defs>
                    <pattern id="forge-stipple" width="32" height="32" patternUnits="userSpaceOnUse">
                        <circle cx="4" cy="4" r="0.8" fill="currentColor" opacity="0.6" />
                        <circle cx="20" cy="18" r="0.6" fill="currentColor" opacity="0.4" />
                        <circle cx="28" cy="10" r="0.5" fill="currentColor" opacity="0.3" />
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#forge-stipple)" />
            </svg>
        </div>

        <!-- Ambient Hearth Glow (Warm amber light emanating from the forge furnace) -->
        <div class="absolute top-1/4 right-0 w-[42rem] h-[42rem] bg-[radial-gradient(circle,_rgba(240,140,50,0.18)_0%,_rgba(215,90,30,0.06)_45%,_transparent_70%)] pointer-events-none"></div>
        <div class="absolute bottom-1/4 left-1/3 w-[36rem] h-[36rem] bg-[radial-gradient(circle,_rgba(245,170,70,0.12)_0%,_transparent_65%)] pointer-events-none"></div>

        <!-- Window to the Realm: Gentle daylight haze from the open archway on the left -->
        <div class="absolute top-1/3 left-0 w-80 h-80 bg-[radial-gradient(circle,_rgba(120,195,140,0.09)_0%,_transparent_65%)] pointer-events-none"></div>

        <!-- Soft Base Room Vignette & Bottom Blending -->
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_transparent_55%,_rgba(200,180,155,0.20)_100%)] pointer-events-none"></div>
        <div class="absolute bottom-0 inset-x-0 h-32 bg-gradient-to-t from-[#DFD4C2] via-[#E2D7C5]/70 to-transparent pointer-events-none"></div>
    </div>

    <!-- Main Content Container (Occupies 70–80% viewport on desktop, centered) -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Two-Column Editorial Composition: Left Forge Synthesis Ledger, Right Forged Weapon Showcase -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">
            
            <!-- LEFT: Blacksmith's Ledger Folio & Progression Narrative -->
            <div class="lg:col-span-6 relative">
                
                <!-- Blacksmith Craft Ledger Parchment Surface (Warm, authentic craftsmanship folio) -->
                <div class="relative p-6 sm:p-8 bg-gradient-to-br from-[#FAF5E8]/92 via-[#F6EEE0]/88 to-[#FAF4E6]/90 rounded-2xl border border-[#D6C5A2]/75 ring-1 ring-inset ring-[#EFE5CD]/50 shadow-[0_12px_32px_rgba(65,45,25,0.08),_0_2px_6px_rgba(65,45,25,0.04)] space-y-6">
                    
                    <!-- Faint Parchment Corner Accents -->
                    <span class="absolute top-2.5 left-3 text-[#BFAF89]/35 font-serif text-xs select-none pointer-events-none">&plus;</span>
                    <span class="absolute top-2.5 right-3 text-[#BFAF89]/35 font-serif text-xs select-none pointer-events-none">&plus;</span>
                    <span class="absolute bottom-2.5 left-3 text-[#BFAF89]/35 font-serif text-xs select-none pointer-events-none">&plus;</span>
                    <span class="absolute bottom-2.5 right-3 text-[#BFAF89]/35 font-serif text-xs select-none pointer-events-none">&plus;</span>

                    <!-- Craft Ledger Header (Quiet In-World Metadata) -->
                    <div class="flex items-center justify-between border-b border-[#E2D4B5]/45 pb-2.5 text-xs select-none">
                        <span class="font-mono text-[11px] font-medium text-[#8C6D4A]/80 tracking-widest uppercase flex items-center gap-1.5">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#C05621]/70"></span>
                            Blacksmith&apos;s Forge Ledger
                        </span>
                        <span class="font-mono text-[10px] text-[#8C6D4A]/55 tracking-wider">
                            Folio 04 &bull; Synthesis
                        </span>
                    </div>

                    <!-- Eyebrow, Main Heading, and Supporting Text -->
                    <div class="space-y-3.5">
                        <div class="inline-flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-[#E06726] animate-pulse"></span>
                            <span class="text-xs font-bold font-body uppercase tracking-[0.2em] text-[#B84E1F]">
                                THE ART OF FORGING
                            </span>
                        </div>

                        <h2 class="font-display font-extrabold text-3xl sm:text-4xl lg:text-[2.75rem] text-reaktoria-deep-forest tracking-tight leading-[1.14]">
                            TURN DISCOVERY <br class="hidden sm:inline" />
                            <span class="text-[#B84E1F]">INTO POWER</span>
                        </h2>

                        <p class="text-base sm:text-lg text-reaktoria-ink/85 leading-relaxed font-body">
                            Every successful reaction can become more than a discovery. Transform chemical combinations into unique weapons and bring their power into the Elemental Realm.
                        </p>
                    </div>

                    <!-- Core Story Progression (Unboxed 3-Step Process: Discover -> Forge -> Wield) -->
                    <div class="relative pl-7 sm:pl-8 space-y-6 before:absolute before:left-2.5 sm:before:left-3 before:top-3 before:bottom-3 before:w-[2px] before:bg-gradient-to-b before:from-[#1B7088]/60 before:via-[#C05621]/60 before:to-[#2F6B3C]/60 pt-1">
                        
                        <!-- 01 — DISCOVER -->
                        <div class="relative group">
                            <!-- Gameplay Step Node Marker -->
                            <div class="absolute -left-7 sm:-left-8 top-0.5 w-5 h-5 rounded-full bg-[#FAF6EE] border-2 border-[#1B7088] text-[#1B7088] flex items-center justify-center shadow-xs group-hover:scale-110 transition-transform">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#1B7088]"></span>
                            </div>
                            <div class="space-y-1">
                                <div class="flex items-center gap-2">
                                    <span class="font-mono text-xs font-bold text-[#1B7088]">01 &mdash;</span>
                                    <h3 class="font-display font-bold text-sm sm:text-base tracking-wider text-reaktoria-deep-forest uppercase">
                                        DISCOVER
                                    </h3>
                                    <span class="font-mono text-[11px] font-semibold text-[#1B7088]/70 hidden sm:inline">&bull; Reaction Identified</span>
                                </div>
                                <p class="text-xs sm:text-sm text-reaktoria-ink-muted leading-relaxed">
                                    Understand the result of a successful chemical reaction.
                                </p>
                            </div>
                        </div>

                        <!-- 02 — FORGE -->
                        <div class="relative group">
                            <!-- Gameplay Step Node Marker -->
                            <div class="absolute -left-7 sm:-left-8 top-0.5 w-5 h-5 rounded-full bg-[#FAF6EE] border-2 border-[#C05621] text-[#C05621] flex items-center justify-center shadow-xs group-hover:scale-110 transition-transform">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#C05621]"></span>
                            </div>
                            <div class="space-y-1">
                                <div class="flex items-center gap-2">
                                    <span class="font-mono text-xs font-bold text-[#C05621]">02 &mdash;</span>
                                    <h3 class="font-display font-bold text-sm sm:text-base tracking-wider text-reaktoria-deep-forest uppercase">
                                        FORGE
                                    </h3>
                                    <span class="font-mono text-[11px] font-semibold text-[#C05621]/70 hidden sm:inline">&bull; Craft Weapons &amp; Items</span>
                                </div>
                                <p class="text-xs sm:text-sm text-reaktoria-ink-muted leading-relaxed">
                                    Transform the discovery into a unique weapon or item.
                                </p>
                            </div>
                        </div>

                        <!-- 03 — WIELD -->
                        <div class="relative group">
                            <!-- Gameplay Step Node Marker -->
                            <div class="absolute -left-7 sm:-left-8 top-0.5 w-5 h-5 rounded-full bg-[#FAF6EE] border-2 border-[#2F6B3C] text-[#2F6B3C] flex items-center justify-center shadow-xs group-hover:scale-110 transition-transform">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#2F6B3C]"></span>
                            </div>
                            <div class="space-y-1">
                                <div class="flex items-center gap-2">
                                    <span class="font-mono text-xs font-bold text-[#2F6B3C]">03 &mdash;</span>
                                    <h3 class="font-display font-bold text-sm sm:text-base tracking-wider text-reaktoria-deep-forest uppercase">
                                        WIELD
                                    </h3>
                                    <span class="font-mono text-[11px] font-semibold text-[#2F6B3C]/70 hidden sm:inline">&bull; Battle &amp; Adventure</span>
                                </div>
                                <p class="text-xs sm:text-sm text-reaktoria-ink-muted leading-relaxed">
                                    Bring your creation into the adventure and use its power in battle.
                                </p>
                            </div>
                        </div>

                    </div>

                    <!-- Ledger Footnote: Grounded Chemistry-to-Weapon Record -->
                    <div class="pt-2.5 border-t border-[#E8DCBF]/45 flex items-center justify-between text-[11px] font-mono text-[#8C6D4A]/70">
                        <span>Blacksmith&apos;s Registry</span>
                        <span>Reaction: Fe + S &rarr; FeS &rarr; Pyros Blade</span>
                    </div>

                </div>

            </div>

            <!-- RIGHT: Low-Poly Forge Scene & Weapon Showcase -->
            <div class="lg:col-span-6 relative">
                
                <!-- Medieval Craftsman's Field Plate (Grounded frame matching section aesthetic) -->
                <div class="relative rounded-2xl overflow-hidden border-2 border-[#D5C6AA]/85 shadow-[0_18px_40px_rgba(65,45,25,0.12),_0_2px_8px_rgba(65,45,25,0.05)] bg-[#EFE7D8]/60 transition-transform duration-500 hover:scale-[1.01]">
                    
                    <!-- Ambient Glow Emphasizing the Glowing Forged Sword on the Anvil -->
                    <div class="absolute top-[52%] left-[60%] -translate-x-1/2 -translate-y-1/2 w-48 h-48 rounded-full bg-[radial-gradient(circle,_rgba(255,160,50,0.36)_0%,_rgba(224,103,38,0.12)_45%,_transparent_70%)] pointer-events-none animate-pulse"></div>

                    <!-- Main Showcase Artwork (Low-poly forge scene: glowing blade on anvil, sulfur crystals, iron ore, warm furnace) -->
                    <img 
                        src="{{ asset('images/forged-showcase.jpg') }}" 
                        alt="Reaktoria Low-Poly Medieval Forge Workshop with Glowing Forged Sword on Anvil, Sulfur Crystals, and Furnace" 
                        class="w-full h-auto aspect-[4/3] object-cover object-center select-none"
                        loading="lazy"
                    />

                    <!-- In-World Status Badge: Forged Weapon -->
                    <div class="absolute top-3 left-3 sm:top-4 sm:left-4 z-10 flex items-center gap-2 px-3 py-1.5 rounded-lg bg-[#FAF6EE]/92 backdrop-blur-md border border-[#D5C6AA] shadow-xs text-xs font-mono font-semibold text-[#8C3A14] select-none">
                        <span class="w-2 h-2 rounded-full bg-[#E06726] animate-pulse"></span>
                        <span>Forged Weapon &bull; Pyros Blade</span>
                    </div>

                    <!-- Elemental Reaction Affinity Badge -->
                    <div class="absolute top-3 right-3 sm:top-4 sm:right-4 z-10 hidden sm:flex items-center gap-1.5 px-2.5 py-1 rounded-md bg-[#FAF6EE]/92 backdrop-blur-md border border-[#D5C6AA] text-xs font-mono font-medium text-reaktoria-wood-dark select-none">
                        <span>Reaction: FeS &bull; Heat Infusion</span>
                    </div>

                    <!-- Compact Floating Chemistry-to-Weapon Connection Widget (Desktop) -->
                    <div class="absolute bottom-16 right-4 hidden md:flex flex-col items-center gap-1 px-3 py-2.5 rounded-xl bg-[#FAF6EE]/92 backdrop-blur-md border border-[#D5C6AA]/90 shadow-md text-center font-mono text-[11px] select-none z-10">
                        <span class="text-[9px] uppercase tracking-widest text-[#8C6211] font-bold">Transformation</span>
                        <div class="flex items-center gap-1 font-bold text-[#14566A]">
                            <span class="px-1.5 py-0.5 rounded bg-white/70 border border-[#CBD8DF]">[ Fe ]</span>
                            <span class="text-stone-400 font-normal">+</span>
                            <span class="px-1.5 py-0.5 rounded bg-white/70 border border-[#CBD8DF]">[ S ]</span>
                        </div>
                        <span class="text-[#B84E1F] text-xs leading-none font-bold">&darr;</span>
                        <div class="px-2 py-0.5 rounded bg-[#EAF2F5] border border-[#BAD1DB] text-[#1B7088] font-bold">
                            FeS
                        </div>
                        <span class="text-[#B84E1F] text-xs leading-none font-bold">&darr;</span>
                        <div class="px-2 py-0.5 rounded bg-[#FBEFE5] border border-[#EAC9B0] text-[#B84E1F] font-bold flex items-center gap-1">
                            <span>⚔️</span>
                            <span>FORGED RESULT</span>
                        </div>
                    </div>

                    <!-- Storytelling Plate Footer: Full Responsive Chemistry-to-Weapon Connection -->
                    <div class="px-4 sm:px-5 py-3.5 bg-[#FAF6EE]/98 border-t border-[#D5C6AA]/80 flex flex-wrap items-center justify-between gap-2.5 text-xs">
                        <div class="flex items-center gap-2 text-reaktoria-deep-forest font-display font-bold">
                            <span class="text-[#B84E1F]">⚒️</span>
                            <span>Crafting Synthesis</span>
                        </div>
                        
                        <!-- Chemistry to Weapon Progression Formula -->
                        <div class="flex items-center gap-1.5 sm:gap-2 font-mono text-[11px] font-semibold">
                            <!-- [Fe] + [S] -->
                            <div class="flex items-center gap-1 bg-[#F1EBE0] px-2 py-1 rounded-md border border-[#D8CCB5] text-[#14566A]">
                                <span>[Fe]</span>
                                <span class="text-stone-400">+</span>
                                <span class="text-[#8C6211]">[S]</span>
                            </div>
                            <span class="text-[#B84E1F] font-bold">&rarr;</span>
                            <!-- Reaction Vessel FeS -->
                            <div class="bg-[#EAF3F7] px-2 py-1 rounded-md border border-[#BBD8E4] text-[#14566A]">
                                <span>Reaction Vessel &bull; FeS</span>
                            </div>
                            <span class="text-[#B84E1F] font-bold">&rarr;</span>
                            <!-- Forged Weapon -->
                            <div class="flex items-center gap-1 bg-[#FBF0E6] px-2.5 py-1 rounded-md border border-[#EACBB3] text-[#B84E1F] font-bold">
                                <span>⚔️ Forged Weapon</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
