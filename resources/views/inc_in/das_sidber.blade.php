<nav class="bg-white sidebar sidebar-fixed sidebar-offcanvas" id="sidebar">
<div class="user-info">
    @if(Auth::user())
      <img src="images/face.jpg" alt="">
      <p class="name">{{Auth::user()->fullname}}</p>
      <p class="designation">Manager</p>
      <span class="online"></span>

    @endif
</div>
    <ul class="nav">


      <form name="cat_form" role="form" method="get" action="/main" enctype="form-data">
        {{ csrf_field()}}
      <div class="form-group {{ $errors->has('procat') ? ' has-error' : '' }} ">
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-search"></i></span>
          <select id="procat" onchange="ajax_call();" name="procat" class="form-control" >
            <option value="">please select catigory</option>
            @if(count($cart)>0)
                @foreach($cart->all() as $procat)
                  <option value="{{$procat->id}}">{{$procat->	Cart}}</option>
                @endforeach
            @endif
          </select>
        </div>
        <div class="input-group">
          @if ($errors->has('procat'))
              <span class="btn table-danger">
                  <strong>{{ $errors->first('procat') }}</strong>
              </span>
          @endif
        </div>
      </div>



      <div class="form-group {{ $errors->has('prosubcat') ? ' has-error' : '' }} ">
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-search"></i></span>
          <div id="retriv" class="input-group">
          <select id="prosubcat"  name="prosubcat" class="form-control">

              <option value="">please select sub catigory</option>
          </select>
          </div>
        </div>
        <div class="input-group">
          @if ($errors->has('prosubcat'))
              <span class="btn table-danger">
                  <strong>{{ $errors->first('prosubcat') }}</strong>
              </span>
          @endif
        </div>
      </div>

<button type="submit"  class="btn btn-primary btn-block"><span class="glyphicon glyphicon-off"></span> search service</button>

</form>





        <li class="nav-item active">
            <a class="nav-link" href="#">
                <!-- <i class="fa fa-dashboard"></i> -->
                <img src="images/icons/1.png" alt="">
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/widgets.html">
                <img src="images/icons/2.png" alt="">
                <span class="menu-title">Widgets</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/forms.html">
                <!-- <i class="fa fa-wpforms"></i> -->
                <img src="images/icons/3.png" alt="">
                <span class="menu-title">Forms</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/buttons.html">
                <!-- <i class="fa fa-calculator"></i> -->
                <img src="images/icons/4.png" alt="">
                <span class="menu-title">Buttons</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/tables.html">
                <!-- <i class="fa fa-table"></i> -->
                <img src="images/icons/5.png" alt="">
                <span class="menu-title">Tables</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/charts.html">
                <!-- <i class="fa fa-bar-chart"></i> -->
                <img src="images/icons/6.png" alt="">
                <span class="menu-title">Charts</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/icons.html">
                <!-- <i class="fa fa-font"></i> -->
                <img src="images/icons/7.png" alt="">
                <span class="menu-title">Icons</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/typography.html">
                <!-- <i class="fa fa-bold"></i> -->
                <img src="images/icons/8.png" alt="">
                <span class="menu-title">Typography</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                <!-- <i class="fa fa-address-book"></i> -->
                <img src="images/icons/9.png" alt="">
                <span class="menu-title">Sample Pages<i class="fa fa-sort-down"></i></span>
            </a>
            <div class="collapse" id="collapseExample">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="samples/blank_page.html">
                      Blank Page
                    </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="samples/register.html">
                      Register
                    </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="samples/login.html">
                      Login
                    </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="samples/not-found.html">
                      404
                    </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="samples/error.html">
                      500
                    </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <!-- <i class="fa fa-bold"></i> -->
                <img src="images/icons/10.png" alt="">
                <span class="menu-title">Settings</span>
            </a>
            @if(Auth::user())
              <a class="nav-link" href="logout"><span class="menu-title">logout</span></a>
            @endif
        </li>
    </ul>
</nav>
