<section id="projects" class="py-24 border-t border-border-soft bg-bg-dark relative overflow-hidden reveal">

    <!-- Lueur d'ambiance cyber -->
    <div class="absolute bottom-0 left-1/4 w-80 h-80 bg-accent/5 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">

        <!-- Header & Filtres -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-16">
            <div>
                <p class="font-mono text-accent text-sm uppercase tracking-wider mb-2">// 04. CE QUE J'AI CONSTRUIT</p>
                <h2 class="text-3xl md:text-4xl font-bold text-white tracking-tight">Réalisations &amp; Write-ups</h2>
            </div>

            <!-- Filtres de catégories (Style Terminal/Rectangulaire Strict) -->
            <div class="flex flex-wrap gap-2 font-mono text-xs uppercase tracking-wider">
                <button data-filter="all"
                    class="filter-btn active-filter border border-accent bg-accent text-bg-dark px-4 py-2 font-semibold rounded-none transition-all duration-300">
                    [Tout]
                </button>
                <button data-filter="web"
                    class="filter-btn border border-border-soft text-gray-400 px-4 py-2 rounded-none hover:border-accent hover:text-accent transition-all duration-300">
                    Web Dev
                </button>
                <button data-filter="security"
                    class="filter-btn border border-border-soft text-gray-400 px-4 py-2 rounded-none hover:border-accent hover:text-accent transition-all duration-300">
                    Sécurité / Audit
                </button>
                <button data-filter="network"
                    class="filter-btn border border-border-soft text-gray-400 px-4 py-2 rounded-none hover:border-accent hover:text-accent transition-all duration-300">
                    Réseau &amp; Infra
                </button>
            </div>
        </div>

        <!-- Grille de projets -->
        <div id="project-grid" class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

            @php
                // Projets par défaut si la variable $projects n'est pas transmise par le contrôleur
$projectList = $projects ?? [
    [
        'title' => 'Readly',
        'category' => 'web',
        'tag' => 'Fullstack',
        'description' => 'Bibliothèque numérique - PHP, MySQL, gestion des rôles et wishlist.',
        'image' => 'images/projects/readly.png',
        'link' => '#',
    ],
    [
        'title' => 'Audit API Node.js/Express',
        'category' => 'security',
        'tag' => 'Security Audit',
        'description' =>
            'Rapport OWASP ZAP - CSP, CORS, SRI. Recommandations pour déploiement Render.com.',
        'image' => 'images/projects/nodejs.png',
        'link' => '#',
    ],
    [
        'title' => 'AWS S3 Misconfiguration',
        'category' => 'security',
        'tag' => 'Pentest / Cloud',
        'description' => 'PentesterLab - exploitation de permissions mal configurées sur bucket S3.',
        'image' => 'images/projects/aws.png',
        'link' => '#',
    ],
    [
        'title' => 'FinTrust Bank — GNS3',
        'category' => 'network',
        'tag' => 'Network',
        'description' =>
            'Réseau bancaire multisite : VLANs, IPsec VPN, NAT/PAT, ACLs sur Cisco/MikroTik.',
        'image' => 'images/projects/infragns.png',
        'link' => '#',
    ],
    [
        'title' => 'Infra multi-VM ifri.com',
        'category' => 'network',
        'tag' => 'Infra / Linux',
        'description' => 'LDAP, Postfix/Dovecot, Apache/WordPress, monitoring Prometheus/Grafana.',
        'image' => 'images/projects/vmware.png',
        'link' => '#',
    ],
    [
        'title' => 'Miniyi Benin API',
        'category' => 'web',
        'tag' => 'API REST',
        'description' => 'API Node.js/Express déployée sur Render.com, sécurisée et documentée.',
        'image' => 'images/projects/miniyi.png',
        'link' => '#',
                    ],
                ];
            @endphp

            @foreach ($projectList as $project)
                <div class="project-card" data-category="{{ $project['category'] }}">
                    <div
                        class="group bg-bg-panel border border-border-soft hover:border-accent card-hover transition-all duration-300 h-full flex flex-col justify-between relative rounded-none">

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

                        <!-- Zone d'image / Fallback Cyber -->
                        <div
                            class="h-48 bg-bg-dark border-b border-border-soft flex items-center justify-center overflow-hidden relative">

                            @if (!empty($project['image']) && file_exists(public_path($project['image'])))
                                <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            @else
                                <!-- Image uniforme par défaut (Pattern Cyber / Terminal Placeholder) -->
                                <div
                                    class="w-full h-full p-6 bg-gradient-to-br from-bg-dark via-bg-panel to-bg-dark flex flex-col justify-between relative">
                                    <!-- Quadrillage léger -->
                                    <div class="absolute inset-0 opacity-[0.08] pointer-events-none"
                                        style="background-image: linear-gradient(#00E5A0 1px, transparent 1px), linear-gradient(90deg, #00E5A0 1px, transparent 1px); background-size: 20px 20px;">
                                    </div>

                                    <div class="flex justify-between items-center z-10">
                                        <span class="font-mono text-[10px] text-gray-500">// NO_IMAGE_SRC</span>
                                        <div class="flex gap-1">
                                            <span class="w-1.5 h-1.5 bg-accent/60 rounded-full"></span>
                                            <span class="w-1.5 h-1.5 bg-accent/30 rounded-full"></span>
                                        </div>
                                    </div>

                                    <div class="z-10 my-auto">
                                        <p class="font-mono text-xs text-accent uppercase mb-1">&gt;
                                            {{ $project['tag'] }}</p>
                                        <p class="font-mono text-sm font-bold text-gray-300 line-clamp-1">
                                            [{{ $project['title'] }}]
                                        </p>
                                    </div>

                                    <div
                                        class="flex justify-between items-center z-10 font-mono text-[10px] text-gray-600 border-t border-border-soft/40 pt-2">
                                        <span>STATUS: READY</span>
                                        <span>ENCRYPTED</span>
                                    </div>
                                </div>
                            @endif

                            <!-- Tag flottant -->
                            <span
                                class="absolute top-3 right-3 font-mono text-[10px] uppercase text-accent bg-bg-dark/90 backdrop-blur-md px-2 py-0.5 border border-accent/30 rounded-none">
                                {{ $project['tag'] }}
                            </span>
                        </div>

                        <!-- Contenu du projet -->
                        <div class="p-6 flex-1 flex flex-col justify-between">
                            <div>
                                <h3 class="text-xl font-bold text-white group-hover:text-accent transition-colors mb-2">
                                    {{ $project['title'] }}
                                </h3>
                                <p class="text-sm text-gray-400 mb-6 leading-relaxed">
                                    {{ $project['description'] }}
                                </p>
                            </div>

                            <div class="pt-4 border-t border-border-soft/60">
                                <a href="{{ $project['link'] ?? '#' }}"
                                    class="inline-flex items-center gap-2 font-mono text-xs text-accent uppercase tracking-wider hover:translate-x-1 transition-transform">
                                    <span>Explorer le projet</span>
                                    <span>&rarr;</span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
