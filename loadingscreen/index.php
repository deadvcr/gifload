<?php
#Created by DeadVCR with love <3



$imgDir = 'images/';
$imgSrc = scandir($imgDir);
$i = rand(2, sizeof($imgSrc)-1);

$musDir = 'music/';
$musSrc = scandir($musDir);
$m = rand(2, sizeof($musSrc)-1);
$name = $musSrc[$m];


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="styleboys/style.css">

  <title>Loading Screen</title>
</head>
<body>
  <audio id="audiothing" autoplay loop>
    <source src="music/<?php echo $musSrc[$m]; ?>">
  </audio>
  <div class="bg-image"></div>
  <div class="logo">
    <img src="bg/logo.png"></img>
  </div>
  <div class="container">
    <h2>Welcome to Resonance Servers!</h2>
    <h4>Please wait while everything downloads!</h4>
    <h4>While you wait, here's a random image from our collection of images!</h4>

    <img src="images/<?php echo $imgSrc[$i]; ?>" alt="" />

    <p>Now playing: <b><?php print(str_ireplace(".ogg","",$name));?></b></p>
  </div>
<script>
  var audio = document.getElementById("audiothing");
  audio.volume = 0.2;
</script>	
</body>
</html>
