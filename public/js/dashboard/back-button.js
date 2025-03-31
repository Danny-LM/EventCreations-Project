document.addEventListener('DOMContentLoaded', function () {
    const backButton = document.querySelector('[data-back]');

    if (backButton) {
        backButton.addEventListener('click', function (e) {
            e.preventDefault();
            if (window.history.length > 1) {
                history.back();
            } else {
                console.warn('No hay historial de navegación.');
            }
        });
    }
});
