/*=== TRANSFORMAR O MENU HAMBURGUER EM X ===*/
const menuHamburguer = document.querySelector('.menu-hamburguer');

menuHamburguer.addEventListener('click', () => {
    toggleMenu();
});

function toggleMenu() {
    const nav = document.querySelector('.nav-responsiva');
    menuHamburguer.classList.toggle('mudar');

    if (menuHamburguer.classList.contains('mudar')) {
        nav.style.display = 'block';
    } else {
        nav.style.display = 'none';
    }
}