<header class="fixed top-0 left-0 w-full z-50 bg-bg-dark/90 backdrop-blur-md border-b border-border-soft">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

        <!-- Logo -->
        <a href="{{ url('/') }}"
            class="font-mono text-lg font-bold tracking-tight text-white group flex items-center gap-1.5">
            <span class="text-accent group-hover:animate-pulse">&gt;_</span>
            <span>mk<span class="text-accent">_07</span></span>
        </a>

        <!-- Nav links (Desktop) -->
        <nav class="hidden md:flex items-center gap-8 font-mono text-xs uppercase tracking-widest text-gray-300">
            <a href="#about"
                class="hover:text-accent transition-colors py-1 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-accent hover:after:w-full after:transition-all">À
                propos de moi</a>
            <a href="#skills"
                class="hover:text-accent transition-colors py-1 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-accent hover:after:w-full after:transition-all">Compétences</a>
            <a href="#projects"
                class="hover:text-accent transition-colors py-1 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-accent hover:after:w-full after:transition-all">Mes
                réalisations</a>
            <a href="#testimonials"
                class="hover:text-accent transition-colors py-1 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-accent hover:after:w-full after:transition-all">Témoignages</a>
            <a href="#blog"
                class="hover:text-accent transition-colors py-1 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-accent hover:after:w-full after:transition-all">Blog</a>
        </nav>

        <!-- CTA Rectangulaire Strict -->
        <a href="#contact"
            class="hidden md:inline-block border border-accent text-accent px-5 py-2.5 font-mono text-xs font-semibold uppercase tracking-wider rounded-none hover:bg-accent hover:text-bg-dark transition-all duration-300">
            Contactez-moi
        </a>

        <!-- Bouton Burger Mobile -->
        <button id="menu-btn" aria-label="Toggle Menu"
            class="md:hidden text-gray-300 hover:text-accent focus:outline-none p-1">
            <svg id="menu-icon-open" class="h-6 w-6 block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg id="menu-icon-close" class="h-6 w-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- Menu Mobile -->
    <nav id="mobile-menu"
        class="hidden md:hidden flex-col gap-3 px-6 pt-4 pb-6 font-mono text-xs uppercase tracking-wider bg-bg-dark/95 border-t border-border-soft">
        <a href="#about"
            class="mobile-link py-2.5 border-b border-border-soft/40 text-gray-300 hover:text-accent transition-colors flex justify-between items-center">
            <span>01. À propos de moi</span>
            <span class="text-accent">&rarr;</span>
        </a>
        <a href="#skills"
            class="mobile-link py-2.5 border-b border-border-soft/40 text-gray-300 hover:text-accent transition-colors flex justify-between items-center">
            <span>02. Compétences</span>
            <span class="text-accent">&rarr;</span>
        </a>
        <a href="#projects"
            class="mobile-link py-2.5 border-b border-border-soft/40 text-gray-300 hover:text-accent transition-colors flex justify-between items-center">
            <span>03. Mes réalisations</span>
            <span class="text-accent">&rarr;</span>
        </a>
        <a href="#testimonials"
            class="mobile-link py-2.5 border-b border-border-soft/40 text-gray-300 hover:text-accent transition-colors flex justify-between items-center">
            <span>04. Témoignages</span>
            <span class="text-accent">&rarr;</span>
        </a>
        <a href="#blog"
            class="mobile-link py-2.5 border-b border-border-soft/40 text-gray-300 hover:text-accent transition-colors flex justify-between items-center">
            <span>05. Blog</span>
            <span class="text-accent">&rarr;</span>
        </a>

        <a href="#contact"
            class="mobile-link mt-3 border border-accent bg-accent text-bg-dark text-center px-5 py-3 font-semibold rounded-none hover:bg-transparent hover:text-accent transition-all">
            Contactez-moi
        </a>
    </nav>
</header>

<!-- Script JS pour l'ouverture/fermeture du menu mobile -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const iconOpen = document.getElementById('menu-icon-open');
        const iconClose = document.getElementById('menu-icon-close');
        const mobileLinks = document.querySelectorAll('.mobile-link');

        function toggleMenu() {
            mobileMenu.classList.toggle('hidden');
            mobileMenu.classList.toggle('flex');
            iconOpen.classList.toggle('hidden');
            iconClose.classList.toggle('hidden');
        }

        menuBtn.addEventListener('click', toggleMenu);

        // Fermer le menu lors du clic sur un lien mobile
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                if (!mobileMenu.classList.contains('hidden')) {
                    toggleMenu();
                }
            });
        });
    });
</script>
