<!DOCTYPE html>
<html lang="en">
<head>
<title>Grubbing Greens Homepage</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<script src="greenFunctions.js"></script>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
</head>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-card w3-left-align w3-large" style="background-color:rgb(9, 102, 29);color:white">
    <a href="LoggedInHomepage.html" class="w3-bar-item w3-button w3-padding-large w3-white"><img src="https://cdn-icons-png.flaticon.com/512/25/25694.png" alt="buttonpng" width="30"/></a>
    <a href="yourPlant.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Your Plants</a>
    <a href="availablePlant.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Available plants</a>
    <a href="profile.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Profile</a>
    <a href="index.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white w3-display-topright">Logout</a>
    <!---<link href='https://css.gg/profile.css' rel='stylesheet'> --->
  </div>


<!-- Header -->
<header class="w3-container w3-green w3-center" style="padding: 50px 16px; border:2px solid black;">
    <h1 class="w3-margin w3-jumbo">Available Plants</h1>
  </header>

    <div class="plantsImg">
      <figure  class = "radish" >
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRyWCHmbP978O9Gagf84MtIpAaLi-fd8ReaZan2jHyIo6Hy5Z0Ss3fzTcwjzvdLiAaOJLg&usqp=CAU" alt="Trulli" style="width:260px">
        <figcaption class="imgtitle">Radish</figcaption>
        <p>
        <button type="button" class="createbtn" id="radishBtn" name="radishSubmit" onclick="btnModal('radishModal')">See Preset</button>
        </p>
      </figure>


      <figure  class = "radish" >
        <img src="https://cdn.shopify.com/s/files/1/0610/5143/7207/products/broccoli_b0a5486b-cf93-49c1-8471-58a7348127f5_1080x.webp?v=1663860843" alt="Trulli" style="width:220px">
        <figcaption class="imgtitle">Broccoli</figcaption>
        <p>
        <button type="button" onclick="btnModal('broccoliModal')" name="broccoliSubmit" class="createbtn" id="broccoli">See Preset</button>
   </p>
      </figure>

      <figure  class = "radish" >
        <img src="https://leafproduce.nz/wp-content/uploads/2022/09/living-red-cabbage-microgreens-kerikeri-300x300_240x240.jpg" alt="Trulli" style="width:200px">
        <figcaption class="imgtitle">Cabbage</figcaption>
        <p>
        <button type="button" onclick="btnModal('cabbageModal')" name="cabbageSubmit" class="createbtn" id="cabbage">See Preset</button>
        </p>
      </figure>
    </div>

    <!-- The Modal -->

    <form action="addRadish.php" method="post">
    <div id="radishModal" class="modal">
      <!-- Modal content -->
      <div class="modal-content">
        <span class="close" onclick="modalClose('radishModal')">&times;</span>
        <h3 class="preTitle">Radish</h3>

        <p>
        <?php
        require 'front_connection.php';
        require 'radishDisplay.php';
        require 'fullShelves.php';
        ?>
        </p>
       <button class="buttonBlack" name="radishConfirm">Confirm Plant</button>




      </div>
    </div>
   </form>

    <form action="addBroccoli.php" method="post">
    <div id="broccoliModal" class="modal">
      <div class="modal-content">
        <span class="close" onclick="modalClose('broccoliModal')">&times;</span>
        <h3 class="preTitle">Broccoli</h3>

        <p>
        <?php
        require 'front_connection.php';
        require 'broccoliDisplay.php';
        ?>
        </p>



        <button class="buttonBlack" name="broccoliConfirm" onclick="window.location.href='youPlant.html'">Confirm Plant</button>
      </div>
    </div>
    </form>

  
    

    <form action="addCabbage.php" method="post">
    <div id="cabbageModal" class="modal">
      <div class="modal-content">
        <span class="close" onclick="modalClose('cabbageModal')">&times;</span>
        <h3 class="preTitle">Cabbage</h3>


        <p>
        <?php
        require 'front_connection.php';
        require 'cabbageDisplay.php';
        ?>
        </p>






        <button class="buttonBlack" name="cabbageConfirm"onclick="window.location.href='youPlant.html'">Confirm Plant</button>
      </div>
    </div>
    </form>


<script>
  function displayMessage() {
    alert("Plant Selected");
  }

  var buttonBlack = document.getElementById("buttonBlack");
  buttonBlack.addEventListener("click", displayMessage);
</script>

  </body>
