<section id="blog" class="py-24 border-t border-border-soft bg-bg-dark relative overflow-hidden">

    <div class="max-w-7xl mx-auto px-6 relative z-10">

        <!-- Header de section -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-16">
            <div>
                <p class="font-mono text-accent text-sm uppercase tracking-wider mb-2">// 05. ARTICLES & WRITE-UPS</p>
                <h2 class="text-3xl md:text-4xl font-bold text-white tracking-tight">Derniers articles &amp; Analyses
                </h2>
            </div>

            <!-- Lien vers le blog complet (si tu en as un) -->
            <a href="#"
                class="font-mono text-xs text-accent uppercase tracking-wider hover:underline flex items-center gap-2">
                <span>Consulter tous les write-ups</span>
                <span>&rarr;</span>
            </a>
        </div>

        @php
            // Liste d'articles dynamique ou de secours
$postsList = $posts ?? [
    [
        'title' => 'Comprendre les vulnérabilités SSRF',
        'date' => '14 Fév 2026',
        'category' => 'WEB SECURITY',
        'summary' =>
            'Comment détecter, exploiter et corriger une faille Server-Side Request Forgery dans une API Node.js.',
        'image' => 'images/blog/ssrf.jpg',
        'link' => '#',
        'read_time' => '5 min read',
    ],
    [
        'title' => 'Bucket S3 mal configuré : étude de cas',
        'date' => '02 Mar 2026',
        'category' => 'CLOUD PENTEST',
        'summary' =>
            'Writeup d’un lab pratique sur l’exploitation de permissions mal configurées sur AWS S3.',
        'image' => null, // Pas d'image -> Déclenche le placeholder Terminal Cyber
                    'link' => '#',
                    'read_time' => '7 min read',
                ],
                [
                    'title' => 'CSP & CORS : les erreurs fréquentes',
                    'date' => '18 Mar 2026',
                    'category' => 'HARDENING',
                    'summary' =>
                        'Retour d’expérience sur un audit OWASP ZAP d’une API Express et configuration des entêtes de sécurité.',
                    'image' => 'images/blog/csp.jpg',
                    'link' => '#',
                    'read_time' => '4 min read',
                ],
            ];
        @endphp

        <!-- Grille d'articles (3 cartes par ligne) -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            @foreach ($postsList as $post)
                <article
                    class="group bg-bg-panel border border-border-soft hover:border-accent transition-all duration-300 flex flex-col justify-between overflow-hidden">

                    <div>
                        <!-- Couverture Article ou Image Par Défaut Cyber -->
                        <div
                            class="h-44 bg-bg-dark border-b border-border-soft overflow-hidden relative flex items-center justify-center">
                            @if (!empty($post['image']) && file_exists(public_path($post['image'])))
                                <img src="{{ asset($post['image']) }}" alt="{{ $post['title'] }}"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            @else
                                <!-- Image par défaut (Terminal Placeholder) -->
                                <div
                                    class="w-full h-full p-5 bg-gradient-to-br from-bg-dark via-bg-panel to-bg-dark flex flex-col justify-between relative">
                                    <!-- Quadrillage de fond -->
                                    <div class="absolute inset-0 opacity-[0.06] pointer-events-none"
                                        style="background-image: linear-gradient(#00E5A0 1px, transparent 1px), linear-gradient(90deg, #00E5A0 1px, transparent 1px); background-size: 16px 16px;">
                                    </div>

                                    <!-- Barre d'état terminal -->
                                    <div class="flex justify-between items-center z-10">
                                        <span class="font-mono text-[10px] text-gray-500">// WRITEUP_LOG</span>
                                        <div class="flex gap-1">
                                            <span class="w-1.5 h-1.5 bg-accent rounded-full"></span>
                                        </div>
                                    </div>

                                    <!-- Titre / Tag au centre -->
                                    <div class="z-10 my-auto">
                                        <span
                                            class="font-mono text-[10px] text-accent uppercase tracking-widest block mb-1">
                                            &gt; {{ $post['category'] }}
                                        </span>
                                        <h4 class="font-mono text-xs font-bold text-gray-200 line-clamp-2">
                                            cat {{ Str::slug($post['title']) }}.md
                                        </h4>
                                    </div>

                                    <!-- Pied de l'image placeholder -->
                                    <div
                                        class="flex justify-between items-center z-10 font-mono text-[9px] text-gray-600 border-t border-border-soft/40 pt-1.5">
                                        <span>READ_ONLY</span>
                                        <span>SEC_LEVEL: HIGH</span>
                                    </div>
                                </div>
                            @endif

                            <!-- Tag flottant Catégorie -->
                            <span
                                class="absolute top-3 right-3 font-mono text-[10px] uppercase text-accent bg-bg-dark/90 backdrop-blur-md px-2 py-0.5 border border-accent/30">
                                {{ $post['category'] }}
                            </span>
                        </div>

                        <!-- Contenu texte -->
                        <div class="p-6">
                            <!-- Date & Temps de lecture -->
                            <div class="flex items-center justify-between font-mono text-xs text-gray-500 mb-3">
                                <span>{{ $post['date'] }}</span>
                                <span>// {{ $post['read_time'] ?? '5 min read' }}</span>
                            </div>

                            <h3
                                class="font-bold text-lg text-white mb-3 group-hover:text-accent transition-colors leading-snug">
                                {{ $post['title'] }}
                            </h3>

                            <p class="text-sm text-gray-400 mb-6 leading-relaxed line-clamp-3">
                                {{ $post['summary'] }}
                            </p>
                        </div>
                    </div>

                    <!-- Pied de carte / Lien de lecture -->
                    <div class="px-6 pb-6 pt-0">
                        <a href="{{ $post['link'] ?? '#' }}"
                            class="inline-flex items-center gap-2 font-mono text-xs text-accent uppercase tracking-wider hover:translate-x-1 transition-transform">
                            <span>Lire l'article</span>
                            <span>&rarr;</span>
                        </a>
                    </div>

                </article>
            @endforeach

        </div>

    </div>
</section>
