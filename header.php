<header>

  <!-- Header Navbar -->

  <nav class="red">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo" style="margin-left: 10px">Crackindustries</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">

        <?php if (isset($_SESSION['u_id'])) { ?>

          <li><form class="logout-form" action="includes/logout.inc.php" method="post"><a class="waves-effect waves-light" type="submit" name="submit">Logout</a></form></li>

        <?php } else { ?>

          <li><a class='waves-effect waves-light modal-trigger' href='#login-modal'>Login</a></li>
          <li><a class='waves-effect waves-light modal-trigger' href='#register-modal'>Register</a></li>

        <?php } ?>

      </ul>
    </div>
  </nav>

</header>

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
