
  <nav class="navbar bg-primary-gradient col-lg-12 col-12 p-0 fixed-top navbar-inverse d-flex flex-row">
      <div class="bg-white text-center navbar-brand-wrapper">
          <a class="navbar-brand brand-logo" href="/">Web-Services</a>
          <a class="navbar-brand brand-logo-mini" href="/">WS</a>

      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">

          <form class="form-inline mt-2 mt-md-0 hidden-md-down">
              <input class="form-control mr-sm-2 search" type="text" placeholder="find services">
          </form>
          <ul class="navbar-nav ml-lg-auto d-flex align-items-center flex-row">
              <li class="nav-item">
                @if(!Auth::user())
                  <button type="button" class="btn btn-primary" id="mylogin">Sign in / Register </button>
                @endif
                @if(Auth::user())
                  <li class="nav-item">
                  <a class="nav-link profile-pic" href="/profile"><img class="rounded-circle" src="{{Storage::url(Auth::user()->img_url)}}" alt=""></a>
                  </li>
                  <li class="nav-item">
                  <a href="/logout" class="btn btn-danger" id="logout">Logout</a>
                  </li>
                @endif


          </ul>

      </div>
  </nav>
