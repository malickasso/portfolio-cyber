document.addEventListener('DOMContentLoaded', () => {
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

document.addEventListener('DOMContentLoaded', () => {
    // Observer pour déclencher l'apparition des éléments lors du scroll
    const observerOptions = {
        root: null,
        rootMargin: '0px 0px -50px 0px', // Déclenche un peu avant que l'élément n'arrive au bas de l'écran
        threshold: 0.15
    };

    const revealObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                // Optionnel : ne re-déclenche pas une fois affiché
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Appliquer l'effet à tous les éléments portant la classe .reveal
    document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));
});