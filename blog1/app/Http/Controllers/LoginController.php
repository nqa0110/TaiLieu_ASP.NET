<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request; //lấy Get/Post/...
use Illuminate\Support\Facades\Auth; // Xác thực user tồn tại hay k
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class LoginController extends Controller
{
    //Validation
    protected function validator(array $data){
        return Validator::make($data, [
            'email' => 'required|email|max:255',
            'password' => 'required|min:0',
        ]);
    }
    //Get Login
    public function index(Request $request){
        if($request->isMethod('post')){
            $email = $request->input("email");
            $password = $request->input("password");
            if( Auth::attempt(['email' => $email, 'password' => $password])){
                Redirect::to("/trangchu");
            } else{
                return Redirect::to("/login")->withInput()->withErrors("Email hoặc mật khẩu sai");
            }
            return back()->withInput();
        }
        return view('login.index');
    }
}
