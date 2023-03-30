// Get the modal
var radishModal = document.getElementById("radishModal");

// When the user clicks on the button, open the modal
function btnModal(id) {
  document.getElementById(id).style.display = "block";
}

// When the user clicks on <span> (x), close the modal
function modalClose(id) {
  document.getElementById(id).style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == radishModal) {
    radishModal.style.display = "none";
  }
}

function validateForm() {
  const email = document.getElementById('email').value;
  const username = document.getElementById('username').value;
  const password = document.getElementById('password').value;
  const confirmPassword = document.getElementById('confirmPassword').value;

  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  const hasCharacterRegex = /[a-zA-Z]/;

  if (!emailRegex.test(email)) {
    alert('Please enter a valid email address.');
    return false;
  }

  if (username.length < 1) {
    alert('Please enter a username.');
    return false;
  }

  if (password.length < 8 || !hasCharacterRegex.test(password)) {
    alert('Password must be at least 8 characters long and contain at least one letter.');
    return false;
  }

  if (password !== confirmPassword) {
    alert('Passwords do not match. Please re-enter your password.');
    return false;
  }

  return true;
}
