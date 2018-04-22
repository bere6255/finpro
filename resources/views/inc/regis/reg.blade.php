<div class="container-scroller">
    <div class="container-fluid">
      <div class="row">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center">
          <div class="card col-lg-4 offset-lg-4"
        <div class="card-block">
          <div class="modal-body" style="padding:40px 50px;">
            <h3 class="card-title text-primary text-left mb-5 mt-4">Register</h3>
              <form name="reg_form" role="form" method="post" action="/register">
                {{ csrf_field()}}

                <div class="form-group {{ $errors->has('reg_usrname') ? ' has-error' : '' }} ">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" id="reg_usrname" name="reg_usrname" class="form-control p_input" placeholder="Enter you full name" required="true">
                  </div>
                  <div class="input-group">
                    @if ($errors->has('reg_usrname'))
                        <span class="btn table-danger">
                            <strong>{{ $errors->first('reg_usrname') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }} ">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope-open"></i></span>
                    <input type="email" id="email" name="email" class="form-control p_input" placeholder="Enter your email address" required="true">

                  </div>
                  <div class="input-group">
                    @if ($errors->has('email'))
                        <span class="btn table-danger">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }} ">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="password" id="passwordreg" name="passwordreg" class="form-control p_input" placeholder="Enter password" required="true">
                  </div>
                  <div class="input-group">
                    @if ($errors->has('passwordreg'))
                        <span class="btn table-danger">
                            <strong>{{ $errors->first('passwordreg') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="password" id="passwordreg_confirm" name="passwordreg_confirmation" class="form-control p_input" placeholder="Repeat Password" required="true">
                  </div>
                </div>
                  <div class="checkbox">
                      <label><input type="checkbox" value="checked" required="true"/>by clicking this check box you agree with the company teams and condition </label>
                  </div>
                    <button type="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-off"></span> Create Account</button>

              </form>
          </div>
        </div>
    </div>
  </div>
</div>
