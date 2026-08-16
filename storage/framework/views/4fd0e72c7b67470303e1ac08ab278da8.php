<section id="about" class="py-24 border-t border-border-soft bg-bg-dark relative overflow-hidden">

    <!-- Lueur subtile en fond -->
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-accent/5 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">

        <!-- Header de section -->
        <div class="mb-16">
            <p class="font-mono text-accent text-sm uppercase tracking-wider mb-2">// 01. QUI SUIS-JE ?</p>
            <h2 class="text-3xl md:text-4xl font-bold text-white tracking-tight">
                À propos de moi
            </h2>
        </div>

        <div class="grid md:grid-cols-2 gap-12 mb-20 items-stretch">

            <!-- Colonne gauche : Pitch d'impact -->
            <div class="flex flex-col justify-between">
                <div>
                    <h3 class="text-2xl md:text-3xl font-bold text-white mb-4 leading-snug">
                        Je ne me contente pas de coder des fonctionnalités, <br>
                        <span class="text-accent">Je garantis leur résilience.</span>
                    </h3>

                    <div class="w-16 h-1 bg-accent mb-6"></div>

                    <p class="text-gray-300 leading-relaxed mb-6">
                        Ma double casquette de <strong class="text-white font-semibold">Développeur Fullstack</strong>
                        et de <strong class="text-white font-semibold">Spécialiste en Cybersécurité</strong> me permet
                        d'aborder chaque projet avec une vision à 360°. Là où un dev classique s'arrête une fois le code
                        fonctionnel, j'analyse la surface d'attaque et sécurise chaque point d'entrée.
                    </p>

                    <p class="text-gray-400 leading-relaxed mb-8 text-sm">
                        Actuellement en <span class="text-white">Master Sécurité Informatique à l'IFRI (UAC)</span>,
                        j'associe la rigueur académique aux cas d'usage réels du terrain (audits OWASP, pentesting web
                        et durcissement d'infrastructures).
                    </p>
                </div>

                <div>
                    <a href="mailto:abdoumalickassouma804@gmail.com"
                        class="inline-flex items-center gap-2 border border-accent text-accent px-6 py-3 font-mono text-sm font-semibold uppercase tracking-wider hover:bg-accent hover:text-bg-dark transition-all duration-300">
                        <span>Engager la conversation</span>
                        <span>&rarr;</span>
                    </a>
                </div>
            </div>

            <!-- Colonne droite : Fiche Technique / Specs -->
            <div class="bg-bg-panel border border-border-soft p-8 flex flex-col justify-between relative">
                <!-- Décoration Terminal -->
                <div class="flex items-center justify-between border-b border-border-soft/60 pb-4 mb-6">
                    <span class="font-mono text-xs text-gray-500">// SYSTEM_INFO.LOG</span>
                    <div class="flex gap-1.5">
                        <span class="w-2.5 h-2.5 bg-red-500/80 rounded-full"></span>
                        <span class="w-2.5 h-2.5 bg-yellow-500/80 rounded-full"></span>
                        <span class="w-2.5 h-2.5 bg-green-500/80 rounded-full"></span>
                    </div>
                </div>

                <dl class="font-mono text-sm space-y-4">
                    <div class="flex justify-between border-b border-border-soft/40 pb-3">
                        <dt class="text-gray-500">Identité</dt>
                        <dd class="text-gray-200 font-semibold">ASSOUMA Abdou Malick</dd>
                    </div>
                    <div class="flex justify-between border-b border-border-soft/40 pb-3">
                        <dt class="text-gray-500">Localisation</dt>
                        <dd class="text-gray-200">Abomey-Calavi, Bénin 🇧🇯</dd>
                    </div>
                    <div class="flex justify-between border-b border-border-soft/40 pb-3">
                        <dt class="text-gray-500">Formation</dt>
                        <dd class="text-accent">Master Cybersecurity (IFRI)</dd>
                    </div>
                    <div class="flex justify-between border-b border-border-soft/40 pb-3">
                        <dt class="text-gray-500">Email</dt>
                        <dd class="text-gray-200">abdoumalickassouma804@gmail.com</dd>
                    </div>
                    <div class="flex justify-between">
                        <dt class="text-gray-500">GitHub</dt>
                        <dd class="text-gray-200">@malickasso</dd>
                    </div>
                </dl>

                <div class="mt-8 pt-4 border-t border-border-soft/60">
                    <p class="font-mono text-[11px] text-gray-500 uppercase tracking-widest mb-3">// TÉLÉCHARGER MON CV
                    </p>

                    <!-- Grille de 2 boutons côte à côte -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        <!-- CV Français -->
                        <a href="<?php echo e(asset('CV_Abdou_Malick_ASSOUMA.pdf')); ?>" download
                            class="w-full text-center border border-accent bg-accent text-bg-dark px-4 py-3 font-mono text-xs font-semibold uppercase tracking-wider rounded-none hover:bg-transparent hover:text-accent transition-all duration-300 flex items-center justify-center gap-1.5 group">
                            <span>CV [FR]</span>
                            <span class="group-hover:translate-y-0.5 transition-transform">&darr;</span>
                        </a>

                        <!-- CV Anglais -->
                        <a href="<?php echo e(asset('CV_Abdou_Malick_ASSOUMA_EN.pdf')); ?>" download
                            class="w-full text-center border border-border-soft bg-bg-dark text-gray-300 px-4 py-3 font-mono text-xs font-semibold uppercase tracking-wider rounded-none hover:border-accent hover:text-accent transition-all duration-300 flex items-center justify-center gap-1.5 group">
                            <span>CV [EN]</span>
                            <span class="group-hover:translate-y-0.5 transition-transform">&darr;</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH /home/malick/Documents/Mes_Projets/portfolio-cyber/resources/views/sections/about.blade.php ENDPATH**/ ?>