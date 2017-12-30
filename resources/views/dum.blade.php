<?php
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    pruduct tables
    product id
    product name
    product describtion
    product amount
    product rating
    product image
    poster id
    addition
    product catigory
    product sub_cat
    timestamps

    $userifo =User::find(Auth::id())->with('personalinfo')->first();
    return $userifo



    private function load($loaded){
      $forminput=$loaded->except('image');
      //handil image upload
      $image=$loaded->image;
      if($image){
        $imagename=$image->getClientoriginalName();
        $image->move('images',$imagename);
        //pass image name to forminput
        $forminput['image']=$imagename;
        return $forminput;
      }


    }



    <?php $name =1; if ($name==1): ?>
      @section('product')
        @include('inc.product_samp')
      @endsection
    <?php else: echo "just checking thingss out"; ?>

    <?php endif; ?>











    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function credentials(Request $request) {
      return array_merge($request->only($this->username(), 'password'), ['active' => 1]);
    }

    /**
     * Get the failed login response instance.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function sendFailedLoginResponse(Request $request)
    {
        $errors = [$this->username() => trans('auth.failed')];

        // Load user from database
        $user = User::where($this->username(), $request->{$this->username()})->first();

        // Check if user was successfully loaded, that the password matches
        // and active is not 1. If so, override the default error message.
        if ($user && \Hash::check($request->password, $user->password) && $user->active != 1) {
            $errors = [$this->username() => trans('auth.notactivated')];
        }

        if ($request->expectsJson()) {
            return response()->json($errors, 422);
        }
        return redirect()->back()
            ->withInput($request->only($this->username(), 'remember'))
            ->withErrors($errors);
    }
}


public function reghome(Request $request) {

  $validator = Validator::make($request->all(),[
    'reg_usrname'=> 'required',
    'email'=> 'required|unique:users',
    'passwords'=>'required|confirmed'
  ]);
  if($validator->fails()){
    return Redirect('/register')->withErrors($validator);
    exit();
  }else {
    save();
  }
}



<div class="span9">
  <div class="well well-small">
      <h4>Featured products <small class="pull-right">200+ featured products</small></h4>
    <div class="row-fluid">
      <div id="feartured" class="carousel slide">
        <div class="carousel-inner">

          <div class="item active">
            <ul class="thumbnails">
              <li class="span3">
                <div class="thumbnail">
                  <i class="tag"></i>
                    <a href="#"><img src="images/product1.jpg" alt=""></a>
                      <div class="caption">
                        <h5>product name</h5>
                        <h4><a class="btn" href="#">VIWE</a><span class="pull-right">N 500.25</span></h4>
                      </div>
                </div>
              </li>

              <li class="span3">
                <div class="thumbnail">
                  <i class="tag"></i>
                    <a href="#"><img src="images/product2.jpg" alt=""></a>
                      <div class="caption">
                        <h5>product name</h5>
                        <h4><a class="btn" href="#">VIWE</a><span class="pull-right">N 500.25</span></h4>
                      </div>
                </div>
              </li>

              <li class="span3">
                <div class="thumbnail">
                  <i class="tag"></i>
                    <a href="#"><img src="images/product3.jpg" alt=""></a>
                      <div class="caption">
                        <h5>product name</h5>
                        <h4><a class="btn" href="#">VIWE</a><span class="pull-right">N 500.25</span></h4>
                      </div>
                </div>
              </li>


            </ul>
          </div>

          <div>
            <ul>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
