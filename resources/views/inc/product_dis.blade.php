<div class="row">

  @if(count($produc)>0)
      @foreach($produc->all() as $product)
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
          <div class="card">
              <div class="card-block">
                  <div class="clearfix">
                    <a href="/productdetails?service={{$product->id}}"><img src="{{Storage::url($product->image_url)}}" alt="" style="width:100%; height:25%;  "></a>
                  </div>
                  <div class=" card clearfix">
                    <a href="/productdetails?service={{$product->id}}">  <h4 class="font-weight-bold txt-brand-color">{{$product->pro_name}}</h4></a>
                    <h4 class="font-weight-normal text-success"><span class="pull-right">N {{$product->amount}}</span></h4>
                  </div>
                  <div class=" card clearfix">
                  <p>
                  <h6>{{$product->description}}</h6>
                  </p>
                </div>
              </div>
          </div>
        </div>
      @endforeach
  @endif
