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

    <div id="loader-wrapper">
      <div id="loader"></div>

      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>

    <div id="content">
      <!-- START HEADER -->
      <?php require 'header.php'; ?>
      <!-- END HEADER  -->
      <!-- ===================================== -->
      <!-- START MAIN CONTENT -->
      <div class="container">
        <h1 class="center">Streams</h1>
        <?php
          if (isset($_SESSION['u_id'])) {
            echo "You are logged in!";
          } else { ?>

          <div class="row">
            <div class="col s6" style="background-color: red; height: 200px;">

            </div>
            <div class="col s6" style="background-color: blue; height: 200px;">

            </div>
            <div class="col s12">
              <h4 class="center">Latest Uploaded</h4>
              <ul class="collapsible" data-collapsible="accordion">
                <li>
                   <div class="collapsible-header"><i class="material-icons">camera_roll</i>Random Movie Name | Horror/Action | <span class="red-text"> 20.04.2015 </span> </div>
                  <div class="collapsible-body"><span>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Lorem ipsum dolor sit amet, consectetur adipiscing elit.

  Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Proin eget tortor risus. Donec sollicitudin molestie malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</span></div>
                </li>
                <li>
                   <div class="collapsible-header"><i class="material-icons">camera_roll</i>Random Movie Name | Horror/Action | <span class="red-text"> 20.04.2015 </span> </div>
                  <div class="collapsible-body"><span>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Lorem ipsum dolor sit amet, consectetur adipiscing elit.

  Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Proin eget tortor risus. Donec sollicitudin molestie malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</span></div>
                </li>
                <li>
                   <div class="collapsible-header"><i class="material-icons">camera_roll</i>Random Movie Name | Horror/Action | <span class="red-text"> 20.04.2015 </span> </div>
                  <div class="collapsible-body"><span>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Lorem ipsum dolor sit amet, consectetur adipiscing elit.

  Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Proin eget tortor risus. Donec sollicitudin molestie malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</span></div>
                </li>
              </ul>
              <a href="#!" class="waves-effect waves-light btn red center" style="width: 100%; margin-top: -30px; border-radius: 0px 0px 5px 5px;">View all movies</a>
            </div>
          </div>

        <?php  }
        ?>
      </div>
      <!-- END MAIN CONTENT -->
      <!-- ==================================== -->
      <!-- START FOOTER  -->
      <?php require 'footer.php'; ?>
      <!-- END FOOTER  -->
    </div>


    <!-- JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bin/materialize.js" type="text/javascript"></script>

    <!-- Initialations -->
    <script type="text/javascript">

      // Collapsible
      $('.collapsible').collapsible();

      // Modal

      $('.modal').modal();

      // Dropdown

      $('.dropdown-trigger').dropdown({hover: true, alignment: "left", closeOnClick:false, coverTrigger:false});

      // Carousel

      $(document).ready(function() {
        $('.carousel.carousel-slider').carousel({fullWidth: true});
        window.setInterval(function(){$('.carousel').carousel('next')},3000)
      });
    </script>

  </body>
</html>
