
// Dynamic messages
const messages = [
    "Welcome to EventCreations!",
    "Check your lists, a great event is about to begin!"
];

// Select the element to change
const dynamicMessage = document.getElementById('dynamic-message');

// Change the message on page load
window.onload = function() {
    const randomIndex = Math.floor(Math.random() * messages.length);
    dynamicMessage.textContent = messages[randomIndex];
};
