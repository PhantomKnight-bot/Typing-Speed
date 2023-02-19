<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="This Speed Typing Test will give you an acuurate speed test and help increase your typing speed"/>

    <title>Typing Test</title>

    <link rel="icon" href="icon.avif">

    <!--Bootstrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="styles.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Source+Code+Pro:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

  </head>
  <body>
    <div class="container-fluid box ">
      <div class="top">
          <h1 id="heading" class = "yellow">Typing Speed Test</h1>
          <div class="limits-box">
            <div class="limit">
              <a id="thirty" class="yellow"  href="#" >30s</a>
              <a id="sixty"  href="#" >60s</a>
            </div>
            <div class="limit">
              <a id="beg" class="yellow"  href="#" >beginner</a>
              <a id="pro"  href="#" >pro</a>
            </div>

          </div>
      </div>

      <div class="stats center">
        <div class="stat-block if">
          <div id="timeName" class = "stat-name yellow if">Time</div>
          <div id="time" class="details if ">30</div>
        </div>

        <div class="stat-block if">
          <div id="cwName" class = "stat-name yellow if">CW</div>
          <div id="cw" class="details if">0</div>
        </div>
      </div>


      <div class="text-display" id="textDisplay">

      </div>

      <div class="input-area center">
        <textarea rows="1" class="text-input" id="textInput" autofocus autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false"></textarea>
      </div>

      <div  class="restart-button center">
        <a id="restartBtn" class = "current" href="#">
          <i class="fas fa-redo"></i>
        </a>
      </div>

      <footer> <center>  Initial and Final ver 1.0 </center></footer>
    </div>

<?php
include("count.php");
?>
 
    



    <!-- Bootstrap script -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- My Javascript -->
    <script src="app.js"></script>
  </body>
</html>
