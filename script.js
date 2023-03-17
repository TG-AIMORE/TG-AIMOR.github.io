// Get the form element
const form = document.querySelector('form');

// Add an event listener for form submission
form.addEventListener('submit', (event) => {
    // Prevent the default form submission behavior
    event.preventDefault();

    // Get the input elements from the form
    const ipAddress = document.querySelector('#ip-address').value;
    const portNumber = document.querySelector('#port-number').value;
    const duration = document.querySelector('#duration').value;

    // Create the URL for the API request
    const url = `https://api.hackertarget.com/nping/?q=${ipAddress}&p=${portNumber}&t=${duration}`;

    // Send a GET request to the API
    fetch(url)
        .then(response => response.text())
        .then(data => {
            // Get the pre element and update its text content with the API response
            const responseElement = document.querySelector('#response');
            responseElement.textContent = data;
        })
        .catch(error => {
            // Get the pre element and display an error message
            const responseElement = document.querySelector('#response');
            responseElement.textContent = `Error: ${error.message}`;
        });
});
