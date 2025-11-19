// Minimal JS for mobile menu toggle
document.addEventListener('DOMContentLoaded', () => {
    const toggle = document.querySelector('.pars_menu_toggle');
    const menu = document.querySelector('.pars_mobile_menu');
    if (toggle && menu) {
        toggle.addEventListener('click', () => {
            menu.classList.toggle('pars_mobile_menu_open');
        });
    }
});
