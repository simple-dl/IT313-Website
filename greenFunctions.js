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
