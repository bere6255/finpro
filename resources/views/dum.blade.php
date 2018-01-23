<?php
class LoginController extends Controller
{


	 public function docs(){

    // any custom logic

   //check if user is logged in or user have permission to download this file etc


        $headers = [
          'Content-Type' => 'image/png',
       ];

    return response()->download(storage_path('app/users/documents/4YPa0bl0L01ey2jO2CTVzlfuBcrNyHE2TV8xakPk.png'), 'filename.png', $headers);
 }
when you will hit localhost:8000/docs file will be downloaded if there exists any

file must be in root/storage/app/users/documents directory according to above code



    Route::get('storage/{filename}', function ($filename)
{
    $path = storage_path('public/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});
You can now access your files just as you would if you had a symlink:

http://somedomain.com/storage/image.jpg


    $array_images = collect(DB::table('photo')
        ->whereIn('photo_symbol_id', $array_symbols_id)
        ->where('photo_moderation_id','2')
        ->orderByRaw('RAND()')
        ->get(['photo_id', 'photo_src', 'photo_symbol_id']));


        DB::select("select * from  where cat ='$catigory'")
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


    use AuthenticatesUsers;


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function credentials(Request $request) {
      return array_merge($request->only($this->username(), 'password'), ['active' => 1]);
    }

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
