<header x-data="{ mobileOpen: false }" class="w-full relative z-40 bg-reaktoria-hud/80 backdrop-blur-md border-b border-reaktoria-hud-border/60 shadow-[0_4px_16px_rgba(0,0,0,0.2)]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-18 flex items-center justify-between">
        
        <!-- Left: Reaktoria Logo -->
        <div class="flex items-center gap-3">
            <x-ui.logo size="md" />
        </div>

        <!-- Center / Desktop Navigation Links -->
        <nav class="hidden md:flex items-center gap-1 lg:gap-2">
            <a href="#world" class="px-3 py-1.5 text-sm font-medium font-display tracking-wide text-reaktoria-cream-dim hover:text-white hover:bg-white/5 rounded transition-colors">
                World
            </a>
            <a href="#chemistry" class="px-3 py-1.5 text-sm font-medium font-display tracking-wide text-reaktoria-cream-dim hover:text-white hover:bg-white/5 rounded transition-colors">
                Chemistry
            </a>
            <a href="#adventure" class="px-3 py-1.5 text-sm font-medium font-display tracking-wide text-reaktoria-cream-dim hover:text-white hover:bg-white/5 rounded transition-colors">
                Adventure
            </a>
            <a href="#gameplay" class="px-3 py-1.5 text-sm font-medium font-display tracking-wide text-reaktoria-cream-dim hover:text-white hover:bg-white/5 rounded transition-colors">
                Gameplay
            </a>
            <a href="#modes" class="px-3 py-1.5 text-sm font-medium font-display tracking-wide text-reaktoria-cream-dim hover:text-white hover:bg-white/5 rounded transition-colors">
                Modes
            </a>
            <a href="#archive" class="px-3 py-1.5 text-sm font-medium font-display tracking-wide text-reaktoria-cream-dim hover:text-white hover:bg-white/5 rounded transition-colors">
                Archive
            </a>
        </nav>

        <!-- Right: Action Button -->
        <div class="hidden sm:flex items-center gap-3">
            <x-ui.button variant="menu" size="sm" href="#enter-game" class="px-4 py-2 text-xs font-display tracking-widest uppercase border-reaktoria-cream/90 shadow-md">
                <span>⚔️</span>
                <span>Enter Game</span>
            </x-ui.button>
        </div>

        <!-- Mobile Menu Toggle Button -->
        <div class="flex md:hidden items-center gap-2">
            <x-ui.button variant="menu" size="sm" href="#enter-game" class="sm:hidden text-xs px-2.5 py-1.5">
                Play
            </x-ui.button>
            <button 
                @click="mobileOpen = !mobileOpen" 
                type="button" 
                class="p-2 rounded text-reaktoria-cream hover:bg-white/10 focus:outline-none"
                aria-label="Toggle navigation menu"
            >
                <svg x-show="!mobileOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg x-show="mobileOpen" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

    </div>

    <!-- Mobile Navigation Drawer -->
    <div 
        x-show="mobileOpen" 
        x-cloak 
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
        class="md:hidden border-t border-reaktoria-hud-border/80 bg-reaktoria-hud/95 px-4 pt-3 pb-5 space-y-2 backdrop-blur-lg shadow-xl"
    >
        <a href="#world" @click="mobileOpen = false" class="block px-3 py-2 text-base font-display text-reaktoria-cream hover:bg-white/10 rounded">World</a>
        <a href="#chemistry" @click="mobileOpen = false" class="block px-3 py-2 text-base font-display text-reaktoria-cream hover:bg-white/10 rounded">Chemistry</a>
        <a href="#adventure" @click="mobileOpen = false" class="block px-3 py-2 text-base font-display text-reaktoria-cream hover:bg-white/10 rounded">Adventure</a>
        <a href="#gameplay" @click="mobileOpen = false" class="block px-3 py-2 text-base font-display text-reaktoria-cream hover:bg-white/10 rounded">Gameplay</a>
        <a href="#modes" @click="mobileOpen = false" class="block px-3 py-2 text-base font-display text-reaktoria-cream hover:bg-white/10 rounded">Modes</a>
        <a href="#archive" @click="mobileOpen = false" class="block px-3 py-2 text-base font-display text-reaktoria-cream hover:bg-white/10 rounded">Archive</a>
        
        <div class="pt-2">
            <x-ui.button variant="menu" size="md" href="#enter-game" class="w-full justify-center">
                <span>⚔️</span>
                <span>Enter Game</span>
            </x-ui.button>
        </div>
    </div>
</header>
