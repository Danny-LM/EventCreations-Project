document.addEventListener('DOMContentLoaded', function() {
    // Start the sidebar toggle
    import('./sidebar-toggle.js').then(module => {
        module.initSidebarToggle();
    });

    // const sidebar = document.querySelector("#sidebar");

    // // Debug: Depurate the sidebar state on page reload
    // const storedState = localStorage.getItem('sidebarExpanded');
    // console.log(`🟡 Sidebar state on load: ${storedState}`);

    // if (storedState !== null) {
    //     sidebar.classList.toggle("expand", storedState === 'true');
    // }

    // Manage clicks on the sidebar
    document.querySelectorAll('.sidebar-link[data-route]').forEach(link => {
        link.addEventListener('click', async (e) => {
            e.preventDefault();
            const url = link.getAttribute('data-route');

            try {
                document.getElementById('main-content').innerHTML = `
                    <div class="d-flex justify-content-center py-5">
                        <div class="spinner-border text-primary" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                `;

                const response = await fetch(url, {
                    headers: { 'X-Requested-With': 'XMLHttpRequest' }
                });

                if (!response.ok) throw new Error();

                document.getElementById('main-content').innerHTML = await response.text();
                history.pushState({ url }, '', url);

                document.querySelectorAll('.sidebar-link').forEach(item => {
                    item.classList.toggle('active', item === link);
                });

            } catch (error) {
                window.location.href = url; // Fallback in case of error
            }
        });
    });

    // Manage popstate (back/forward buttons)
    window.addEventListener('popstate', (e) => {
        if (e.state?.url) {
            window.location.href = e.state.url;
        }
    });

    // Set the initial active link
    const currentPath = window.location.pathname.split('/').pop();
    document.querySelector(`.sidebar-link[data-route*="${currentPath}"]`)?.classList.add('active');
});
