// Get the modal
var modal = document.getElementById("contactFormModal");

var btn = document.getElementById("contactBtn");

var span = document.getElementsByClassName("close")[0];

// open
btn.onclick = function() {
  modal.style.display = "block";
}

//  (x)
span.onclick = function() {
  modal.style.display = "none";
}

// outside
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

function showMessage(message) {
  alert(message);
}