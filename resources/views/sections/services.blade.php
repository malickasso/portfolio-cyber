<section id="services" class="py-24 border-t border-border-soft bg-bg-dark relative overflow-hidden reveal">

    <!-- Lueur subtile en arrière-plan -->
    <div class="absolute top-1/3 right-0 w-80 h-80 bg-accent/5 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">

        <!-- Header de section -->
        <div class="mb-16">
            <p class="font-mono text-accent text-sm uppercase tracking-wider mb-2">// 03. SERVICES &amp; SOLUTIONS</p>
            <h2 class="text-3xl md:text-4xl font-bold text-white tracking-tight">Ce que je peux faire pour vous</h2>
            <p class="text-gray-400 text-sm mt-3 max-w-xl">
                Des prestations ciblées combinant développement logiciel de haut niveau, audit offensif et sécurisation
                d'infrastructures.
            </p>
        </div>

        @php
            $servicesList = $services ?? [
                [
                    'code' => 'SVC-01',
                    'tag' => 'FULLSTACK DEV',
                    'title' => 'Développement Web Fullstack',
                    'description' =>
                        "Conception sur-mesure d'applications web modernes, réactives et évolutives. De la modélisation de la base de données à l'interface utilisateur intuitive.",
                    'deliverables' => [
                        'Architecture Laravel / React / Django',
                        'API RESTful documentées & sécurisées',
                        'Intégration responsive & Clean Code',
                        'Optimisation des performances SQL',
                    ],
                    'badge' => 'SUR DEVIS',
                ],
                [
                    'code' => 'SVC-02',
                    'tag' => 'OFFENSIVE SEC',
                    'title' => 'Audit de Sécurité & Pentest Web',
                    'description' =>
                        "Évaluation approfondie de la surface d'attaque de vos applications pour identifier, exploiter et corriger les vulnérabilités avant les cybercriminels.",
                    'deliverables' => [
                        'Test d\'intrusion applicatif (OWASP Top 10)',
                        'Analyse de code source (SAST / DAST)',
                        'Rapport d\'audit technique & exécutif',
                        'Plan de remédiation & accompagnement',
                    ],
                    'badge' => 'RECOMMANDÉ',
                ],
                [
                    'code' => 'SVC-03',
                    'tag' => 'DEVOPS & HARDENING',
                    'title' => 'Durcissement Système & SecOps',
                    'description' =>
                        'Sécurisation de vos serveurs Linux, conteneurs et pipelines CI/CD. Mise en place de règles de sécurité strictes et isolation des environnements.',
                    'deliverables' => [
                        'Conteneurisation sécurisée avec Docker',
                        'Hardening serveurs Linux (Kali/Ubuntu)',
                        'Configuration VPN IPsec & VLANs',
                        'Pipelines CI/CD avec scans de sécurité',
                    ],
                    'badge' => 'INFRA',
                ],
                [
                    'code' => 'SVC-04',
                    'tag' => 'CONSULTING',
                    'title' => 'Conseil & Remédiation post-Audit',
                    'description' =>
                        'Assistance technique pour corriger les failles existantes, mettre aux normes de sécurité vos applications web et former vos équipes aux bonnes pratiques.',
                    'deliverables' => [
                        'Correction directe des failles identifiées',
                        'Configuration des entêtes CSP, CORS, HSTS',
                        'Revue d\'architecture de sécurité',
                        'Support & conseil technique sur-mesure',
                    ],
                    'badge' => 'FLEXIBLE',
                ],
            ];
        @endphp

        <!-- Grille des Services (2 colonnes) avec effet zoom au survol -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

            @foreach ($servicesList as $service)
                <div
                    class="group bg-bg-panel border border-border-soft p-8 hover:border-accent card-hover transition-all duration-300 flex flex-col justify-between relative rounded-none">

                    <!-- Viseurs décoratifs style Cyber sur les coins au survol -->
                    <div
                        class="absolute -top-1 -left-1 w-2.5 h-2.5 border-t-2 border-l-2 border-accent opacity-0 group-hover:opacity-100 transition-opacity">
                    </div>
                    <div
                        class="absolute -top-1 -right-1 w-2.5 h-2.5 border-t-2 border-r-2 border-accent opacity-0 group-hover:opacity-100 transition-opacity">
                    </div>
                    <div
                        class="absolute -bottom-1 -left-1 w-2.5 h-2.5 border-b-2 border-l-2 border-accent opacity-0 group-hover:opacity-100 transition-opacity">
                    </div>
                    <div
                        class="absolute -bottom-1 -right-1 w-2.5 h-2.5 border-b-2 border-r-2 border-accent opacity-0 group-hover:opacity-100 transition-opacity">
                    </div>

                    <div>
                        <!-- En-tête de la carte service -->
                        <div class="flex items-center justify-between mb-6">
                            <div class="flex items-center gap-3">
                                <span
                                    class="font-mono text-xs text-accent bg-accent/10 px-2.5 py-1 border border-accent/20">
                                    // {{ $service['tag'] }}
                                </span>
                                <span class="font-mono text-xs text-gray-500">{{ $service['code'] }}</span>
                            </div>

                            <span
                                class="font-mono text-[10px] text-gray-400 border border-border-soft px-2 py-0.5 uppercase tracking-wider">
                                {{ $service['badge'] }}
                            </span>
                        </div>

                        <!-- Titre du service -->
                        <h3 class="text-2xl font-bold text-white group-hover:text-accent transition-colors mb-3">
                            {{ $service['title'] }}
                        </h3>

                        <!-- Description -->
                        <p class="text-gray-400 text-sm mb-6 leading-relaxed">
                            {{ $service['description'] }}
                        </p>

                        <!-- Livrables / Scope -->
                        <div class="space-y-2.5 mb-8">
                            <p class="font-mono text-[11px] text-gray-500 uppercase tracking-widest mb-2">// LIVRABLES
                                &amp; INCLUSIONS</p>
                            @foreach ($service['deliverables'] as $item)
                                <div class="flex items-start gap-2.5 font-mono text-xs text-gray-300">
                                    <span class="text-accent shrink-0 font-bold">&gt;</span>
                                    <span>{{ $item }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Pied de carte / CTA -->
                    <div class="pt-6 border-t border-border-soft/60 flex items-center justify-between">
                        <span class="font-mono text-[11px] text-gray-500 uppercase">SLA: Haute Réactivité</span>

                        <a href="#contact"
                            class="inline-flex items-center gap-2 border border-accent/40 text-accent px-4 py-2 font-mono text-xs uppercase tracking-wider rounded-none hover:bg-accent hover:text-bg-dark transition-all duration-300 group/btn">
                            <span>Demander un devis</span>
                            <span class="group-hover/btn:translate-x-1 transition-transform">&rarr;</span>
                        </a>
                    </div>

                </div>
            @endforeach

        </div>

    </div>
</section>
