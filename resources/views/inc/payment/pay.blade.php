<div class="content-wrapper">
<div class="row mb-2" >
<div class="col-lg-6 mb-4">
    <div class="card">
        <div class="card-block">
          <div class="modal-body" style="padding:40px 50px;">
            <h3 class="card-title text-primary text-left mb-5 mt-4">Confirmed Payment Details</h3>
            <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
      <div class="row" style="margin-bottom:40px;">

          <div class="col-md-8 col-md-offset-2 text-center">
            <div class="text-center">
                <img src="/Storage/webdonnig.jpg" class="rounded-circle" width="100" height="100">
            </div>
            <p>
                <div>
                    Payment for: {{$display_detsils[3]}}<br>
                    E-mail: {{$display_detsils[0]}}<br>
                    Order ID: {{$display_detsils[1]}}<br>
                    Amount: ₦ {{$display_detsils[2]}}

                </div>
            </p>
            <input type="hidden" name="email" value="{{$trans[0]}}">
            <input type="hidden" name="orderID" value="{{$trans[1]}}">
            <input type="hidden" name="amount" value="{{$trans[2]}}"> {{-- required in kobo --}}
            <input type="hidden" name="quantity" value="{{$trans[3]}}">
            <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
            <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}
            {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}

             <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}


            <p>
              <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
              <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
              </button>
            </p>
          </div>


      </div>
</form>
          </div>
        </div>
    </div>
  </div>
</div>
</div>
