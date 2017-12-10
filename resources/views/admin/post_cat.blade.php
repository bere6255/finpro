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
                <form name="reg_form" role="form" method="post" action="/admin/catigory">
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

                      <button type="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-off"></span> Add catigory</button>

                </form>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
