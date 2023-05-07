<!DOCTYPE html>
<html lang="en">
<head>
<title>Grubbing Greens Homepage</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="refresh" content="30">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="style.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
.hide {display: none}
</style>


</head>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-card w3-left-align w3-large" style="background-color:rgb(9, 102, 29);color:white">
    <a href="LoggedInHomepage.html" class="w3-bar-item w3-button w3-padding-large w3-white"><img src="https://cdn-icons-png.flaticon.com/512/25/25694.png" alt="buttonpng" width="25"/></a>
    <a href="yourPlant.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Your Plants</a>
    <a href="availablePlant.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Available plants</a>
    <a href="profile.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Profile</a>
     <a href="index.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white w3-display-topright">Logout</a>
    <!---<link href='https://css.gg/profile.css' rel='stylesheet'> --->
  </div>
<!-- Header -->
<header class="w3-container w3-green w3-center" style="padding:50px 16px; border:2px solid black;">
  <h1 class="w3-margin w3-jumbo">Your Plants</h1>
</header>
<div class="move">
  <button class="connection" type="button" onclick="window.location.href='availablePlant.php'" class="createbtn">Add New Plants</button>
</div>
<!-- First Grid -->
<?php
        include 'front_connection.php';
        session_start();
        $sql = "SELECT preset_id_shelf1 FROM User WHERE username ='".$_SESSION['username']."'";
        $result = mysqli_fetch_assoc(mysqli_query($conn, $sql));
        if ($result['preset_id_shelf1'] == 1) {
                echo "<div class='plantsImg'>";
                echo " <figure  class = 'radish2' >";
                echo "<h2 class='shelves'> Shelf 1 <h2>";
                echo " <img class='centerimg' src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRyWCHmbP978O9Gagf84MtIpAaLi-fd8ReaZan2jHyIo6Hy5Z0Ss3fzTcwjzvdLiAaOJLg&usqp=CAU' alt='Trulli' style='width:260px'>";
                echo " <figcaption class='imgtitle'> Your Radish</figcaption>";

                echo "<div id = 'sensor' class = 'modal-content'>";
                include 'shelf1_data.php';
                echo "</div>";
                echo "<button id='myButton' onclick='sendData(1)'>Initiate Preset</button>";
                echo "<div id='status'></div>";
                echo "</figure>";

        } elseif ($result['preset_id_shelf1'] == 2) {
                echo "<div class='plantsImg'>";
                echo " <figure  class = 'radish2' >";
                echo "<h2 class='shelves'> Shelf 1 <h2>";
                echo " <img class='centerimg' src='https://cdn.shopify.com/s/files/1/0610/5143/7207/products/broccoli_b0a5486b-cf93-49c1-8471-58a7348127f5_1080x.webp?v=1663860843' alt='Trulli' style='width:220px'              >";
                echo " <figcaption class='imgtitle'>Your Broccoli</figcaption>";

                echo "<div id = 'sensor' class  ='modal-content'>";
                include 'shelf1_data.php';
                echo "</div>";
                echo "<button id='myButton' onclick='sendData(2)'>Initiate Preset</button>";
                echo "<div id='status'></div>";

                echo " </figure>";
        } elseif ($result['preset_id_shelf1'] == 3) {
                echo "<div class='plantsImg'>";
                echo " <figure  class = 'radish2' >";
                echo "<h2 class='shelves'> Shelf 1 <h2>";
                echo " <img class='centerimg' src='https://leafproduce.nz/wp-content/uploads/2022/09/living-red-cabbage-microgreens-kerikeri-300x300_240x240.jpg' alt='Trulli' style='width:220px'                >";
                echo " <figcaption class='imgtitle'>Your Cabbage</figcaption>";

                echo "<div id = 'sensor' class = 'modal-content'>";
                include 'shelf1_data.php';
                echo "</div>";
                echo "<button id='myButton' onclick='sendData(3)'>Initiate Preset</button>";
                echo "<div id='status'></div>";

                echo " </figure>";
        }

         $sql2 = "SELECT preset_id_shelf2 FROM User WHERE username ='".$_SESSION['username']."'";

        $result2 = mysqli_fetch_assoc(mysqli_query($conn, $sql2));
 if ($result2['preset_id_shelf2'] == 1) {
                echo "<div class='plantsImg'>";
                echo " <figure  class = 'radish2' >";
                echo "<h2 class='shelves'> Shelf 2 <h2>";
                echo " <img class='centerimg' src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRyWCHmbP978O9Gagf84MtIpAaLi-fd8ReaZan2jHyIo6Hy5Z0Ss3fzTcwjzvdLiAaOJLg&usqp=CAU' alt='Trulli' style='width:260px'>";
                echo " <figcaption class='imgtitle'> Your Radish</figcaption>";

                echo "<div id = 'sensor' class = 'modal-content'>";
                include 'shelf1_data.php';
                echo "</div>";
                echo "<button id='myButton2' onclick='sendData2(1)'>Initiate Preset</button>";
                echo "<div id='status2'></div>";

                echo " </figure>";
        } elseif ($result2['preset_id_shelf2'] == 2) {
                echo "<div class='plantsImg'>";
                echo " <figure  class = 'radish2' >";
                echo "<h2 class='shelves'> Shelf 2 <h2>";
                echo " <img class='centerimg' src='https://cdn.shopify.com/s/files/1/0610/5143/7207/products/broccoli_b0a5486b-cf93-49c1-8471-58a7348127f5_1080x.webp?v=1663860843' alt='Trulli' style='width:220px'              >";
                echo " <figcaption class='imgtitle'>Your Broccoli</figcaption>";

                echo "<div id = 'sensor' class = 'modal-content'>";
                include 'shelf1_data.php';
                echo "</div>";
                echo "<button id='myButton2' onclick='sendData2(2)'>Initiate Preset</button>";
                echo "<div id='status2'></div>";

                echo " </figure>";
        } elseif ($result2['preset_id_shelf2'] == 3) {
                echo "<div class='plantsImg'>";
                echo " <figure  class = 'radish2' >";
                echo "<h2 class='shelves'> Shelf 2 <h2>";
                echo " <img class='centerimg' src='https://leafproduce.nz/wp-content/uploads/2022/09/living-red-cabbage-microgreens-kerikeri-300x300_240x240.jpg' alt='Trulli' style='width:220px'                >";
                echo " <figcaption class='imgtitle'>Your Cabbage</figcaption>";

                echo "<div id = 'sensor' class = 'modal-content'>";
                include 'shelf1_data.php';
                echo "</div>";
                echo "<button id='myButton2' onclick='sendData2(3)'>Initiate Preset</button>";
                echo "<div id='status2'></div>";

                echo " </figure>";
        }
