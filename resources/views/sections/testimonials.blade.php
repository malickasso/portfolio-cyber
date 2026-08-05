<section id="testimonials" class="py-24 border-t border-border-soft bg-bg-dark relative overflow-hidden reveal">

    <!-- Lueur subtile en arrière-plan -->
    <div class="absolute top-1/2 left-0 w-72 h-72 bg-accent/5 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">

        <!-- Header de section -->
        <div class="mb-16">
            <p class="font-mono text-accent text-sm uppercase tracking-wider mb-2">// 05. CE QUE DISENT MES CLIENTS &amp;
                COLLABORATEURS</p>
            <h2 class="text-3xl md:text-4xl font-bold text-white tracking-tight">Témoignages</h2>
            <p class="text-gray-400 text-sm mt-3 max-w-xl">
                Retours d'expérience sur les missions d'audit de sécurité, le développement web et l'ingénierie
                d'infrastructures.
            </p>
        </div>

        @php
            // Liste de 3 témoignages
            $testimonialsList = $testimonials ?? [
                [
                    'name' => 'Jane Foster',
                    'role' => 'Founder & CEO',
                    'company' => 'TechSolutions',
                    'content' =>
                        "Travail rigoureux et rapport d'audit de sécurité extrêmement clair. Les vulnérabilités identifiées sur notre plateforme ont été parfaitement priorisées avec des préconisations de correctifs simples à appliquer.",
                    'image' => 'images/testimonials/client1.jpg',
                    'rating' => 5,
                    'tag' => 'SECURITY AUDIT',
                ],
                [
                    'name' => 'Marc Dossou',
                    'role' => 'CTO',
                    'company' => 'FinTech Startup',
                    'content' =>
                        "Développement fullstack extrêmement solide sur notre application. Le code Laravel est propre, bien structuré, sécurisé par défaut et la livraison s'est faite exactement dans les délais annoncés.",
                    'image' => null, // Pas d'image -> Génère l'avatar fallback avec les initiales "MD"
                    'rating' => 5,
                    'tag' => 'FULLSTACK DEV',
                ],
                [
                    'name' => 'Koffi Mensah',
                    'role' => 'Responsable SI',
                    'company' => 'E-Business Bénin',
                    'content' =>
                        "Excellente intervention sur le durcissement de notre infrastructure Linux et l'implémentation de la politique de contrôle d'accès. Un professionnel autonome, à l'écoute et très méthodique.",
                    'image' => 'images/testimonials/client3.jpg',
                    'rating' => 5,
                    'tag' => 'INFRA & HARDENING',
                ],
            ];
        @endphp

        <!-- Grille de témoignages (3 cartes) -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            @foreach ($testimonialsList as $item)
                <div
                    class="group bg-bg-panel border border-border-soft p-8 hover:border-accent card-hover transition-all duration-300 flex flex-col justify-between relative rounded-none">

                    <!-- Viseurs décoratifs style Cyber sur les coins au survol -->
                    <div
                        class="absolute -top-1 -left-1 w-2.5 h-2.5 border-t-2 border-l-2 border-accent opacity-0 group-hover:opacity-100 transition-opacity z-20">
                    </div>
                    <div
                        class="absolute -top-1 -right-1 w-2.5 h-2.5 border-t-2 border-r-2 border-accent opacity-0 group-hover:opacity-100 transition-opacity z-20">
                    </div>
                    <div
                        class="absolute -bottom-1 -left-1 w-2.5 h-2.5 border-b-2 border-l-2 border-accent opacity-0 group-hover:opacity-100 transition-opacity z-20">
                    </div>
                    <div
                        class="absolute -bottom-1 -right-1 w-2.5 h-2.5 border-b-2 border-r-2 border-accent opacity-0 group-hover:opacity-100 transition-opacity z-20">
                    </div>

                    <!-- Guillemet / Watermark Décoratif -->
                    <span
                        class="absolute top-4 right-6 font-mono text-6xl text-border-soft/40 group-hover:text-accent/10 transition-colors pointer-events-none select-none">“</span>

                    <div>
                        <!-- En-tête de carte (Avatar + Identité) -->
                        <div class="flex items-center justify-between mb-6">
                            <div class="flex items-center gap-4">
                                <!-- Photo ou Avatar Fallback -->
                                <div
                                    class="w-14 h-14 border border-border-soft group-hover:border-accent transition-colors overflow-hidden shrink-0 bg-bg-dark flex items-center justify-center relative rounded-none">
                                    @if (!empty($item['image']) && file_exists(public_path($item['image'])))
                                        <img src="{{ asset($item['image']) }}" alt="{{ $item['name'] }}"
                                            class="w-full h-full object-cover">
                                    @else
                                        <!-- Avatar de secours Cyber (Initiales) -->
                                        <div
                                            class="w-full h-full bg-gradient-to-br from-bg-dark to-bg-panel flex items-center justify-center">
                                            <span class="font-mono font-bold text-accent text-lg">
                                                {{ strtoupper(substr($item['name'], 0, 2)) }}
                                            </span>
                                        </div>
                                    @endif

                                    <!-- Viseur rectangulaire sur le coin -->
                                    <div class="absolute -top-0.5 -left-0.5 w-1.5 h-1.5 bg-accent"></div>
                                </div>

                                <div>
                                    <h3
                                        class="font-bold text-white text-base group-hover:text-accent transition-colors">
                                        {{ $item['name'] }}
                                    </h3>
                                    <p class="text-xs text-gray-500 font-mono">
                                        {{ $item['role'] }}
                                        {{ !empty($item['company']) ? '— ' . $item['company'] : '' }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Badge de service -->
                        <div class="mb-4">
                            <span
                                class="inline-block font-mono text-[10px] text-accent bg-accent/10 border border-accent/20 px-2 py-0.5 rounded-none">
                                // {{ $item['tag'] }}
                            </span>
                        </div>

                        <!-- Citation / Contenu -->
                        <p class="text-gray-300 text-sm leading-relaxed mb-6 font-sans">
                            "{{ $item['content'] }}"
                        </p>
                    </div>

                    <!-- Pied de carte (Étoiles + Statut) -->
                    <div
                        class="pt-4 border-t border-border-soft/60 flex items-center justify-between font-mono text-xs">
                        <!-- Étoiles -->
                        <div class="flex gap-1 text-accent">
                            @for ($i = 0; $i < ($item['rating'] ?? 5); $i++)
                                <span>★</span>
                            @endfor
                        </div>

                        <!-- Badge Verified -->
                        <span class="text-gray-500 text-[11px] flex items-center gap-1">
                            <span class="w-1.5 h-1.5 bg-accent rounded-full inline-block"></span>
                            VERIFIED
                        </span>
                    </div>

                </div>
            @endforeach

        </div>

    </div>
</section>
