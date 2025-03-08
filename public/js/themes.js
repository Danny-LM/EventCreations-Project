
const themeToggle = document.querySelector('.theme-toggle');
const themeIconLight = document.querySelector('.theme-icon-light');
const themeIconDark = document.querySelector('.theme-icon-dark');
const body = document.body;

themeToggle.addEventListener('click', () => {
    if (body.getAttribute('data-theme') === 'light') {
        // Cambiar a modo oscuro
        body.setAttribute('data-theme', 'dark');
        themeIconLight.style.display = 'none'; // Oculta el ícono de sol
        themeIconDark.style.display = 'inline'; // Muestra el ícono de luna
    } else {
        // Cambiar a modo claro
        body.setAttribute('data-theme', 'light');
        themeIconDark.style.display = 'none'; // Oculta el ícono de luna
        themeIconLight.style.display = 'inline'; // Muestra el ícono de sol
    }
});
