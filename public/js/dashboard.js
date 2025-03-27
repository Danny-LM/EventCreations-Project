// Navegación SPA mejorada
document.addEventListener('DOMContentLoaded', function() {
    // Cargar sidebar toggle
    import('./dashboard/sidebar-toggle.js').then(module => {
        module.initSidebarToggle();
    });

    // Manejar clicks en el sidebar
    document.querySelectorAll('.sidebar-link[data-route]').forEach(link => {
        link.addEventListener('click', async (e) => {
            e.preventDefault();
            const url = link.getAttribute('data-route');
            
            try {
                // Mostrar loader
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
                
                // Actualizar active state
                document.querySelectorAll('.sidebar-link').forEach(item => {
                    item.classList.toggle('active', item === link);
                });
                
            } catch (error) {
                window.location.href = url; // Fallback
            }
        });
    });

    // Manejar popstate
    window.addEventListener('popstate', (e) => {
        if (e.state?.url) {
            window.location.href = e.state.url;
        }
    });

    // Setear active link inicial
    const currentPath = window.location.pathname.split('/').pop();
    document.querySelector(`.sidebar-link[data-route*="${currentPath}"]`)?.classList.add('active');
});
