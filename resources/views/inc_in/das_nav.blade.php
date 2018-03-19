<nav class="navbar bg-primary-gradient col-lg-12 col-12 p-0 fixed-top navbar-inverse d-flex flex-row">
    <div class="bg-white text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="/">Fist Servicess</a>
        <a class="navbar-brand brand-logo-mini" href="/">Fist</a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler hidden-md-down align-self-center mr-3" type="button" data-toggle="minimize">
          <span class="navbar-toggler-icon"></span>
        </button>
        <form class="form-inline mt-2 mt-md-0 hidden-md-down">
            <input class="form-control mr-sm-2 search" type="text" placeholder="Search">
        </form>
        <ul class="navbar-nav ml-lg-auto d-flex align-items-center flex-row">
          @if(!Auth::user())
            <button type="button" class="btn btn-primary" id="mylogin">Sign in / Register </button>
          @endif
          @if(Auth::user())
            <li class="nav-item">
            <a class="nav-link profile-pic" href="/profile"><img class="rounded-circle" src="images/face.jpg" alt=""></a>
            </li>
            <li class="nav-item">
            <a href="/logout" class="btn btn-danger" id="logout">Logout</a>
            </li>
            <?php if (Auth::user()->status !="seller"): ?>
              <li class="nav-item">
              <a href="/becomeasaller" class="btn btn-secondary" id="logout">become a seller</a>
              </li>
            <?php else: ?>
              <li class="nav-item">
              <a href="/dashboard" class="btn btn-secondary" id="logout">Dashboard</a>
              </li>
            <?php endif; ?>

          @endif
        </ul>
        <button class="navbar-toggler navbar-toggler-right hidden-lg-up align-self-center" type="button" data-toggle="offcanvas">
          <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>
