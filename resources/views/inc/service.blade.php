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
                          <h3 class="font-weight-bold txt-brand-color">{{$product->pro_name}}</h3>
                      </div>
                      <p class="font-italic text-center mt-3">
                          {{$product->description}}
                      </p>

                      <a href="/order?product_id={{$product->id}}&product_seller={{$product->user_id}}" class="btn btn-success float-right">Order {{$product->amount}}</a>
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
              @if(count($seller)>0)
                    @foreach($seller->all() as $seller)

                                  <div class="text-center">
                                      <img src="{{Storage::url($seller->img_url)}}" class="rounded-circle" width="100" height="100">
                                  </div>
                                  <div class="text-center mt-3">

                                    <h5 class="text-center font-weight-bold txt-brand-color">{{$seller->fullname}}</h5>
                                    <h6 class="text-center text-muted"><b>Level:</b> {{$seller->level}}</h6>

                                  </div>
                                  <p class="font-italic text-muted mt-3">
                                      {{$seller->about}}
                                  </p>
                                  @endforeach
                            @endif
              </div>
            </div>
        </div>
    </div>
</div>


<div class="row">
  <div class="col-lg-8  mb-4">
  <div class="card">
      <div class="card-block ">
            <div class="panel panel-white post panel-shadow">
                <div class="post-heading">
                    <div class="pull-left image">
                        <img src="http://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
                    </div>
                    <div class="pull-left meta">
                        <div class="title h5">
                            <a href="#"><b>Ryan Haywood</b></a>
                            made a post.
                        </div>
                        <h6 class="text-muted time">1 minute ago</h6>
                    </div>
                </div>
                <div class="post-description">
                    <p>Bootdey is a gallery of free snippets resources templates and utilities for bootstrap css hmtl js framework. Codes for developers and web designers</p>
                    <div class="stats">
                        <a href="#" class="btn btn-default stat-item">
                            <i class="fa fa-thumbs-up icon"></i>2
                        </a>
                        <a href="#" class="btn btn-default stat-item">
                            <i class="fa fa-thumbs-down icon"></i>12
                        </a>
                    </div>
                </div>
            </div>
          </div>
        </div>
          </div>
            <div class="col-lg-8  mb-4">
              <div class="card">
                <div class="card-block ">
            <div class="panel panel-white post panel-shadow">
                <div class="post-heading">
                    <div class="pull-left image">
                        <img src="http://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
                    </div>
                    <div class="pull-left meta">
                        <div class="title h5">
                            <a href="#"><b>Ryan Haywood</b></a>
                            made a post.
                        </div>
                        <h6 class="text-muted time">1 minute ago</h6>
                    </div>
                </div>
                <div class="post-description">
                    <p>Bootdey is a gallery of free snippets resources templates and utilities for bootstrap css hmtl js framework. Codes for developers and web designers</p>
                    <div class="stats">
                        <a href="#" class="btn btn-default stat-item">
                            <i class="fa fa-thumbs-up icon"></i>2
                        </a>
                        <a href="#" class="btn btn-default stat-item">
                            <i class="fa fa-thumbs-down icon"></i>12
                        </a>
                    </div>
                </div>
            </div>
          </div>
      </div>
    </div>
    @if (!Auth::guest())
      <div class="col-lg-8  ">
        <div class="card">
          <div class="card-block ">
            <div class="form-group">
  					<textarea name="comm_com" id="comm_com" value="${item.value}" class="form-control p-input" rows="5" placeholder="please type your comment" required="true"></textarea>
          </div>
            <a href='' onclick="this.href='/comment_com?product={{$product->id}}&comment='+document.getElementById('comm_com').value" class="btn btn-success green"><i class="fa fa-share"></i> Post a comment</a>

          </div>
        </div>
      </div>

  @endif


</div>
