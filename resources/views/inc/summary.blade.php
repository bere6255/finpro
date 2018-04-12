<div class="content-wrapper">

  <div class="row">
    <div class="col-lg-8  mb-4">
        <div class="card">
            <div class="card-block">
                <div class="panel panel-white post panel-shadow">

                      <form method="POST" action="/order" accept-charset="UTF-8" class="form-horizontal" role="form">
                          {{ csrf_field() }}
                               <h5 class="card-title mb-4">Order Summary</h5>
                               <div class="table-responsive">
                                   <table class="table">
                                       <thead>
                                           <tr class="text-primary">

                                               <th>Name</th>
                                               <th>Price</th>
                                               <th></th>
                                           </tr>
                                       </thead>
                                       <tbody>
                                         @if(count($product)>0)
                                               @foreach($product->all() as $product)
                                           <tr class="">
                                               <td>{{$product->pro_name}}</td>
                                               <td>₦ {{$product->amount}}</td>
                                           </tr>
                                           @endforeach
                                           @endif

                                           @if(count($add1)>0)

                                             <tr class="">
                                                 <td>{{$add1[0]->name}}</td>
                                                 <td>₦ {{$add1[0]->Amount}}</td>
                                             </tr>

                                             @endif
                                             @if(count($add2)>0)

                                               <tr class="">
                                                   <td>{{$add2[0]->name}}</td>
                                                   <td>₦ {{$add2[0]->Amount}}</td>
                                               </tr>

                                               @endif
                                               @if(count($add3)>0)

                                                 <tr class="">
                                                     <td>{{$add3[0]->name}}</td>
                                                     <td>₦ {{$add3[0]->Amount}}</td>
                                                 </tr>

                                                 @endif
                                                 @if(count($add4)>0)

                                                   <tr class="">
                                                       <td>{{$add4[0]->name}}</td>
                                                       <td>₦ {{$add4[0]->Amount}}</td>
                                                   </tr>

                                                   @endif
                                                   @if(count($add5)>0)

                                                     <tr class="">
                                                         <td>{{$add5[0]->name}}</td>
                                                         <td>₦ {{$add5[0]->Amount}}</td>
                                                     </tr>

                                                     @endif


                                       </tbody>
                                   </table>
                               </div>
                           </div>





                          <input type="hidden" name="product_id" value="{{$product->id}}">
                          <input type="hidden" name="product_seller" value="{{$product->user_id}}">
                          <input type="hidden" name="total" value="{{$summary}}">
                          <button class="btn btn-success btn-lg btn-block" type="submit">
                          <i class="fa fa-plus-circle fa-lg"></i> proceed to payment! ₦ {{$summary}}.00
                          </button>
                      </form>

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




    </div>
