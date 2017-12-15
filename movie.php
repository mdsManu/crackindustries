<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Crackindustries</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" rel="stylesheet" type="text/css">
  </head>
  <body>

    <!-- START HEADER -->
    <?php require 'header.php'; ?>
    <!-- END HEADER  -->
    <!-- ===================================== -->
    <!-- START MAIN CONTENT -->
    <div class="container z-depth-5">
      <?php
        if (isset($_SESSION['u_id'])) {
          echo "You are logged im!";
        }
      ?>

      <div class="placeholder-video" style="background-color: green; height: 600px">

      </div>
      <h4 class="text-ident">POD - Es ist hier...</h4>
      <hr>
      <div class="row">
        <div class="col s8">
          <p>
            <span class="text-ident video-meta-head fsk">FSK: 18</span> <span class="text-ident video-meta-head rating">Bewertung: 4,2</span> <span class="text-ident video-meta-head regiseur">Regisseur: Mickey Keating</span> <br><br>Stars: Lauren Ashley Carter, Dean Cates, Brian Morvant, Larry Fessenden <br><br>Nachdem die zerstrittenen Geschwister Ed und Lyla eine beunruhigende Nachricht erhalten haben, fahren sie zum abgeschiedenen Haus ihrer Familie in Maine, um eine Intervention für ihren immer paranoider werdenden Bruder Martin, einen Kriegsveteran, abzuhalten. Die Situation gerät jedoch schnell außer Kontrolle, als die beiden entdecken, dass das Haus komplett durchwühlt ist und Martin an eine schreckenerregende Verschwörungstheorie glaubt, die sich um eine finstere Macht dreht, von der er denkt, dass sie im Keller gefangen ist.
          </p>
        </div>
        <div class="col s4">
          <div class="big-btn right">
            Remove Advertisment
          </div>
          <div class="black right" style="height: 300px; margin-top: 10px; width: 80%;">

          </div>
          <p class="right grey-text">ADVERTISMENT</p>
        </div>
      </div>
      <hr>
      <div class="similar-movie-slider">
        <h4 class="text-ident">Similar Movies</h4>
        <i class="material-icons left-prev-slider-arrow grey-text">chevron_left</i>
        <i class="material-icons right-prev-slider-arrow grey-text">chevron_right</i>
        <div class="row">
          <div class="col s6 blue" style="height: 400px">

          </div>

          <div class="col s3 green" style="height: 200px">

          </div>

          <div class="col s3 red" style="height: 200px">

          </div>
          <div class="col s3 red" style="height: 200px">

          </div>
          <div class="col s3 green" style="height: 200px">

          </div>
        </div>
      </div>


    </div>
    <!-- END MAIN CONTENT -->
    <!-- ==================================== -->
    <!-- START FOOTER  -->
    <?php require 'footer.php'; ?>
    <!-- END FOOTER  -->


    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="js/bin/materialize.js" type="text/javascript"></script>

    <!-- Initialations -->
    <script type="text/javascript">
      $('.modal').modal();
      $('.dropdown-trigger').dropdown({closeOnClick:false, coverTrigger:false});
    </script>

  </body>
</html>
