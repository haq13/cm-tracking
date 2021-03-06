<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Buffer Tracking</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="transit.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Asset Transit
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="transit.php?action=add">New Transit</a>
        <a class="dropdown-item" href="transit.php">Transit Log</a>
      </div>
      </li>
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Assets
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="assets.php">View Asset</a>
        <a class="dropdown-item" href="assets.php?action=add">Add Asset</a>
      </div>
      </li>
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Locations
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="locations.php">View Locations</a>
        <a class="dropdown-item" href="locations.php?action=add">Add Locations</a>
      </div>
      </li>
    </ul>
    <div>
      <form class="form-inline" action="search.php" method="post">
        <div class="form-group">
          <label for="serialSearchInput"></label>
          <input type="text" name="serialSearchInput" id="" class="form-control" placeholder="Search Serial" aria-describedby="helpId">
        </div>
      </form>
    </div>
  </div>
</nav>