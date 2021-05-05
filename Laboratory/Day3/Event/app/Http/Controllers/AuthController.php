<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth, Redirect;
class AuthController extends Controller
{
    protected $user, $request;

    public function __construct(User $user, Request $request){
        $this->user = $user;
        $this->request = $request;
    }

    public function loginPage(){
        return view('login');
    }

    public function verify(){
        if(Auth::attempt($this->request->except('_token'))){
            return view('dashboard');
        }

        return back()->withError('Invalid Credentials'); 
    }

    public function signup(){
        return view('register');
    }

    public function register(){

        $isSignup = User::create([
            'name' => $this->request->name,
            'email' => $this->request->email,
            'password' => bcrypt($this->request->password)
        ]);

        if($isSignup){
            if(Auth::attempt($this->request->except('_token'))){
                return view('dashboard');
            }
    
            return back()->withError('Invalid Credentials'); 
        }

        return back()->withError('Something '); 
    }

    public function adminPage(){
        return view('dashboard');
    }

    public function logout(){
        Auth::logout();
        return Redirect::route('login');
    }
}
