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
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-card w3-left-align w3-large" style="background-color:rgb(9, 102, 29);color:white">
    <a href="LoggedInHomepage.html" class="w3-bar-item w3-button w3-padding-large w3-white"><img src="https://cdn-icons-png.flaticon.com/512/25/25694.png" alt="buttonpng" width="25"/></a>
    <a href="youPlant.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Your Plants</a>
    <a href="availablePlant.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Available plants</a>
    <a href="profile.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Profile</a>
     <a href="index.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white w3-display-topright">Logout</a>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-green w3-center" style="padding:50px 16px; border:2px solid black;">
  <h1 class="w3-margin w3-jumbo">Your Plants</h1>
</header>
<div class="move">
  <button class="connection" type="button" onclick="window.location.href='availablePlant.html'" class="createbtn">Add New Plants</button>
</div>

<!-- This html is to make humidity,temperature, and moisture visualize and display on website,
also need to figure out the exactly apiUrl for central End -->

<!-- First Grid -->
<!-- Radish -->
<div class="plantsImg">
  <figure class="radish2">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRyWCHmbP978O9Gagf84MtIpAaLi-fd8ReaZan2jHyIo6Hy5Z0Ss3fzTcwjzvdLiAaOJLg&usqp=CAU" alt="Trulli" style="width:260px">
    <figcaption class="imgtitle">Your Radish</figcaption>
    <div class="plant-info">
        <div class="humidity" id="radish-humidity"></div>
        <div class="temperature" id="radish-temperature"></div>
        <div class="moisture" id="radish-moisture"></div>
      </div>

<!-- This html is to make humidity,temperature, and moisture visualize and display on website,
also need to figure out the exactly apiUrl for central End -->
<!-- Second Grid -->
<!-- Broccoli -->
<figure  class = "radish2" >
    <img src="https://cdn.shopify.com/s/files/1/0610/5143/7207/products/broccoli_b0a5486b-cf93-49c1-8471-58a7348127f5_1080x.webp?v=1663860843" alt="Trulli" style="width:220px">
    <figcaption class="imgtitle"> Your Broccoli</figcaption>
    </figure> 
    <div class="plant-info">
    <div class="humidity" id="broccoli-humidity"></div>
    <div class="temperature" id="broccoli-temperature"></div>
    <div class="moisture" id="broccoli-moisture"></div>
    </div>


<!-- This html is to make humidity,temperature, and moisture visualize and display on website,
also need to figure out the exactly apiUrl for central End -->    
<!-- Third Grid -->
<!-- Cabbage -->
<figure  class = "radish2" >
  <img src="https://leafproduce.nz/wp-content/uploads/2022/09/living-red-cabbage-microgreens-kerikeri-300x300_240x240.jpg" alt="Trulli" style="width:200px">
  <figcaption class="imgtitle"> Your Cabbage</figcaption>
  <div class="plant-info">
    <div class="humidity" id="cabbage-humidity"></div>
    <div class="temperature" id="cabbage-temperature"></div>
    <div class="moisture" id="cabbage-moisture"></div>
  </div>
</figure>




<script>
    // Replace the URL with the path to your server-side script that returns the plant data
    const apiUrl = 'http://your-server-url/get-plant-data';
  
    function updatePlantData() {
      fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
          document.getElementById('radish-humidity').innerText = `Humidity: ${data.radish.humidity}%`;
          document.getElementById('radish-temperature').innerText = `Temperature: ${data.radish.temperature}°F`;
          document.getElementById('radish-moisture').innerText = `Moisture: ${data.radish.moisture ? 'Detected' : 'Not Detected'}`;
  
          document.getElementById('broccoli-humidity').innerText = `Humidity: ${data.broccoli.humidity}%`;
          document.getElementById('broccoli-temperature').innerText = `Temperature: ${data.broccoli.temperature}°F`;
          document.getElementById('broccoli-moisture').innerText = `Moisture: ${data.broccoli.moisture ? 'Detected' : 'Not Detected'}`;
  
          document.getElementById('cabbage-humidity').innerText = `Humidity: ${data.cabbage.humidity}%`;
          document.getElementById('cabbage-temperature').innerText = `Temperature: ${data.cabbage.temperature}°F`;
          document.getElementById('cabbage-moisture').innerText = `Moisture: ${data.cabbage.moisture ? 'Detected' : 'Not Detected'}`;
        })
        .catch(error => {
          console.error('Error fetching plant data:', error);
        });
    }
  
    // Update plant data when the page loads
    updatePlantData();
  </script>
  
