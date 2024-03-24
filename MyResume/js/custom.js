// custom.js
document.addEventListener("DOMContentLoaded", function() {
    var signInButton = document.getElementById("signInButton");

    if (signInButton) {
        signInButton.addEventListener("click", function(event) {
            event.preventDefault();
            console.log("Sign in button clicked! Custom code can go here.");

            // Uncomment the line below once the custom code is ready
            window.location.href = 'admin.html';
        });
    }
});

// c