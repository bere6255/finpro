<div class="content-wrapper">

  <div class="row">
    <div class="col-lg-8  mb-4">
        <div class="card">
            <div class="card-block">
                @if(count($product)>0)
                      @foreach($product->all() as $product)
                      <div class="text-center">
                          <img src="{{Storage::url($product->image_url)}}"  width="500" height="300">
                      </div>
                      <div class="text-center mt-3">
                          <h3 class="font-weight-bold txt-brand-color">{{$product->pro_name}}s</h3>
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
    <div class="col-lg-4  mb-4">
        <div class="card">
            <div class="card-block">
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


<div class="row">
  <div class="col-lg-8  mb-4">
      <div class="card">
          <div class="card-block">
              <h4>Reviews</h4>
          </div>
      </div>
  </div>
  
</div>
