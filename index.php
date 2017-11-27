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
    <div class="container">
      <h1 class="center">Home</h1>
      <?php
        if (isset($_SESSION['u_id'])) {
          echo "You are logged im!";
        }
      ?>
    </div>
    <!-- END MAIN CONTENT -->
    <!-- ==================================== -->
    <!-- START FOOTER  -->

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
