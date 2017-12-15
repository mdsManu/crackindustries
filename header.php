<header>

  <!-- Header Navbar -->

  <div class="navbar-fixed">
    <nav class="red">
      <div class="nav-wrapper">
        <a href="#" class="brand-logo" style="margin-left: 10px">Crackindustries</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">

          <?php if (isset($_SESSION['u_id'])) { ?>

<<<<<<< HEAD
            <li><a href="#!" class="dropdown-trigger" data-target="profile-dropdown"><i class="material-icons">person_pin</i></a></li>
            <li><a href="#!" class="dropdown-trigger" data-target="notifications-dropdown"><i class="material-icons">notifications_none</i></a></li>
=======
>>>>>>> bd6103ae1a71a45dcd025a3a9da03ad02df285ff
            <li><form class="logout-form" action="includes/logout.inc.php" method="post"><button class="waves-effect waves-light btn" type="submit" name="submit">Logout</button></form></li>

          <?php } else { ?>

            <li><a class='waves-effect waves-light modal-trigger' href='#login-modal'>Login</a></li>
            <li><a class='waves-effect waves-light modal-trigger' href='#register-modal'>Register</a></li>
<<<<<<< HEAD
=======
            <li><a class="waves-effect waves-light modal-trigger" href="#search"><i class="material-icons">search</i></a></li>
>>>>>>> bd6103ae1a71a45dcd025a3a9da03ad02df285ff

          <?php } ?>

        </ul>
      </div>
    </nav>
  </div>
<<<<<<< HEAD
  
  <!-- Image Slider (Carousel) -->

  <div class="carousel carousel-slider center " data-indicators="true">
      <div class="carousel-fixed-item center">
        <a class="btn waves-effect white grey-text darken-text-2">button</a>
      </div>
      <div class="carousel-item red white-text" href="#one!">
        <h2>First Panel</h2>
        <p class="white-text">This is your first panel</p>
      </div>
      <div class="carousel-item amber white-text" href="#two!">
        <img src="https://lorempixel.com/800/400/food/1">
      </div>
      <div class="carousel-item green white-text" href="#three!">
        <h2>Third Panel</h2>
        <p class="white-text">This is your third panel</p>
      </div>
      <div class="carousel-item blue white-text" href="#four!">
        <h2>Fourth Panel</h2>
        <p class="white-text">This is your fourth panel</p>
      </div>
    </div>
=======
>>>>>>> bd6103ae1a71a45dcd025a3a9da03ad02df285ff

</header>

<!-- ======================= -->
<!-- DROPDOWNS -->
<!-- ======================= -->
<ul id="profile-dropdown" class="dropdown-content">
  <li>
    <a href="#!">
      <i class="material-icons">face</i>
      Profile
    </a>
  </li>
  <li>
    <a href="#!" class="grey-text grey-darken-2">
      <i class="material-icons">settings</i>
      Settings
    </a>
  </li>
  <li>
    <a href="#!" class="grey-text grey-darken-2">
      <i class="material-icons">live_help</i>
      Help
    </a>
  </li>
  <li class="divider"></li>
  <li>
    <a href="#!" class="grey-text grey-darken-2">
      <i class="material-icons">lock_outline</i>
      Lock
    </a>
  </li>
  <li>
    <a href="#!" class="grey-text grey-darken-2">
      <i class="material-icons">keyboard_tab</i>
      Logout
    </a>
  </li>
</ul>




<!-- ===================== -->
<!-- MODALS --> 
<!-- ===================== -->

<!-- Login Modal -->
<div id="login-modal" class="modal">
  <div class="modal-content">
    <h3 class="center">Login</h3>
    <form class="login-form" action="includes/login.inc.php" method="post">
      <div class="row">

        <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          <input id="uid" name="uid" type="text" class="validate">
          <label for="uid">Username</label>
        </div>

        <div class="input-field col s12">
          <i class="material-icons prefix">lock</i>
          <input id="pwd" name="pwd" type="password" class="validate">
          <label for="pwd">Password</label>
        </div>

        <div class="col s12">
          <button class="waves-effect waves-light btn right" type="submit" name="submit">Login</button>
        </div>

      </div>
    </form>
  </div>
</div>


<!-- Regsiter Modal -->
<div id="register-modal" class="modal">
  <div class="modal-content">
    <h3 class="center">Register</h3>
    <form class="register-form" action="includes/register.inc.php" method="post">
      <div class="row">

        <div class="input-field col s12">
          <input id="first" name="first" type="text" class="validate">
          <label for="first">First Name</label>
        </div>

        <div class="input-field col s12">
          <input id="last" name="last" type="text" class="validate">
          <label for="last">Last Name</label>
        </div>

        <div class="input-field col s12">
          <i class="material-icons prefix">email</i>
          <input id="email" name="email" type="text" class="validate">
          <label for="email">E-Mail</label>
        </div>

        <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          <input id="uid" name="uid" type="text" class="validate">
          <label for="uid">Username</label>
        </div>

        <div class="input-field col s12">
          <i class="material-icons prefix">lock</i>
          <input id="pwd" name="pwd" type="password" class="validate">
          <label for="pwd">Password</label>
        </div>

        <div class="col s12">
          <button class="waves-effect waves-light btn right" type="submit" name="submit">Register</button>
        </div>

      </div>
    </form>
  </div>
</div>
