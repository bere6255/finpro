<nav class="bg-white sidebar sidebar-fixed sidebar-offcanvas" id="sidebar">
<div class="user-info">
    @if(Auth::user())
      <a href="/profile" class="text-center"><img src="{{Storage::url(Auth::user()->img_url)}}" alt=""></a>
      <p class="name">{{Auth::user()->fullname}}</p>
      <p class="designation">Level: {{Auth::user()->level}}</p>
      <a href="/update" class="btn btn-outline-warning">Edite Profile</a>

    @endif
</div>


    <ul class="nav">

      <a class=" btn btn-outline-info fa fa-envelope-open-o" href="#">
        <!-- <i class="fa fa-dashboard"></i> -->
          <span class="menu-title">Inbox</span>
      </a>
      <a class=" btn btn-outline-info fa fa-money" href="#">
        <!-- <i class="fa fa-dashboard"></i> -->
          <span class="menu-title">Add Fund</span>
      </a>


    </ul>
</nav>
