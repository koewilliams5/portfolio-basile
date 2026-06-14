/**
 * PORTFOLIO BASILE — app.js
 * Interactions : menu mobile, smooth scroll, formulaire AJAX, animations au scroll
 */

document.addEventListener('DOMContentLoaded', function () {

    // ============================================================
    // 1. MENU HAMBURGER (mobile)
    // ============================================================
    const toggle = document.getElementById('nav-toggle');
    const navLinks = document.getElementById('nav-links');

    if (toggle && navLinks) {
        toggle.addEventListener('click', function () {
            const isOpen = navLinks.classList.toggle('open');
            toggle.setAttribute('aria-expanded', isOpen);
            // Change l'icône entre menu et X
            const icon = toggle.querySelector('i');
            icon.className = isOpen ? 'ti ti-x' : 'ti ti-menu-2';
        });

        // Ferme le menu quand on clique sur un lien
        navLinks.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('open');
                toggle.setAttribute('aria-expanded', 'false');
                const icon = toggle.querySelector('i');
                icon.className = 'ti ti-menu-2';
            });
        });
    }

    // ============================================================
    // 2. ANIMATION D'ENTRÉE AU SCROLL (Intersection Observer)
    //    Les cartes et sections apparaissent en douceur quand on scroll
    // ============================================================
    const animatedElements = document.querySelectorAll(
        '.skill-card, .project-card, .timeline-item, .stat-box, .cert-card, .contact-item'
    );

    // On rend les éléments invisibles au départ
    animatedElements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(24px)';
        el.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
    });

    // Observer : quand l'élément entre dans l'écran, il devient visible
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                // Délai progressif pour un effet "en cascade"
                setTimeout(() => {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }, index * 80);
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1,      // déclenche quand 10% de l'élément est visible
        rootMargin: '0px 0px -40px 0px'
    });

    animatedElements.forEach(el => observer.observe(el));

    // ============================================================
    // 3. LIEN ACTIF DANS LA NAVBAR SELON LE SCROLL
    // ============================================================
    const sections = document.querySelectorAll('section[id]');
    const navItems = document.querySelectorAll('.navbar-links a');

    const sectionObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const id = entry.target.getAttribute('id');
                navItems.forEach(link => {
                    link.style.color = '';
                    if (link.getAttribute('href') === '#' + id) {
                        link.style.color = 'var(--text)';
                    }
                });
            }
        });
    }, { threshold: 0.4 });

    sections.forEach(section => sectionObserver.observe(section));

    // ============================================================
    // 4. FORMULAIRE DE CONTACT — SOUMISSION AJAX
    //    Envoie le formulaire sans recharger la page
    // ============================================================
    const form = document.getElementById('contact-form');
    const submitBtn = document.getElementById('submit-btn');
    const btnText = document.getElementById('btn-text');
    const formSuccess = document.getElementById('form-success');
    const formError = document.getElementById('form-error');

    if (form) {
        form.addEventListener('submit', async function (e) {
            e.preventDefault();  // empêche le rechargement classique

            // Réinitialise les alertes
            formSuccess.style.display = 'none';
            formError.style.display = 'none';

            // Valide les champs côté client
            if (!validateForm()) return;

            // Affiche le chargement
            submitBtn.disabled = true;
            btnText.textContent = 'Envoi en cours...';
            const icon = submitBtn.querySelector('i');
            icon.className = 'ti ti-loader';
            icon.style.animation = 'spin 1s linear infinite';

            try {
                const formData = new FormData(form);

                const response = await fetch(form.action, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json',
                    },
                    body: formData,
                });

                if (response.ok) {
                    // Succès
                    form.reset();
                    formSuccess.style.display = 'block';
                    formSuccess.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                } else {
                    const data = await response.json();
                    formError.style.display = 'block';
                    // Affiche les erreurs de validation Laravel
                    if (data.errors) {
                        Object.keys(data.errors).forEach(field => {
                            const group = document.querySelector(`[name="${field}"]`)?.closest('.form-group');
                            if (group) {
                                group.classList.add('has-error');
                                const errorEl = group.querySelector('.form-error');
                                if (errorEl) errorEl.textContent = data.errors[field][0];
                            }
                        });
                    }
                }
            } catch (err) {
                formError.style.display = 'block';
            } finally {
                // Rétablit le bouton
                submitBtn.disabled = false;
                btnText.textContent = 'Envoyer le message';
                icon.className = 'ti ti-send';
                icon.style.animation = '';
            }
        });
    }

    // Validation côté client simple
    function validateForm() {
        let isValid = true;
        const fields = ['name', 'email', 'subject', 'message'];

        fields.forEach(fieldName => {
            const input = form.querySelector(`[name="${fieldName}"]`);
            const group = input?.closest('.form-group');
            const errorEl = group?.querySelector('.form-error');

            group?.classList.remove('has-error');

            if (!input?.value.trim()) {
                group?.classList.add('has-error');
                if (errorEl) errorEl.textContent = 'Ce champ est obligatoire.';
                isValid = false;
            } else if (fieldName === 'email' && !isValidEmail(input.value)) {
                group?.classList.add('has-error');
                if (errorEl) errorEl.textContent = 'Adresse email invalide.';
                isValid = false;
            }
        });

        return isValid;
    }

    function isValidEmail(email) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    }

    // ============================================================
    // 5. ANIMATION DU COMPTEUR DES STATISTIQUES
    // ============================================================
    const statNumbers = document.querySelectorAll('.stat-number');

    const countObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const el = entry.target;
                const target = parseInt(el.textContent.replace('+', ''));
                const suffix = el.textContent.includes('+') ? '+' : '';
                let current = 0;
                const step = Math.max(1, Math.floor(target / 40));
                const interval = setInterval(() => {
                    current = Math.min(current + step, target);
                    el.textContent = current + suffix;
                    if (current >= target) clearInterval(interval);
                }, 30);
                countObserver.unobserve(el);
            }
        });
    }, { threshold: 0.5 });

    statNumbers.forEach(el => countObserver.observe(el));

});

// Animation spin pour l'icône de chargement
const style = document.createElement('style');
style.textContent = '@keyframes spin { from { transform: rotate(0deg); } to { transform: rotate(360deg); } }';
document.head.appendChild(style);
