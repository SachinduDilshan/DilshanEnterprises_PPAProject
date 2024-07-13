// Get the modal
var modal = document.getElementById("signupFormModal");

var btn = document.getElementById("createBtn");

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


///Login form
var loginModal = document.getElementById("loginFormModal");
var loginBtn = document.getElementById("loginBtn");
var loginCloseBtn = document.getElementsByClassName("close")[1]; 

// open login modal
loginBtn.onclick = function() {
  loginModal.style.display = "block";
  modal.style.display = "none";
}

// close login modal when click (x)
loginCloseBtn.onclick = function() {

  loginModal.style.display = "none";
}

// close login modal when click outside
window.onclick = function(event) {
  if (event.target == loginModal) {
    loginModal.style.display = "none";
  }
}

function showMessage(message) {
  alert(message);
}


