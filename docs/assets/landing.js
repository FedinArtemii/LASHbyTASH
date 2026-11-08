const motionPreference = window.matchMedia('(prefers-reduced-motion: reduce)');
const hero = document.querySelector('.lash-hero');
const portrait = hero?.querySelector('.lash-hero-photo img');
let reveal;

function revealPortrait() {
  if (motionPreference.matches || !portrait.naturalWidth) return;
  reveal = portrait.animate([
    { clipPath: 'ellipse(59% 2% at 54% 43%)' },
    { clipPath: 'ellipse(86% 87% at 54% 43%)' },
  ], { duration: 730, easing: 'cubic-bezier(.22, 1, .36, 1)' });
}

if (portrait?.animate) {
  hero.dataset.enter = '';
  if (portrait.complete) revealPortrait();
  else portrait.addEventListener('load', revealPortrait, { once: true });
  motionPreference.addEventListener('change', event => {
    if (event.matches) reveal?.cancel();
  });
}

const menu = document.querySelector('.lash-menu');
const menuToggle = menu?.querySelector('summary');
menu?.addEventListener('keydown', event => {
  if (event.key === 'Escape' && menu.open) {
    menu.open = false;
    menuToggle.focus();
  }
});

function openService() {
  const id = location.hash.slice(1);
  const detail = document.getElementById(id);
  if (detail?.matches('details.lash-service')) detail.open = true;
}

document.addEventListener('click', event => {
  const link = event.target.closest('a[href^="#"]');
  if (!link) return;
  const detail = document.getElementById(link.hash.slice(1));
  if (detail?.matches('details.lash-service')) detail.open = true;
  if (menu?.open && menu.contains(link) && detail) {
    menu.open = false;
    const target = detail.matches('details') ? detail.querySelector('summary') : detail;
    if (!target.hasAttribute('tabindex') && !target.matches('summary')) target.tabIndex = -1;
    target.focus({ preventScroll: true });
  }
});
window.addEventListener('hashchange', openService);
openService();
