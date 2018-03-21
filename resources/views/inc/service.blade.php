<div class="content-wrapper">

@if(count($product)>0)
      @foreach($product->all() as $product)
                    <div class="row mb-4">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="card">
                                <div class="card-block">
                                    <div class="row">
                                      <div class="card-block">
                                          <div class="text-center">
                                              <img src="{{Storage::url($product->image_url)}}"  width="500" height="300">
                                          </div>
                                          <div class="text-center mt-3">
                                              <h3 class="font-weight-bold txt-brand-color">{{$product->pro_name}}s</h3>
                                          </div>
                                          <p class="font-italic text-center mt-3">
                                              {{$product->description}}
                                          </p>
                                          @if(count($seller)>0)
                                                @foreach($seller->all() as $seller)
                                          <h5 class="text-center font-weight-bold txt-brand-color">{{$seller->fullname}}</h5>
                                          <h6 class="text-center text-muted"><b>Level:</b> {{$seller->level}}</h6>
                                                @endforeach
                                          @endif
                                          <button type="button" class="btn btn-success float-right">Order</button>
                                      </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        @endforeach
@endif
</div>
