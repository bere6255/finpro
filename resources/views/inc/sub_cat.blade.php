<div class="row mb-2">

          @if(count($sub_cat)>0)
              @foreach($sub_cat as $sub_cat)
              <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
                  <div class="card">
                      <div class="card-block">
                          <div class="clearfix">
                            <a href="/main?service={{$sub_cat->id}}"><img name="{{$sub_cat->sub_cat}}" src="{{Storage::url($sub_cat->image_url)}}" alt="" style="width:100%; height:25%;  "></a>
                          </div>
                          <div class=" card clearfix">
                          <a href="/main?service={{$sub_cat->id}}">  <h4 class="font-weight-bold txt-brand-color">{{$sub_cat->sub_cat}}</h4></a>
                          </div>
                      </div>
                  </div>
              </div>
              @endforeach
          @endif
</div>
