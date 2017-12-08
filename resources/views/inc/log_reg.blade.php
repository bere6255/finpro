<div class="modal  fade" id="mylogModal" role="dialog">
<div class="modal-dialog">

    <!-- Modal content-->
    <div class=" modal-content">

        <div class=" modal-body" style="padding:40px 50px;">
          <h3 class="card-title text-primary text-left mb-5 mt-4">Login</h3>
            <form name="login_form" role="form" method="post" onsubmit="return log_validateForm()" action="/login">
              {{ csrf_field()}}
              <div class="form-group">
                <div class="input-group">


                </div>
              </div>

              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-envelope-open"></i></span>
                  <input type="email" id="email" name="email" class="form-control p_input" required="true" placeholder="Enter email">
                </div>
              </div>

              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                  <input type="password" id="password" name="password" class="form-control p_input" placeholder="Enter password" required="true">
                </div>
              </div>


                <div class="checkbox">
                    <label><input type="checkbox" value="checked" />Remember me</label>
                </div>

                <button type="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
            </form>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

            <p>Forgot <a href="#">Password?</a></p>

        </div>

        <div class=" panel-group">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">

                        <a class="btn btn-success btn-block" href="/register" > Not a member    Sign Up</a>
                    </h4>
                </div>
              </div>
            </div>


    </div>
</div>

</div>
