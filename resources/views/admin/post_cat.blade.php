<div class="content-wrapper">

  <div class="row mb-2">
  <div class="col-lg-6 mb-4">
      <div class="card">
          <div class="card-block">
            <div class="modal-body">
              <h3 class="card-title text-primary text-left mb-5 mt-4">add catigory</h3>
              @if (session('info'))
                  <span class="btn btn-success">
                      <strong>{{ session('info') }}</strong>
                  </span>
              @endif
                <form name="cat_form" role="form" method="post" action="/admin/catigory" enctype="multipart/form-data">
                  {{ csrf_field()}}

                  <div class="form-group {{ $errors->has('main_cat') ? ' has-error' : '' }} ">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <input type="text" id="main_cat" name="main_cat" class="form-control p_input" placeholder="Enter new catigory" required="true">
                    </div>
                    <div class="input-group">
                      @if ($errors->has('main_cat'))
                          <span class="btn table-danger">
                              <strong>{{ $errors->first('main_cat') }}</strong>
                          </span>
                      @endif
                    </div>
                  </div>

                  <div class="form-group {{ $errors->has('img') ? ' has-error' : '' }} ">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-file-photo-o (alias)"></i></span>
                      <input type="file" id="img" name="img" class="form-control p_input" required="true"/>
                    </div>
                    <div class="input-group">
                      @if ($errors->has('img'))
                          <span class="btn table-danger">
                              <strong>{{ $errors->first('img') }}</strong>
                          </span>
                      @endif
                    </div>
                  </div>

                      <button type="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-off"></span> Add catigory</button>

                </form>
            </div>
          </div>
      </div>
    </div>
  </div>







  <div class="row mb-2">
  <div class="col-lg-6 mb-4">
      <div class="card">
          <div class="card-block">
            <div class="modal-body">
              <h3 class="card-title text-primary text-left mb-5 mt-4">add sub catigory</h3>
              @if (session('subcat_info'))
                  <span class="btn btn-success">
                      <strong>{{ session('subcat_info') }}</strong>
                  </span>
              @endif
                <form name="sub_cat_form" role="form" method="post" action="/admin/subcatigory" enctype="multipart/form-data">
                  {{ csrf_field()}}


                  <div class="form-group {{ $errors->has('cat') ? ' has-error' : '' }} ">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <select id="cat" name="cat" class="form-control">
                        @if(count($cart)>0)
                            @foreach($cart->all() as $cat)
                              <option value="{{$cat->id}}">{{$cat->	Cart}}</option>
                            @endforeach
                        @endif
                      </select>
                    </div>
                    <div class="input-group">
                      @if ($errors->has('cat'))
                          <span class="btn table-danger">
                              <strong>{{ $errors->first('cat') }}</strong>
                          </span>
                      @endif
                    </div>
                  </div>


                  <div class="form-group {{ $errors->has('cat') ? ' has-error' : '' }} ">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <input type="text" id="sub_cat" name="sub_cat" class="form-control p_input" placeholder="Enter new catigory" required="true">
                    </div>
                    <div class="input-group">
                      @if ($errors->has('sub_cat'))
                          <span class="btn table-danger">
                              <strong>{{ $errors->first('sub_cat') }}</strong>
                          </span>
                      @endif
                    </div>
                  </div>

                  <div class="form-group {{ $errors->has('sub_img') ? ' has-error' : '' }} ">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-file-photo-o (alias)"></i></span>
                      <input type="file" id="sub_img" name="sub_img" class="form-control p_input" required="true"/>
                    </div>
                    <div class="input-group">
                      @if ($errors->has('sub_img'))
                          <span class="btn table-danger">
                              <strong>{{ $errors->first('sub_img') }}</strong>
                          </span>
                      @endif
                    </div>
                  </div>

                      <button type="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-off"></span> Add sub catigory</button>

                </form>
            </div>
          </div>
      </div>
    </div>
  </div>









  <div class="row mb-2">
  <div class="col-lg-6 mb-4">
      <div class="card">
          <div class="card-block">
            <div class="modal-body">
              <h3 class="card-title text-primary text-left mb-5 mt-4">add product</h3>
              @if (session('product_info'))
                  <span class="btn btn-success">
                      <strong>{{ session('product_info') }}</strong>
                  </span>
              @endif
                <form name="product_form" role="form" method="post" action="/admin/product" enctype="multipart/form-data">
                  {{ csrf_field()}}


                  <div class="form-group {{ $errors->has('product_name') ? ' has-error' : '' }} ">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <input type="text" id="product_name" name="product_name" class="form-control p_input" placeholder="Enter product name" required="true">
                    </div>
                    <div class="input-group">
                      @if ($errors->has('product_name'))
                          <span class="btn table-danger">
                              <strong>{{ $errors->first('product_name') }}</strong>
                          </span>
                      @endif
                    </div>
                  </div>



                  <div class="form-group {{ $errors->has('procat') ? ' has-error' : '' }} ">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <select id="procat" onchange="ajax_call();" name="procat" class="form-control" >
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
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <select id="prosubcat" name="prosubcat" class="form-control">
                        @if(count($subcat)>0)
                            @foreach($subcat->all() as $prosubcat)
                              <option value="{{$prosubcat->id}}">{{$prosubcat->	sub_cat}}</option>
                            @endforeach
                        @endif
                      </select>
                    </div>
                    <div class="input-group">
                      @if ($errors->has('prosubcat'))
                          <span class="btn table-danger">
                              <strong>{{ $errors->first('prosubcat') }}</strong>
                          </span>
                      @endif
                    </div>
                  </div>


