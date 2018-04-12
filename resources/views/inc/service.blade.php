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
                          <h3 class="font-weight-bold btn-danger"> ₦ {{$product->amount}}</h3>
                      </div>
                      <p class="font-italic text-center mt-3">
                          {{$product->description}}
                      </p>
                      <form method="POST" action="/chieckout" accept-charset="UTF-8" class="form-horizontal" role="form">
                          {{ csrf_field() }}
                          @if(count($adddd)>0)
                                @foreach($adddd as $ad)

                          <div class="card">
                              <div class="card-block ">
                                    <div class="panel panel-white post panel-shadow">
                                        <div class="post-heading">

                                            <div class="pull-left meta">
                                              <div class="title h5 .float-sm-right">

                                                </div>
                                              </div>
                                                <div class="title h5">
                                                    <input type="checkbox"onclick="calculate_oder()" id="serv_add{{$ad->number}}" name="serv_add{{$ad->number}}" value="{{$ad->id}}"/><b>{{$ad->name}} </b>
                                                    <b class="font-weight-bold txt-brand-color">₦ {{$ad->Amount}}</b>
                                                    <div>

                                                    </div>
                                                <h6 class="text-muted time">{{$ad->discribtion}}</h6>
                                            </div>
                                        </div>

                                    </div>
                                  </div>
                                </div>

                                @endforeach
                        @endif
                          <input type="hidden" name="product_id" value="{{$product->id}}">
                          <input type="hidden" name="product_seller" value="{{$product->user_id}}">
                          <button class="btn btn-success btn-lg btn-block" type="submit">
                          <i class="fa fa-plus-circle fa-lg"></i> Order Now!
                          </button>
                      </form>

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
  @if(count($comments)>0)
        @foreach($comments->all() as $commenters)

  <div class="col-lg-8  mb-4">
  <div class="card">
      <div class="card-block ">
            <div class="panel panel-white post panel-shadow">
                <div class="post-heading">
                    <div class="pull-left image">
                        <img src="{{Storage::url($commenters->commenters_img_url)}}" class="img-circle avatar" alt="user profile image">
                    </div>
                    <div class="pull-left meta">
                        <div class="title h5">
                            <b>{{$commenters->commenters_name}}</b>
                            made a post.
                        </div>
                        <h6 class="text-muted time">{{$commenters->created_at}}</h6>
                    </div>
                </div>
                <div class="post-description">
                    <p>{{$commenters->comment}}</p>

                </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    @endif
    @if (!Auth::guest())
      <div class="col-lg-8  ">
        <div class="card">
          <div class="card-block ">
            <div class="form-group">
              <h5 class="font-weight-bold txt-brand-color">Comment</h5>
              @if (count($errors)>0)
                  <?php foreach ($errors ->all() as $error): ?>
                    <span class="btn btn-danger">
                        <strong><b>{{ $error}}</b></strong>
                    </span>
                  <?php endforeach; ?>
              @endif
  					<textarea name="comm_com" id="comm_com" value="${item.value}" class="form-control p-input" rows="5" placeholder="please type your comment" required="true"></textarea>
          </div>
            <a href='' onclick="this.href='/comment_com?product={{$product->id}}&comment='+document.getElementById('comm_com').value" class="btn btn-success green"><i class="fa fa-share"></i> Post a comment</a>

          </div>
        </div>
      </div>

  @endif


</div>
