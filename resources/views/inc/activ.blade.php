<div class="content-wrapper">

  <div class="row">
    <div class="col-lg-8  mb-4">
        <div class="card">
            <div class="card-block">
                <div class="panel panel-white text-center post panel-shadow">

                               <h5 class="card-title mb-4">E-mail Verification Required</h5>
                               @if (count($activ)>0)
                                   <?php if (!$activ==""){ ?>
                                     <span class="btn btn-danger">
                                         <strong><b>{{ $activ}}</b></strong>
                                     </span>
                                   <?php } ?>
                               @endif
                               @if (count($activ2)>0)
                                   <?php if (!$activ==""){ ?>
                                     <span class="btn table-info">
                                         <strong><b>{{ $activ2}}</b></strong>
                                     </span>
                                   <?php } ?>
                               @endif

            </div>
            </div>
        </div>

    </div>
  </div>
