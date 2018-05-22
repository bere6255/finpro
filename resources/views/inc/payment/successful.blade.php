<div class="content-wrapper">
<div class="row mb-2" >
<div class="col-lg-6 mb-4">
    <div class="card">
        <div class="card-block">
          <div class="modal-body" style="padding:40px 50px;">
            <h3 class="card-title text-success text-left mb-5 mt-4"> Payment Successful</h3>
            <form method="get" action="/main" accept-charset="UTF-8" class="form-horizontal" role="form">
      <div class="row" style="margin-bottom:40px;">

          <div class="col-md-8 col-md-offset-2 text-center">
            <div class="text-center">
                <img src="/Storage/webdonnig.jpg" class="rounded-circle" width="100" height="100">
            </div>
            <p>
                <div>
                    Order ID: {{$success["order_id"]}}<br>
                    Amount: ₦ {{$success["amount"]}}

                </div>
            </p>
            {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}
            <p>
              <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
              <i class="fa fa-plus-circle fa-lg"></i> back to home!
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
