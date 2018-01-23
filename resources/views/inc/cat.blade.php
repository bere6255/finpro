<div class="row mb-2">

          @if(count($cart)>0)
              @foreach($cart->all() as $cart)
              <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
                  <div class="card">
                      <div class="card-block">
                          <div class="clearfix">
                            <a href="/subcat?catigory={{$cart->id}}"><img name="{{$cart->Cart}}" src="{{Storage::url($cart->image_url)}}" alt="" style="width:100%; height:25%;  "></a>
                          </div>
                          <div class=" card clearfix">
                          <a href="/subcat?catigory={{$cart->id}}">  <h4 class="font-weight-bold txt-brand-color">{{$cart->Cart}}</h4></a>
                          </div>
                      </div>
                  </div>
              </div>

              @endforeach
          @endif
</div>
