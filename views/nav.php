<!--Navigation Start-->

<div class="container_fluid bg-primary">
    <nav class="container navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand text-white english" href="index.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link text-white english" href="index.php">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white english" href="filterpost.php?sid=1">Politic</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white english" href="filterpost.php?sid=2">Wars</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white english" href="filterpost.php?sid=3">Social</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white english" href="filterpost.php?sid=4">IT News</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white english" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <?php
            if(checkSession("username")) {
              echo getSession("username");
            }else {
              echo "Member";
            }
          ?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        
            <li>
              <?php
                if (checkSession("username")){
                  echo "<a class='dropdown-item' href='logout.php'>Logout</a>";
                } else {
                  echo "<a class='dropdown-item' href='register.php'>Register</a>";
                  echo "<a class='dropdown-item' href='login.php'>Login</a>";
                }
              ?>
      </li>
            
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
    </div>
<!--Navigation End-->