?>
   <script>
        function sendData2(presetID) {

        var button = document.getElementById('myButton2');
        button.classList.add('hide');

        const statusEl = document.getElementById('status2');
        statusEl.textContent = 'Please wait...';

        fetch('//grubbingreen.com/api', {
        method: 'POST',
        headers: {
           'Content-Type': 'application/json'
          },
          body: JSON.stringify({
          preset_id: presetID
         })
        })
        .then((response) => response.json())
        .then((data) => {
        if (data.message === 'Success') {
        statusEl.textContent = 'Initialization successful!';
        setTimeout(() => {
        statusEl.textContent = '';
         }, 5000);
        } else {
         statusEl.textContent = 'Initialization failed';
         setTimeout(() => {
         statusEl.textContent = '';
         }, 5000);
        }
        })
        .catch((error) => {
        statusEl.textContent = 'Error fetching status: Check if the API servers are running';
         });
      }

        function sendData(presetID) {

          var button = document.getElementById('myButton');
        button.classList.add('hide');

        const statusEl = document.getElementById('status');
        statusEl.textContent = 'Please wait...';

        fetch('//grubbingreen.com/api', {
        method: 'POST',
        headers: {
        'Content-Type': 'application/json'
        },
        body: JSON.stringify({
        preset_id: presetID
        })
        })
        .then((response) => response.json())
        .then((data) => {
        if (data.message === 'Success') {
        statusEl.textContent = 'Initialization successful!';
        setTimeout(() => {
        statusEl.textContent = '';
        }, 5000);
        } else {
        statusEl.textContent = 'Initialization failed';
        setTimeout(() => {
        statusEl.textContent = '';
        }, 5000);
        }                                                                                                                                                 
})
  .catch((error) => {
        statusEl.textContent = 'Error fetching status: Check if the API servers are running';
        });
                              
        }
       </script>


</html>
                                                                                                                                                                                         222,2         Bot                                                                                           
          
                                                                                                                                                                                         106,2         39%                                                         
          
