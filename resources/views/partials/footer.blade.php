<footer class="border-t border-border-soft bg-bg-dark pt-16 pb-12 relative overflow-hidden">

    <!-- Lueur d'arrière-plan cyber -->
    <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-[600px] h-32 bg-accent/5 blur-3xl pointer-events-none">
    </div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">

        <!-- Grille principale du Footer (4 Colonnes) -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mb-16">

            <!-- Colonne 1: Brand & Bio -->
            <div class="space-y-4 lg:col-span-1">
                <a href="#home" class="inline-block font-mono text-xl font-bold text-white group">
                    <span class="text-accent group-hover:animate-pulse">&gt;_</span> mk<span
                        class="text-accent">_07</span>
                </a>
                <p class="text-sm text-gray-400 leading-relaxed font-sans">
                    Développeur Fullstack &amp; Analyste en Sécurité Informatique. Conception d'applications web
                    résilientes et audits d'infrastructures.
                </p>
                <div class="pt-2">
                    <span
                        class="inline-flex items-center gap-2 font-mono text-[11px] text-gray-500 border border-border-soft/80 px-2.5 py-1 bg-bg-panel">
                        <span class="w-1.5 h-1.5 bg-accent rounded-full"></span>
                        Cotonou, Bénin 🇧🇯
                    </span>
                </div>
            </div>

            <!-- Colonne 2: Quick Links (Navigation) -->
            <div>
                <p class="font-mono text-xs uppercase tracking-widest text-accent mb-4">// NAVIGATION</p>
                <ul class="space-y-2.5 font-mono text-xs">
                    <li>
                        <a href="#home"
                            class="text-gray-400 hover:text-accent transition-colors flex items-center gap-1.5 group">
                            <span class="text-gray-600 group-hover:text-accent">&gt;</span> Home
                        </a>
                    </li>
                    <li>
                        <a href="#about"
                            class="text-gray-400 hover:text-accent transition-colors flex items-center gap-1.5 group">
                            <span class="text-gray-600 group-hover:text-accent">&gt;</span> About me
                        </a>
                    </li>
                    <li>
                        <a href="#skills"
                            class="text-gray-400 hover:text-accent transition-colors flex items-center gap-1.5 group">
                            <span class="text-gray-600 group-hover:text-accent">&gt;</span> Skills
                        </a>
                    </li>
                    <li>
                        <a href="#projects"
                            class="text-gray-400 hover:text-accent transition-colors flex items-center gap-1.5 group">
                            <span class="text-gray-600 group-hover:text-accent">&gt;</span> Projects
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Colonne 3: Resources & Sec -->
            <div>
                <p class="font-mono text-xs uppercase tracking-widest text-accent mb-4">// RESOURCES</p>
                <ul class="space-y-2.5 font-mono text-xs">
                    <li>
                        <a href="#testimonials"
                            class="text-gray-400 hover:text-accent transition-colors flex items-center gap-1.5 group">
                            <span class="text-gray-600 group-hover:text-accent">&gt;</span> Testimonials
                        </a>
                    </li>
                    <li>
                        <a href="#blog"
                            class="text-gray-400 hover:text-accent transition-colors flex items-center gap-1.5 group">
                            <span class="text-gray-600 group-hover:text-accent">&gt;</span> Write-ups / Blog
                        </a>
                    </li>
                    <li>
                        <a href="#contact"
                            class="text-gray-400 hover:text-accent transition-colors flex items-center gap-1.5 group">
                            <span class="text-gray-600 group-hover:text-accent">&gt;</span> Contact
                        </a>
                    </li>
                    <li>
                        <a href="{{ asset('cv.pdf') }}" download
                            class="text-accent hover:underline flex items-center gap-1.5">
                            <span>&gt;</span> Download CV [.PDF]
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Colonne 4: Reseaux Sociaux (Boutons Rectangulaires Cyber) -->
            <div>
                <p class="font-mono text-xs uppercase tracking-widest text-accent mb-4">// SOCIAL_CONNECT</p>
                <p class="text-xs text-gray-500 mb-4 font-sans">
                    Retrouvez-moi sur les différentes plateformes et réseaux.
                </p>

                <!-- Grille d'icônes -->
                <div class="flex flex-wrap gap-2.5">
                    <!-- GitHub -->
                    <a href="https://github.com/malickasso" target="_blank" rel="noopener noreferrer" title="GitHub"
                        class="w-10 h-10 border border-border-soft bg-bg-panel flex items-center justify-center text-gray-400 hover:text-accent hover:border-accent hover:bg-accent/10 transition-all duration-300">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" />
                        </svg>
                    </a>

                    <!-- LinkedIn -->
                    <a href="https://www.linkedin.com/in/abdou-malick-assouma-63a878270/" target="_blank"
                        rel="noopener noreferrer" title="LinkedIn"
                        class="w-10 h-10 border border-border-soft bg-bg-panel flex items-center justify-center text-gray-400 hover:text-accent hover:border-accent hover:bg-accent/10 transition-all duration-300">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                            <path
                                d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.46 10.9v8.37H9.25V10.9H6.46M7.86 6.75a1.45 1.45 0 1 0 0 2.9 1.45 1.45 0 0 0 0-2.9z" />
                        </svg>
                    </a>

                    <!-- WhatsApp -->
                    <a href="https://wa.me/22995459313" target="_blank" rel="noopener noreferrer" title="WhatsApp"
                        class="w-10 h-10 border border-border-soft bg-bg-panel flex items-center justify-center text-gray-400 hover:text-accent hover:border-accent hover:bg-accent/10 transition-all duration-300">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                            <path
                                d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2zm5.8 14.12c-.24.68-1.2 1.24-1.95 1.39-.52.1-1.2.18-3.48-.77-2.92-1.21-4.8-4.18-4.95-4.38-.14-.2-1.18-1.57-1.18-3 0-1.43.75-2.14 1.02-2.43.27-.29.59-.36.79-.36.2 0 .39.01.56.01.18 0 .42-.07.66.5.24.58.82 1.99.89 2.13.07.14.12.31.02.5-.1.2-.15.31-.29.48-.14.17-.3.38-.43.51-.14.14-.29.3-.12.58.17.28.75 1.23 1.6 2 .1.1 2.1 1.83 2.1 1.83.27.23.44.2.61.01.17-.18.73-.85.92-1.14.19-.29.39-.24.65-.14.26.1.1.66 2.08 1.13 2.58.22.25.37.42.42.52.06.27-.01.95-.25 1.63z" />
                        </svg>
                    </a>

                    <!-- Facebook -->
                    <a href="https://www.facebook.com/abdoumalick.ibnassouma.1" target="_blank"
                        rel="noopener noreferrer" title="Facebook"
                        class="w-10 h-10 border border-border-soft bg-bg-panel flex items-center justify-center text-gray-400 hover:text-accent hover:border-accent hover:bg-accent/10 transition-all duration-300">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                            <path
                                d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H7.5v-3H10V9.5C10 7.01 11.49 5.6 13.78 5.6c1.1 0 2.25.2 2.25.2v2.47h-1.27c-1.24 0-1.62.77-1.62 1.56V12h2.78l-.44 3h-2.34v6.8c4.56-.93 8-4.96 8-9.8z" />
                        </svg>
                    </a>

                    <!-- Email -->
                    <a href="mailto:abdoumalickassouma804@gmail.com" title="Send Email"
                        class="w-10 h-10 border border-border-soft bg-bg-panel flex items-center justify-center text-gray-400 hover:text-accent hover:border-accent hover:bg-accent/10 transition-all duration-300">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </a>
                </div>
            </div>

        </div>

        <!-- Bas de Footer / Copyright + Button Back to Top -->
        <div
            class="border-t border-border-soft/80 pt-8 flex flex-col md:flex-row items-center justify-between gap-4 font-mono text-xs text-gray-500">
            <div>
                © {{ date('Y') }} <span class="text-gray-300 font-semibold">ASSOUMA Abdou Malick</span>. All Rights
                Reserved.
            </div>

            <div class="flex items-center gap-6">
                <span>SYSTEM_STATUS: <span class="text-accent">STABLE</span></span>

                <!-- Bouton Back To Top -->
                <a href="#home"
                    class="border border-border-soft bg-bg-panel px-3 py-1.5 text-gray-400 hover:text-accent hover:border-accent transition-all duration-300 flex items-center gap-1">
                    <span>TOP</span>
                    <span>&uarr;</span>
                </a>
            </div>
        </div>

    </div>
</footer>
