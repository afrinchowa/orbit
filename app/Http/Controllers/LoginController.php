<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('login');
    }
    // this method will authenticate user
    public function authenticate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->passes()) {
            if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
                return redirect()->route('account.dashboard');
            }else{
                return redirect()->route('account.login')->with('error','Either email or password is incorrect.');
            }

        } else {
            return redirect()->route('account.login')
                ->withInput()
                ->withErrors($validator);
        }
    }
// this method will show register page 

public function register(){
return view('register');
}
public function processRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:5',
            'password_confirmation' => 'required',
            'name' => 'required'
        ]);
    
        if ($validator->passes()) {
            $user = new User();
            $user -> name = $request -> name;
            $user -> email = $request -> email;
            $user -> password = Hash::make($request->password);
            $user -> role = 'user';
            $user-> save();


            return redirect()->route('account.login')->with('success','You have successfully registered ');
    
        } else {
            return redirect()->route('account.register')
                ->withInput()
                ->withErrors($validator);
        }
    }

public function logout(){
    Auth::logout();
    return redirect()->route('account.login');

}




}
