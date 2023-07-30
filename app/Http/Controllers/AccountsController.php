<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;
use App\models\User;

class AccountsController extends Controller
{
    public function register(Request $req) {
        if($req->isMethod("POST")){
           if(User::where('email',$req['email'])->exists()){
             echo "email already exists";
           }
           $req->validate(
            [
                'username'=>'required',
                'email' => 'required|email|unique:users',
                'password' => ['required',
                    Password::min(8)
                        ->mixedCase()
                        ->numbers()
                        ->symbols()],
                'password_confirmation' => 'required | same:password'
            ]
            );
           $user=User::create($req->all());
           return redirect('/accounts/login');

        }else{
            return view('register');
        }
    }

    public function login(Request $req){
        if($req->isMethod("POST")) {
            if(User::where('email',$req['email'])->exists() 
                && User::where('password',$req['password'])->exists()) {

                     
                        // Authentication passed...
                        session(['email' => $req['email']]);

                        return redirect('/');
                    
            }
        } else {
            return view('login');
        }
    }
}
