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
                    <div class="loader-container d-flex justify-content-center align-items-center">
                        <div class="spinner-border spinner-color spinner-border-lg" role="status">
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
    window.addEventListener('popstate', async (e) => {
        if (e.state?.url) {
            try {
                document.getElementById('main-content').innerHTML = `
                    <div class="loader-container d-flex justify-content-center align-items-center">
                        <div class="spinner-border spinner-color spinner-border-lg" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                `;
    
                const response = await fetch(e.state.url, {
                    headers: { 'X-Requested-With': 'XMLHttpRequest' }
                });
    
                if (!response.ok) throw new Error();
    
                document.getElementById('main-content').innerHTML = await response.text();
    
                // Actualizar el enlace activo en la barra lateral
                document.querySelectorAll('.sidebar-link').forEach(item => {
                    item.classList.toggle('active', item.getAttribute('data-route') === e.state.url);
                });
    
            } catch (error) {
                console.error("Error al cargar la página:", error);
                window.location.href = e.state.url; // Fallback en caso de error
            }
        }
    });    

    // Set the initial active link
    const currentPath = window.location.pathname.split('/').pop();
    document.querySelector(`.sidebar-link[data-route*="${currentPath}"]`)?.classList.add('active');
});
