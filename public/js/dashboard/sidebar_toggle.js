export function initSidebarToggle() {
    const hamBurger = document.querySelector("#sidebar-toggle-btn");
    const sidebar = document.querySelector("#sidebar");

    if (!hamBurger || !sidebar) return;

    // Cargar estado inicial
    if (localStorage.getItem('sidebarExpanded') === 'true') {
        sidebar.classList.add("expand");
    }

    // Manejar clicks
    hamBurger.addEventListener("click", function() {
        sidebar.classList.toggle("expand");
        localStorage.setItem('sidebarExpanded', sidebar.classList.contains("expand"));
    });
}
