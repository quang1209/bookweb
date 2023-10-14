<?php

namespace App\Http\Controllers\Backend;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class AuthController extends Controller
{
    public function __construct()
    {

    }
    public function register(){
       return view('webpage.dangky');
    }
    public function login(){
       return view('webpage.login');
     }
     public function create(RegisterRequest $request){
   //

     // Create a new user and save
     $user = new User;
     $user->fullname = $request->input('fullname');
     $user->email = $request->input('email');
     $user->password = Hash::make($request->input('password'));
     $user->dateofbirth = $request->input('date');
     $user->sex = $request->input('gioitinh');
     $user->save();


     Auth::login($user);


     return redirect('/login')->with('success', 'Đăng ký thành công');
     }
     public function checkuser(AuthRequest $request){

      $cremential = [
         'email' => $request->input('email'),
         'password' =>$request->input('password')
      ];
      $previousUrl = session('previous_url');
      if (Auth::attempt($cremential)) {
         $current = url()->current();
         Cookie::queue('user_id', Auth::id(), 300);

         return redirect($previousUrl ?: route('trangchu.index'))->with('success', 'Đăng nhập thành công');
     }



       return redirect() ->route('login')->with('error',"email hoặc mật khẩu không chính xác");
    }
    public function logout(Request $request)
{
    Cookie::queue(Cookie::forget('user_id'));
    Auth::logout();

    return redirect()->back();
}

}
