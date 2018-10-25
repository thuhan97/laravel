<?php

namespace App\Http\Controllers;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use App\http\Requests\RegisterRequest;
use Validator;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
     public function getLogin()
    {
    	//return view('Admin.login');
    	 
    
        if (Auth::check()) {
            // nếu đăng nhập thàng công thì 
            return redirect()->route('user.index');
        } else {
            return view('Admin.login');
        }

    
    }
    public function postLogin(Request $request){

    	$validate = Validator::make(
		    $request->all(),
		    [
		       'email'=>'required|email|max:255',
		       'password'=>'required|min:5'
		    ],

		    [
		        'required' => ':attribute không được để trống',
		        'min' => ':attribute không được nhỏ hơn :min',
		        'max' => ':attribute không được lớn hơn :max',
		    ]

		);

		if ($validate->fails()) {
		    return redirect()->back()->withErrors($validate)->withInput();
		}
		//else return redirect()->route('user.index');
	  else {
        $email = $request->input('email');
        $password = $request->input('password');

        if( Auth::attempt(['email' => $email, 'password' =>$password])) {
          return redirect()->route('user.index');
        } else {
          $errors = new MessageBag(['errorlogin' => 'Email hoặc mật khẩu không đúng']);
          return redirect()->back()->withInput()->withErrors($errors);
        }
      }
    }
    public function logout(){
      Auth::logout();
      return redirect('login');
    }
}
