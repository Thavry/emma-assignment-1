<nav class="navbar navbar-expand-lg bg-warning navbar-dark sticky-top">
  <a class="navbar-brand text-dark font-weight-bold" href="Template.php"><h2>Tuscany Italian Restaurant</h2></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    <!-- <div>Homepage</div> -->
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link text-dark" href="Beverage.php">Beverage</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="Pasta.php">Pasta</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="Pizza.php">Pizza</a>
      </li>
    </ul>
    <form class="form-inline">
      <? if (!isset($_SESSION['USERNAME'])): ?>
        <button type="button" class="btn btn-outline-primary">
          <a href="Login_Form.php">Login</a>
        </button>
        <button type="button" class="btn btn-outline-success">
          <a href="Register_Form.php">Register</a>
        </button>
      <? else: ?>
        <span style="margin-right: 12px;">
          <? echo "You are logged in as " .$_SESSION['USERNAME']; ?>
        </span>
        <button type="button" class="btn btn-outline-primary">
          <a href="Logout.php">Logout</a>
        </button>
      <? endif; ?>
    </form>
  </div>
</nav>
