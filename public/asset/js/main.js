'use strict';

const $ = (sel, ctx = document) => ctx.querySelector(sel);
const $$ = (sel, ctx = document) => [...ctx.querySelectorAll(sel)];

/* 1. NAVBAR — scroll + active link */
(function initNavbar() {
  const nav = $('#mainNav');
  if (!nav) return;
  const THRESHOLD = 60;

  window.addEventListener('scroll', () => {
    nav.classList.toggle('scrolled', window.scrollY > THRESHOLD);
  }, { passive: true });
  nav.classList.toggle('scrolled', window.scrollY > THRESHOLD);

  // Ferme le menu mobile au clic sur un lien
  $$('.nav-link', nav).forEach(link => {
    link.addEventListener('click', () => {
      const collapse = $('#navMenu');
      if (collapse?.classList.contains('show')) {
        bootstrap.Collapse.getInstance(collapse)?.hide();
      }
    });
  });

  // Lien actif au scroll
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      const link = $(`#mainNav .nav-link[href="#${entry.target.id}"]`);
      if (link) link.classList.toggle('active', entry.isIntersecting);
    });
  }, { rootMargin: `-${THRESHOLD}px 0px -55% 0px`, threshold: 0 });

  $$('section[id]').forEach(s => observer.observe(s));
})();

/* 2. REVEAL AU SCROLL */
(function initReveal() {
  const els = $$('[data-reveal]');
  if (!els.length) return;

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12 });

  els.forEach(el => observer.observe(el));
})();

/* 3. SMOOTH SCROLL */
(function initSmoothScroll() {
  document.addEventListener('click', e => {
    const anchor = e.target.closest('a[href^="#"]');
    if (!anchor) return;
    const target = $(anchor.getAttribute('href'));
    if (!target) return;
    e.preventDefault();
    const navH = parseInt(getComputedStyle(document.documentElement).getPropertyValue('--nav-h')) || 72;
    window.scrollTo({ top: target.getBoundingClientRect().top + window.scrollY - navH, behavior: 'smooth' });
  });
})();

/* 4. FORMULAIRE — validation + envoi vers agence.needhouse@gmail.com */
(function initContactForm() {
  const form = $('#contactForm');
  if (!form) return;

  const feedback  = $('#formFeedback');
  const submitBtn = $('#submitBtn');
  const btnText   = $('.btn-text', submitBtn);
  const btnLoad   = $('.btn-loading', submitBtn);

  const setLoading = on => {
    submitBtn.disabled = on;
    btnText.classList.toggle('d-none', on);
    btnLoad.classList.toggle('d-none', !on);
  };

  form.addEventListener('submit', async e => {
    e.preventDefault();
    if (!form.checkValidity()) { form.classList.add('was-validated'); return; }
    form.classList.remove('was-validated');
    setLoading(true);
    if (feedback) feedback.innerHTML = '';

    const payload = Object.fromEntries(new FormData(form).entries());

    // Envoi vers agence.needhouse@gmail.com
    // Remplacer l'URL ci-dessous par l'endpoint réel (ex: Formspree, Netlify Forms, etc.)
    // Exemple Formspree : fetch('https://formspree.io/f/XXXXXX', { method:'POST', body: new FormData(form) })
    await new Promise(r => setTimeout(r, 1200)); // simulation — à remplacer

    setLoading(false);
    form.reset();

    // CORRECTION : nouveau message de confirmation demandé par la cliente
    if (feedback) feedback.innerHTML = `
      <div class="alert-success" role="alert">
        ✓ Votre demande a été envoyée avec succès.<br />
        Vous allez recevoir un e-mail de confirmation.
      </div>`;

    console.info('[Need House] Form submitted — envoi vers agence.needhouse@gmail.com :', payload);
  });
})();

/* 5. BACK TO TOP */
(function initBackToTop() {
  const btn = $('#backToTop');
  if (!btn) return;
  window.addEventListener('scroll', () => btn.classList.toggle('is-visible', window.scrollY > 400), { passive: true });
  btn.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
})();

/* 6. ANNÉE FOOTER */
(function initYear() {
  const el = $('#currentYear');
  if (el) el.textContent = new Date().getFullYear();
})();

/* 7. HAMBURGER ANIMATION */
(function initToggler() {
  const btn = $('.navbar-toggler');
  if (btn) btn.addEventListener('click', () => btn.classList.toggle('is-open'));
})();

/* 8. TOGGLE ARTICLES */
(function initBlogToggle() {
  $$('.blog-read-more').forEach(btn => {
    btn.addEventListener('click', () => {
      const panel = $(`#${btn.getAttribute('aria-controls')}`);
      if (!panel) return;
      const isOpen = btn.getAttribute('aria-expanded') === 'true';
      panel.hidden = isOpen;
      btn.setAttribute('aria-expanded', String(!isOpen));
      btn.innerHTML = isOpen
        ? 'Lire l\'article <i class="bi bi-arrow-right"></i>'
        : 'Réduire <i class="bi bi-arrow-up"></i>';
      if (!isOpen) panel.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    });
  });
})();

