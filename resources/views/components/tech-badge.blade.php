@props([
    'slug' => null, // slug Simple Icons (ex: 'laravel')
    'color' => '888888', // couleur hex du logo, sans #
    'label', // texte affiché
    'icon' => null, // nom d'icône générique (terminal | network | cloud) si pas de logo officiel
    'invertOnDark' => false,
])

<div
    class="flex items-center gap-2 border border-border-soft bg-bg-dark px-3 py-1.5 text-xs font-mono text-gray-300 hover:border-accent hover:text-accent transition-colors">
    @if ($slug)
        <img src="https://cdn.simpleicons.org/{{ $slug }}/{{ $color }}" alt="{{ $label }}"
            class="w-4 h-4 {{ $invertOnDark ? 'bg-white rounded-[2px] p-[1px]' : '' }}" loading="lazy">
    @elseif($icon === 'terminal')
        <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M8 9l3 3-3 3m5 0h4M4 4h16v16H4V4z" />
        </svg>
    @elseif($icon === 'network')
        <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 3v6m0 0l-5 5m5-5l5 5M4 21h16M4 21v-4h4v4M16 21v-4h4v4" />
        </svg>
    @elseif($icon === 'cloud')
        <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M18 10h-1.26A8 8 0 109 20h9a5 5 0 000-10z" />
        </svg>
    @endif
    <span>{{ $label }}</span>
</div>
