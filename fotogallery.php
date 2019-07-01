<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="templating.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    </head>
    <body>
      <?php include 'header.php';?>
        
    	<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="img/handyImg.jpg" alt="handy" style="width:100%;">
        <div class="carousel-caption">
          <h3>handy</h3>
          <p class="slideText">handy is always so much fun!</p>
        </div>
      </div>

      <div class="item">
        <img src="img/advGame.jpg" alt="adv" style="width:100%;">
        <div class="carousel-caption">
          <h3>advanture game</h3>
          <p class="slideText"> what an advanture!</p>
        </div>
      </div>
    
      <div class="item">
        <img src="img/lingo.jpg" alt="lingo" style="width:100%;">
        <div class="carousel-caption">
          <h3>lingo</h3>
          <p class="slideText">We love some lingo!</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<?php include 'clock.php';?>
    <?php include 'footer.php';?>