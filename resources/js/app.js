document.addEventListener('DOMContentLoaded', () => {
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    const toggle = document.getElementById('nav-toggle');
    const menu = document.getElementById('nav-menu');
    const navBar = document.getElementById('nav-bar');
    const links = menu?.querySelectorAll('a');

    toggle?.addEventListener('click', () => {
        menu?.classList.toggle('hidden');
        menu?.classList.toggle('flex');
    });

    links?.forEach((link) => {
        link.addEventListener('click', () => {
            if (window.innerWidth < 768) {
                menu?.classList.add('hidden');
                menu?.classList.remove('flex');
            }
        });
    });

    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('[data-nav-link]');

    const sectionObserver = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    navLinks.forEach((link) => {
                        const isActive = link.getAttribute('href') === `#${entry.target.id}`;
                        link.classList.toggle('text-teal-700', isActive);
                        link.classList.toggle('font-semibold', isActive);
                        link.classList.toggle('text-slate-600', !isActive);
                    });
                }
            });
        },
        { rootMargin: '-40% 0px -55% 0px' }
    );

    sections.forEach((section) => sectionObserver.observe(section));

    if (!prefersReducedMotion) {
        const revealObserver = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        revealObserver.unobserve(entry.target);
                    }
                });
            },
            { threshold: 0.12, rootMargin: '0px 0px -40px 0px' }
        );

        document.querySelectorAll('.reveal, .reveal-left, .reveal-scale, .stagger-children, .timeline-item').forEach((el) => {
            revealObserver.observe(el);
        });
    } else {
        document.querySelectorAll('.reveal, .reveal-left, .reveal-scale, .stagger-children, .timeline-item').forEach((el) => {
            el.classList.add('is-visible');
        });
    }

    const onScroll = () => {
        navBar?.classList.toggle('is-scrolled', window.scrollY > 16);
    };

    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
});
