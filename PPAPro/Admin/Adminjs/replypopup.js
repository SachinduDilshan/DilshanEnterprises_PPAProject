// Function to open popup window
function openPopup(feedbackId) {
    // Open popup window with desired URL
    window.open('edit/readmsg.php?feedbackid=' + feedbackId, '_blank', 'width=600,height=400');
}

// Function to change color and save state in local storage
function changeColorAndSaveState(button, feedbackId) {
    // Change color to ash color
    button.style.backgroundColor = '#808080';
    // Disable button to prevent further clicks
    button.disabled = true;
    // Save the clicked state in local storage
    localStorage.setItem('feedback_' + feedbackId, 'read');
    // Open popup window
    openPopup(feedbackId);
}

// Function to check if button has been clicked before and update its state
function updateButtonState(button, feedbackId) {
    // Check if button state is stored in local storage
    var state = localStorage.getItem('feedback_' + feedbackId);
    if (state === 'read') {
        // If button has been clicked before, change color to ash and disable it
        button.style.backgroundColor = '#808080';
        button.disabled = true;
    }
}

// Get all buttons with the class 'feedbackButton'
var buttons = document.querySelectorAll('.feedbackButton');

// Loop through each button and attach a click event listener
buttons.forEach(function(button) {
    var feedbackId = button.getAttribute('data-feedbackid');
    updateButtonState(button, feedbackId);
    button.addEventListener('click', function() {
        changeColorAndSaveState(button, feedbackId);
    });
});