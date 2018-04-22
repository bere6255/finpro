<div class="content-wrapper">

  <div class="row">

  @if(count($producting_main)>0)
      @foreach($producting_main->all() as $production)
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
          <div class="card">
              <div class="card-block">
                  <div class="clearfix">
                    <a href="/productdetails?service={{$production->id}}"><img src="{{Storage::url($production->image_url)}}" alt="" style="width:100%; height:25%;  "></a>
                  </div>
                  <div class=" card clearfix">
                    <a href="/productdetails?service={{$production->id}}">  <h4 class="font-weight-bold txt-brand-color">{{str_limit($production->pro_name,  $limit = 38)}}</h4></a>
                    <h4 class="font-weight-normal text-success"><span class="pull-right">₦ {{$production->amount}}</span></h4>
                  </div>
                  <div class=" card clearfix">
                  <p>
                  <h6>{{str_limit($production->description, $limit = 85, $end = '...')}}</h6>
                  </p>
                </div>
              </div>
          </div>
        </div>
      @endforeach
  @endif
  </div>
</div>
