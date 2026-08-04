//
document.addEventListener('DOMContentLoaded', () => {
    const btn = document.getElementById('menu-btn');
    const menu = document.getElementById('mobile-menu');
    btn?.addEventListener('click', () => {
        menu.classList.toggle('hidden');
        menu.classList.toggle('flex');
    });
});

document.addEventListener('DOMContentLoaded', () => {
    // ... code existant du menu mobile ...

    const filterBtns = document.querySelectorAll('.filter-btn');
    const cards = document.querySelectorAll('.project-card');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const filter = btn.dataset.filter;

            // Style actif
            filterBtns.forEach(b => {
                b.classList.remove('active-filter', 'bg-accent', 'text-bg-dark', 'border-accent');
                b.classList.add('border-border-soft', 'text-gray-400');
            });
            btn.classList.add('active-filter', 'bg-accent', 'text-bg-dark', 'border-accent');
            btn.classList.remove('border-border-soft', 'text-gray-400');

            // Filtrage des cartes
            cards.forEach(card => {
                const show = filter === 'all' || card.dataset.category === filter;
                card.style.display = show ? '' : 'none';
            });
        });
    });
});