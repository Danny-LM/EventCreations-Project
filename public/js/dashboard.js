// dashboard.js
const hamBurger = document.querySelector("#sidebar-toggle-btn");

hamBurger.addEventListener("click", function () {
    console.log("clicked");
    document.querySelector("#sidebar").classList.toggle("expand");
});


// Wait for the DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function () {
    // Select all sidebar links
    const sidebarLinks = document.querySelectorAll('.sidebar-link');
    // Select the container for dynamic content
    const dynamicContent = document.getElementById('dynamic-content');

    // Add click event listeners to each sidebar link
    sidebarLinks.forEach(link => {
        link.addEventListener('click', function (event) {
            event.preventDefault(); // Prevent the default link behavior
            const route = this.getAttribute('data-route'); // Get the route from the data-route attribute

            // Fetch the content from the server
            fetch(route)
                .then(response => response.text()) // Parse the response as text
                .then(data => {
                    dynamicContent.innerHTML = data; // Update the dynamic content
                })
                .catch(error => console.error('Error:', error)); // Handle any errors
        });
    });
});
