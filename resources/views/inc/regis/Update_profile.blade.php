<div class="content-wrapper">
<div class="row mb-2" >
<div class="col-lg-6 mb-4">
    <div class="card">
        <div class="card-block">
          <div class="modal-body" style="padding:40px 50px;">
            <h3 class="card-title text-primary text-left mb-5 mt-4">update Users Details</h3>
              <form name="reg_form" role="form" method="post" action="update_pro">
                {{ csrf_field()}}

                <div class="form-group {{ $errors->has('up_phome') ? ' has-error' : '' }} ">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" id="up_phome" name="up_phome" class="form-control p_input" placeholder="Enter your phome number" required="true">
                  </div>
                  <div class="input-group">
                    @if ($errors->has('up_phome'))
                        <span class="btn table-danger">
                            <strong>{{ $errors->first('up_phome') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
                <div class="form-group {{ $errors->has('up_add') ? ' has-error' : '' }} ">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope-open"></i></span>
                    <input type="text" id="up_add" name="up_add" class="form-control p_input" placeholder="Enter your address" required="true">

                  </div>
                  <div class="input-group">
                    @if ($errors->has('up_add'))
                        <span class="btn table-danger">
                            <strong>{{ $errors->first('up_add') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
                <div class="form-group {{ $errors->has('up_about') ? ' has-error' : '' }} ">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="text" id="up_about" name="up_about" class="form-control p_input" placeholder="Tell about your self" required="true">
                  </div>
                  <div class="input-group">
                    @if ($errors->has('up_about'))
                        <span class="btn table-danger">
                            <strong>{{ $errors->first('up_about') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="file" id="img" name="img" class="form-control p_input" placeholder="chose your profile picture" required="true">
                  </div>
                </div>
                  <div class="checkbox">
                      <label><input type="checkbox" value="checked" required="true"/>by clicking this check box you agree with the company teams and condition </label>
                  </div>
                    <button type="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-off"></span> Update  Profile</button>

              </form>
          </div>
        </div>
    </div>
  </div>
</div>
</div>
