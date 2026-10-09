<!-- =========================================================================
     WEBSITE FOOTER
     Compact, Premium Medieval Fantasy Closing Page for Reaktoria
     ========================================================================= -->
<footer class="relative w-full bg-[#122A1E] text-reaktoria-cream-dim border-t border-[#234A35]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-9 sm:py-10 lg:py-12">
        
        <!-- Main Footer Navigation & Brand Row -->
        <div class="grid grid-cols-1 md:grid-cols-12 gap-6 sm:gap-8 lg:gap-12 pb-6 sm:pb-8">
            
            <!-- Brand Column -->
            <div class="md:col-span-6 lg:col-span-6 space-y-2 sm:space-y-2.5">
                <!-- Established Brand Logo Treatment -->
                <div class="flex items-center gap-3">
                    <x-ui.logo size="md" href="#top" onclick="window.scrollTo({ top: 0, behavior: 'smooth' }); return false;" />
                </div>

                <!-- Brand Descriptor -->
                <p class="font-mono text-xs font-bold tracking-widest text-reaktoria-gold uppercase">
                    THE ELEMENTAL REALM
                </p>

                <!-- Tagline -->
                <p class="text-sm text-reaktoria-cream-dim/85 font-body leading-relaxed max-w-sm">
                    Discover the elements. Forge your own adventure.
                </p>
            </div>

            <!-- Navigation Links Columns -->
            <div class="md:col-span-6 lg:col-span-6 flex flex-row gap-10 sm:gap-14 lg:gap-16 md:justify-end">
                
                <!-- Navigation Group: EXPLORE -->
                <nav aria-label="Explore Sections" class="space-y-2 sm:space-y-2.5">
                    <h3 class="font-mono text-xs font-bold tracking-widest text-reaktoria-gold uppercase">
                        EXPLORE
                    </h3>
                    <ul class="space-y-1.5 text-sm font-body">
                        <li>
                            <a href="#world" class="text-reaktoria-cream-dim hover:text-white transition-colors focus:outline-none focus:ring-1 focus:ring-reaktoria-gold/50 rounded py-0.5 inline-block">
                                World
                            </a>
                        </li>
                        <li>
                            <a href="#chemistry" class="text-reaktoria-cream-dim hover:text-white transition-colors focus:outline-none focus:ring-1 focus:ring-reaktoria-gold/50 rounded py-0.5 inline-block">
                                Chemistry
                            </a>
                        </li>
                        <li>
                            <a href="#gameplay" class="text-reaktoria-cream-dim hover:text-white transition-colors focus:outline-none focus:ring-1 focus:ring-reaktoria-gold/50 rounded py-0.5 inline-block">
                                Gameplay
                            </a>
                        </li>
                    </ul>
                </nav>

                <!-- Navigation Group: DISCOVER -->
                <nav aria-label="Discover Sections" class="space-y-2 sm:space-y-2.5">
                    <h3 class="font-mono text-xs font-bold tracking-widest text-reaktoria-gold uppercase">
                        DISCOVER
                    </h3>
                    <ul class="space-y-1.5 text-sm font-body">
                        <li>
                            <a href="#features" class="text-reaktoria-cream-dim hover:text-white transition-colors focus:outline-none focus:ring-1 focus:ring-reaktoria-gold/50 rounded py-0.5 inline-block">
                                Features
                            </a>
                        </li>
                        <li>
                            <a href="#game-modes" class="text-reaktoria-cream-dim hover:text-white transition-colors focus:outline-none focus:ring-1 focus:ring-reaktoria-gold/50 rounded py-0.5 inline-block">
                                Game Modes
                            </a>
                        </li>
                        <li>
                            <a href="#archive" class="text-reaktoria-cream-dim hover:text-white transition-colors focus:outline-none focus:ring-1 focus:ring-reaktoria-gold/50 rounded py-0.5 inline-block">
                                Elemental Archive
                            </a>
                        </li>
                        <li>
                            <a href="#gallery" class="text-reaktoria-cream-dim hover:text-white transition-colors focus:outline-none focus:ring-1 focus:ring-reaktoria-gold/50 rounded py-0.5 inline-block">
                                Gallery
                            </a>
                        </li>
                    </ul>
                </nav>

            </div>

        </div>

        <!-- Compact Bottom Row -->
        <div class="pt-4 sm:pt-5 border-t border-[#234A35] flex flex-col sm:flex-row items-center justify-between gap-3 text-xs font-mono text-reaktoria-cream-dim/70">
            <div class="flex flex-wrap items-center justify-center sm:justify-start gap-2 sm:gap-3">
                <span class="text-reaktoria-cream-dim/90 font-bold">&copy; 2026 REAKTORIA</span>
                <span class="text-white/20 hidden sm:inline">&bull;</span>
                <span class="italic text-reaktoria-cream-dim/75 font-body">A world shaped by discovery.</span>
            </div>

            <!-- Subtle Back to Top Link -->
            <a 
                href="#" 
                onclick="window.scrollTo({ top: 0, behavior: 'smooth' }); return false;"
                class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded text-reaktoria-cream-dim hover:text-white hover:bg-white/5 transition-colors focus:outline-none focus:ring-1 focus:ring-reaktoria-gold/50 cursor-pointer select-none"
                aria-label="Scroll back to top of page"
            >
                <span>Back to Top</span>
                <svg class="w-3.5 h-3.5 text-reaktoria-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                </svg>
            </a>
        </div>

    </div>
</footer>