<!-- chech point
                  <div class="form-group {{ $errors->has('prosubcat') ? ' has-error' : '' }} ">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <select id="prosubcat" name="prosubcat" class="form-control">
                        @if(count($subcat)>0)
                            @foreach($subcat->all() as $prosubcat)
                              <option value="{{$prosubcat->id}}">{{$prosubcat->	sub_cat}}</option>
                            @endforeach
                        @endif
                      </select>
                    </div>
                    <div class="input-group">
                      @if ($errors->has('prosubcat'))
                          <span class="btn table-danger">
                              <strong>{{ $errors->first('prosubcat') }}</strong>
                          </span>
                      @endif
                    </div>
                  </div>

-->



                  <div class="form-group {{ $errors->has('discrib') ? ' has-error' : '' }} ">
                  <div class="form-group ">
                    <div id="retriv">testing to see if this will be replaced</div>
                      <label for="discrib"><b>Discribtion</b></label>
                      <textarea class="form-control p-input" id="discrib" name="discrib" rows="3" placeholder="Discrib your service" required="true"></textarea>
                  </div>
                  <div class="input-group">
                    @if ($errors->has('discrib'))
                        <span class="btn table-danger">
                            <strong>{{ $errors->first('discrib') }}</strong>
                        </span>
                    @endif
                  </div>
                  </div>

                  <div class="form-group {{ $errors->has('amount') ? ' has-error' : '' }} ">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <input type="text" id="amount" name="amount" class="form-control p_input" placeholder="Enter amount for the service" required="true">
                    </div>
                    <div class="input-group">
                      @if ($errors->has('amount'))
                          <span class="btn table-danger">
                              <strong>{{ $errors->first('amount') }}</strong>
                          </span>
                      @endif
                    </div>
                  </div>



                  <div class="form-group {{ $errors->has('pro_img') ? ' has-error' : '' }} ">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-file-photo-o (alias)"></i></span>
                      <input type="file" id="pro_img" name="pro_img" class="form-control p_input" required="true"/>
                    </div>
                    <div class="input-group">
                      @if ($errors->has('pro_img'))
                          <span class="btn table-danger">
                              <strong>{{ $errors->first('pro_img') }}</strong>
                          </span>
                      @endif
                    </div>
                  </div>


                      <button id="btn" onclick="ajax_call();">check me out</button>

                      <button type="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-off"></span> post your product</button>

                </form>
            </div>
          </div>
      </div>
    </div>
  </div>










</div>
