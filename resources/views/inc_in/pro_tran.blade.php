                  <div class="content-wrapper">
                    <h3 class="text-primary mb-4">Dashboard</h3>
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
                          @if(count($account)>0)
                            @foreach($account->all() as $acc_bal)
                            <div class="card">
                                <div class="card-block">
                                    <h4 class="card-title font-weight-normal text-success">₦ {{$acc_bal -> balance}}</h4>
                                    <p class="card-text">Available Balance</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
                            <div class="card">
                                <div class="card-block">
                                    <h4 class="card-title font-weight-normal text-info">₦ {{$acc_bal -> pot_balance}}</h4>
                                    <p class="card-text ">Potential Balance</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
                            <div class="card">
                                <div class="card-block">
                                    <h4 class="card-title font-weight-normal text-warning">₦ {{$acc_bal -> last_tran}}</h4>
                                    <p class="card-text">Last Transaction</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
                            <div class="card">
                                <div class="card-block">
                                    <h4 class="card-title font-weight-normal text-info">{{$acc_bal -> for_tran}}</h4>
                                    <p class="card-text">For</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif

                    <div class="row ">
                        <div class="col-lg-6 mb-4">
                            <div class="card">
                                <div class="card-block">
                                    <h5 class="card-title mb-4">Order History</h5>
                                    <table class="table">
                                        <thead class="text-primary">
                                            <tr>
                                                <th>Order ID</th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                          @if(count($trans_hys)>0)
                                            @foreach($trans_hys->all() as $trans_hys)
                                            <tr>
                                                <td>{{$trans_hys -> order_id}}</td>
                                                <td>{{$trans_hys -> amount}}</td>

                                                <?php if ($trans_hys -> order_id=="Success"): ?>
                                                    <td><span class="badge badge-success">Success</span></td>
                                                <?php else: ?>
                                                  <td><span class="badge badge-primary">Processing</span></td>
                                                <?php endif; ?>
                                                <?php if ($trans_hys -> order_id=="Failed"): ?>
                                                  <td><span class="badge badge-danger">Failed</span></td>
                                                <?php endif; ?>

                                            </tr>
                                            @endforeach
                                            @endif
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-6 mb-4">
                            <div class="card">
                                <div class="card-block">
                                    <h5 class="card-title mb-4">Transaction History</h5>
                                    <table class="table">
                                        <thead class="text-primary">
                                            <tr>
                                                <th>Order ID</th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                            <tr>
                                                <td>{{$trans_hys -> order_id}}</td>
                                                <td>{{$trans_hys -> amount}}</td>

                                                <?php if ($trans_hys -> order_id=="Success"): ?>
                                                    <td><span class="badge badge-success">Success</span></td>
                                                <?php else: ?>
                                                  <td><span class="badge badge-primary">Processing</span></td>
                                                <?php endif; ?>
                                                <?php if ($trans_hys -> order_id=="Failed"): ?>
                                                  <td><span class="badge badge-danger">Failed</span></td>
                                                <?php endif; ?>

                                            </tr>

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>



                    </div>








                    <?php if (Auth::user()->status=="seller"): ?>

                      <div class="row">

                        <div class="col-lg-8  mb-4">
                          <div class="card">
                          <div class="card-block">
                              <h5 class="card-title mb-4">My Gigs</h5>
                              <table class="table">
                                  <thead class="text-primary">
                                      <tr>
                                          <th>Name</th>
                                          <th>Discription</th>
                                          <th>Amount ₦</th>
                                          <th><span class="badge badge-warning">Edite Post</span></th>
                                          <th><span class="badge badge-danger">Delite Post</span></th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @if(count($mygits)>0)
                                      @foreach($mygits->all() as $git)
                                      <tr>
                                          <th>{{$git -> pro_name}}</th>
                                          <td>{{$git -> description}}</td>
                                          <td>₦ {{$git -> amount}}</td>
                                          <td><a href="/user/edite_post?edit={{$git->	id}}" class="btn btn-warning btn-sm">Edite Post</a></td>
                                          <td><a href="/user/delite_post?jes={{$git->	id}}" class="btn btn-danger btn-sm">Delite Post</a></td>

                                      </tr>
                                      @endforeach
                                      @endif
                                  </tbody>
                              </table>
                          </div>
                        </div>
                      </div>


                          <div class="col-lg-4  mb-4">
                              <div class="card">
                                <div class="card-block"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                      <h4 class="card-title  text-left mb-5 mt-4">Post A Git</h4>
                                      @if (session('product_info'))
                                          <span class="btn btn-success">
                                              <strong>{{ session('product_info') }}</strong>
                                          </span>
                                      @endif
                                        <form name="product_form" role="form" method="post" action="/admin/product" enctype="multipart/form-data">
                                          {{ csrf_field()}}


                                          <div class="form-group {{ $errors->has('product_name') ? ' has-error' : '' }} ">
                                            <div class="input-group">
                                              <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
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



                                          <div class="form-group {{ $errors->has('procat_post') ? ' has-error' : '' }} ">
                                            <div class="input-group">
                                              <span class="input-group-addon"><i class="fa fa-navicon"></i></span>
                                              <select id="procat_post" onchange="ajax_post();" name="procat_post" class="form-control" >
                                                <option value="">please select catigory</option>
                                                @if(count($cart)>0)
                                                    @foreach($cart->all() as $procat_post)
                                                      <option value="{{$procat_post->id}}">{{$procat_post->	Cart}}</option>
                                                    @endforeach
                                                @endif
                                              </select>
                                            </div>
                                            <div class="input-group">
                                              @if ($errors->has('procat_post'))
                                                  <span class="btn table-danger">
                                                      <strong>{{ $errors->first('procat_post') }}</strong>
                                                  </span>
                                              @endif
                                            </div>
                                          </div>



                                          <div class="form-group {{ $errors->has('prosubcat') ? ' has-error' : '' }} ">
                                            <div class="input-group">
                                              <span class="input-group-addon"><i class="fa fa-minus"></i></span>
                                              <div id="retriv_post" class="input-group">
                                              <select id="prosubcat_post" name="prosubcat_post" class="form-control">

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

                                          <div class="form-group {{ $errors->has('discrib') ? ' has-error' : '' }} ">

                                              <label for="discrib"><b>Discribe your product</b></label>

                                              <textarea id="discrib" name="discrib" class="form-control p-input" placeholder="tell about your product" rows="3" required="true"></textarea>

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
                                              <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                              <input type="text" id="amount" name="amount" class="form-control p_input" placeholder="Enter Amount" required="true">
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

                                          <h4 class="card-title  text-left mb-5 mt-4">Add Requirement (optional)</h4>



                                          <li class="nav-item">
                                          <a class="nav-link" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                              <!-- <i class="fa fa-address-book"></i> -->
                                              <span class="menu-title">click to Add<i class="fa fa-sort-down"></i></span>
                                          </a>
                                          <div class="collapse" id="collapseExample">
                                              <ul class="nav flex-column sub-menu">
                                                  <li class="nav-item">
                                                    <h5 class="card-title  text-left mb-5 mt-4">Add one</h5>
                                                    <div class="form-group ">
                                                      <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                                        <input type="text" id="add_1_name" name="add_1_name" class="form-control p_input" placeholder="Enter Requirement name one">
                                                      </div>
                                                    </div>
                                                    <div class="form-group ">
                                                      <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                                        <input type="text" id="add_1_amount" name="add_1_amount" class="form-control p_input" placeholder="Enter Amount">
                                                      </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label for="discrib"><b>Discribe Requirement</b></label>
                                                        <textarea id="add_1_discrib" name="add_1_discrib" class="form-control p-input" placeholder="tell about your Requirement" rows="3"></textarea>
                                                    </div>
                                                  </a>
                                                  </li>
                                              </ul>
                                          </div>
                                      </li>



                                          <li class="nav-item">
                                          <a class="nav-link" data-toggle="collapse" href="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
                                              <!-- <i class="fa fa-address-book"></i> -->
                                              <span class="menu-title">click to Add<i class="fa fa-sort-down"></i></span>
                                          </a>
                                          <div class="collapse" id="collapseExample2">
                                              <ul class="nav flex-column sub-menu">
                                                  <li class="nav-item">
                                                    <h5 class="card-title  text-left mb-5 mt-4">Add two</h5>
                                                    <div class="form-group ">
                                                      <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                                        <input type="text" id="add_2_name" name="add_2_name" class="form-control p_input" placeholder="Enter Requirement name two">
                                                      </div>
                                                    </div>
                                                    <div class="form-group ">
                                                      <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                                        <input type="text" id="add_2_amount" name="add_2_amount" class="form-control p_input" placeholder="Enter Amount">
                                                      </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label for="discrib"><b>Discribe Requirement</b></label>
                                                        <textarea id="add_2_discrib" name="add_2_discrib" class="form-control p-input" placeholder="tell about your Requirement" rows="3"></textarea>
                                                    </div>
                                                  </a>
                                                  </li>
                                              </ul>
                                          </div>
                                      </li>




                                          <li class="nav-item">
                                          <a class="nav-link" data-toggle="collapse" href="#collapseExample3" aria-expanded="false" aria-controls="collapseExample">
                                              <!-- <i class="fa fa-address-book"></i> -->
                                              <span class="menu-title">click to Add<i class="fa fa-sort-down"></i></span>
                                          </a>
                                          <div class="collapse" id="collapseExample3">
                                              <ul class="nav flex-column sub-menu">
                                                  <li class="nav-item">
                                                    <h5 class="card-title  text-left mb-5 mt-4">Add three</h5>
                                                    <div class="form-group ">
                                                      <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                                        <input type="text" id="add_3_name" name="add_3_name" class="form-control p_input" placeholder="Enter Requirement name three">
                                                      </div>
                                                    </div>
                                                    <div class="form-group ">
                                                      <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                                        <input type="text" id="add_3_amount" name="add_3_amount" class="form-control p_input" placeholder="Enter Amount">
                                                      </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label for="discrib"><b>Discribe Requirement</b></label>
                                                        <textarea id="add_3_discrib" name="add_3_discrib" class="form-control p-input" placeholder="tell about your Requirement" rows="3"></textarea>
                                                    </div>
                                                  </a>
                                                  </li>
                                              </ul>
                                          </div>
                                      </li>





                                          <li class="nav-item">
                                          <a class="nav-link" data-toggle="collapse" href="#collapseExample4" aria-expanded="false" aria-controls="collapseExample">
                                              <!-- <i class="fa fa-address-book"></i> -->
                                              <span class="menu-title">click to Add<i class="fa fa-sort-down"></i></span>
                                          </a>
                                          <div class="collapse" id="collapseExample4">
                                              <ul class="nav flex-column sub-menu">
                                                  <li class="nav-item">
                                                    <h5 class="card-title  text-left mb-5 mt-4">Add four</h5>
                                                    <div class="form-group ">
                                                      <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                                        <input type="text" id="add_4_name" name="add_4_name" class="form-control p_input" placeholder="Enter Requirement name four">
                                                      </div>
                                                    </div>
                                                    <div class="form-group ">
                                                      <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                                        <input type="text" id="add_4_amount" name="add_4_amount" class="form-control p_input" placeholder="Enter Amount">
                                                      </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label for="discrib"><b>Discribe Requirement</b></label>
                                                        <textarea id="add_4_discrib" name="add_4_discrib" class="form-control p-input" placeholder="tell about your Requirement" rows="3"></textarea>
                                                    </div>
                                                  </a>
                                                  </li>
                                              </ul>
                                          </div>
                                      </li>







                            <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#collapseExample5" aria-expanded="false" aria-controls="collapseExample">
                                <!-- <i class="fa fa-address-book"></i> -->
                                <span class="menu-title">click to Add<i class="fa fa-sort-down"></i></span>
                            </a>
                            <div class="collapse" id="collapseExample5">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item">
                                      <h5 class="card-title  text-left mb-5 mt-4">Add five</h5>
                                      <div class="form-group ">
                                        <div class="input-group">
                                          <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                          <input type="text" id="add_5_name" name="add_5_name" class="form-control p_input" placeholder="Enter Requirement name five">
                                        </div>
                                      </div>
                                      <div class="form-group ">
                                        <div class="input-group">
                                          <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                          <input type="text" id="add_5_amount" name="add_5_amount" class="form-control p_input" placeholder="Enter Amount">
                                        </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="discrib"><b>Discribe Requirement</b></label>
                                          <textarea id="add_5_discrib" name="add_5_discrib" class="form-control p-input" placeholder="tell about your Requirement" rows="3"></textarea>
                                      </div>
                                    </a>
                                    </li>
                                </ul>
                            </div>
                        </li>




                                              <button type="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-off"></span> post your product</button>

                                        </form>

                                      </div>

                                    </div>
                                  </div>


                          </div>
                    <?php endif; ?>

                </div>
