                    <div class="row mb-2">
                        <div class="col-lg-6 mb-4">
                            <div class="card">
                                <div class="card-block">
                                  <div class=" modal-body" style="padding:40px 50px;">
                                    <h3 class="card-title text-primary text-left mb-5 mt-4">Login</h3>
                                      <form name="login_form" role="form" method="post" onsubmit="return log_validateForm()" action="/login">
                                        {{ csrf_field()}}
                                        @if (count($errors)>0)
                                            <?php foreach ($errors ->all() as $error): ?>
                                              <span class="btn table-danger">
                                                  <strong><b>{{ $error}}</b></strong>
                                              </span>
                                            <?php endforeach; ?>

                                        @endif
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
                                          <p>Forgot <a href="#">Password?</a></p> <p class="form-group">click here to <a href="/register">register</a></p>
                                      </form>
                                  </div>

                                </div>
                            </div>
                        </div>
                      </div>
