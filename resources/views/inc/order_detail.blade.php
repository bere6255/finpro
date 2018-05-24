<div class="content-wrapper">

  <div class="row">
    <div class="col-lg-8  mb-4">
        <div class="card">
            <div class="card-block">
                <div class="panel panel-white post panel-shadow">
                @if(count($product)>0)
                      @foreach($product->all() as $product)
                      <div class="text-center">
                          <img src="{{Storage::url($product->image_url)}}"  width="100%" height="50%S">
                      </div>
                      <div class="text-center mt-3">
                          <h3 class="font-weight-bold txt-brand-color">{{$product->pro_name}}</h3><br>
                      </div>
                      <p class="font-italic text-center mt-3">
                          {{$product->description}}
                      </p>



                      @if(count($add_1)>0)


                      <div class="card">
                          <div class="card-block ">
                                <div class="panel panel-white post panel-shadow">
                                    <div class="post-heading">

                                        <div class="pull-left meta">
                                          <div class="title h5 .float-sm-right">

                                            </div>
                                          </div>
                                            <div class="title h5">
                                                <b>{{$add_1->name}} </b>


                                            <h6 class="text-muted time">{{$add_1->discribtion}}</h6>
                                        </div>
                                    </div>

                                </div>
                              </div>
                            </div>


                    @endif

                    @if(count($add_2)>0)


                    <div class="card">
                        <div class="card-block ">
                              <div class="panel panel-white post panel-shadow">
                                  <div class="post-heading">

                                      <div class="pull-left meta">
                                        <div class="title h5 .float-sm-right">

                                          </div>
                                        </div>
                                          <div class="title h5">
                                              <b>{{$add_2->name}} </b>


                                          <h6 class="text-muted time">{{$add_2->discribtion}}</h6>
                                      </div>
                                  </div>

                              </div>
                            </div>
                          </div>


                  @endif

                  @if(count($add_3)>0)


                  <div class="card">
                      <div class="card-block ">
                            <div class="panel panel-white post panel-shadow">
                                <div class="post-heading">

                                    <div class="pull-left meta">
                                      <div class="title h5 .float-sm-right">

                                        </div>
                                      </div>
                                        <div class="title h5">
                                            <b>{{$add_3->name}} </b>


                                        <h6 class="text-muted time">{{$add_3->discribtion}}</h6>
                                    </div>
                                </div>

                            </div>
                          </div>
                        </div>


                @endif

                @if(count($add_4)>0)
                    

                <div class="card">
                    <div class="card-block ">
                          <div class="panel panel-white post panel-shadow">
                              <div class="post-heading">

                                  <div class="pull-left meta">
                                    <div class="title h5 .float-sm-right">

                                      </div>
                                    </div>
                                      <div class="title h5">
                                          <b>{{$add_4->name}} </b>


                                      <h6 class="text-muted time">{{$add_4->discribtion}}</h6>
                                  </div>
                              </div>

                          </div>
                        </div>
                      </div>


              @endif

              @if(count($add_5)>0)


              <div class="card">
                  <div class="card-block ">
                        <div class="panel panel-white post panel-shadow">
                            <div class="post-heading">

                                <div class="pull-left meta">
                                  <div class="title h5 .float-sm-right">

                                    </div>
                                  </div>
                                    <div class="title h5">
                                        <b>{{$add_5->name}} </b>


                                    <h6 class="text-muted time">{{$add_5->discribtion}}</h6>
                                </div>
                            </div>

                        </div>
                      </div>
                    </div>


                    @endif

                      @endforeach
              @endif
            </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4  mb-4">
        <div class="card">
            <div class="card-block">
              <div class="panel panel-white post panel-shadow">
              @if(count($buyer_details)>0)
                    @foreach($buyer_details->all() as $buyer)

                                  <div class="text-center">
                                      <img src="{{Storage::url($buyer->img_url)}}" class="rounded-circle" width="100" height="100">
                                  </div>
                                  <div class="text-center mt-3">

                                    <h5 class="text-center font-weight-bold txt-brand-color">{{$buyer->fullname}}</h5>
                                    <h6 class="text-center text-muted"><b>Level:</b> {{$buyer->level}}</h6>

                                  </div>
                                  <p class="font-italic text-muted mt-3">
                                      {{$buyer->about}}
                                  </p>
                                  @endforeach
                            @endif
              </div>
            </div>
        </div>
    </div>
</div>



</div>
