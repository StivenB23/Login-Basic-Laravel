<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    //
    public function login(Request $request){
         // Validation
    // $credentials = $request->validated(); 
    // dump($credentials);
    // coincidir facades Auth, investigar
    // filled helps us transform the selection of an input checkbox into true or false
    $remember = $request->filled('remember');
    if( Auth::attempt($request->only('email','password') , $remember)){
        $request->session()->regenerate();
        
        return redirect()
        ->intended('dashboard')
        ->with('status','You are logged in!');
    }

    // error validation database user
    throw ValidationException::withMessages([
        'email' => __('auth.failed')
    ]);
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->to('/')->with('status','Youre logged out'); 
    }
}
