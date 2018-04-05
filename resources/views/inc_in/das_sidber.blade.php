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


    </ul>
</nav>
