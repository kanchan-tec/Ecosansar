<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Session;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
  public function index(){
    return view('admin/auth/login');
  }
  public function admin_login_store(Request $request)
  {
    $input = $request->all();

    $rules = [
        'email' => 'required|exists:users,email',
        'password' => 'required',
    ];

    $messages = [
        'email.required' => 'Please enter your email.',
        'email.exists' => 'The provided email address is not registered.',
        'password.required' => 'Please enter your password.',
    ];

    $validator = Validator::make($input, $rules, $messages);

    if ($validator->fails()) {
        return redirect()->route('login')->withErrors($validator)->withInput();
    }

    if (auth()->attempt(['email' => $input['email'], 'password' => $input['password']])) {
        if (auth()->user()->type == 'admin') {
            return redirect()->route('admin.admin_dashboard');
        } else {
            return redirect()->route('admin.sahayak_dashboard');
        }
    } else {
        return redirect()->route('admin_login')->withErrors([
            'password' => 'You have entered an incorrect password.',
        ]);
    }
  }

//   public function dashboard(){

//     if(isset(Auth::user()->type) && Auth::user()->type == 'admin' ){

//         return view('index');
//     }else if(isset(Auth::user()->type) && Auth::user()->type == 'admin' ){
//         return view('sahayakindex');
//     }else
//         return view('auth.login');
//     }

public function dashboard(){
    return view('index');
}
public function sahdashboard(){
    return view('sahayakindex');
}

public function destroy(Request $request)
    {

        Session::flush();
        Auth::logout();
        return Redirect('admin_login');
    }
}
