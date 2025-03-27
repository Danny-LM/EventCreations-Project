export function initSidebarToggle() {
    const hamBurger = document.querySelector("#sidebar-toggle-btn");
    const sidebar = document.querySelector("#sidebar");

    if (!hamBurger || !sidebar) {
        // console.error("❌ Elements not found: Check that the IDs are correct.");
        return;
    }

    const storedState = localStorage.getItem('sidebarExpanded');
    // console.log(`🟡 Stored state: ${storedState}`);

    if (storedState === 'false') {
        sidebar.classList.remove("expand");
        // console.log(`✅ Sidebar collapsed on load.`);
    }

    hamBurger.addEventListener("click", function() {
        const isExpanded = sidebar.classList.toggle("expand");
        localStorage.setItem('sidebarExpanded', isExpanded);

        // console.log(`🟢 Sidebar ${isExpanded ? 'expanded' : 'collapsed'} after click.`);
    });
}
