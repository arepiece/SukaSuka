<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

    use AuthenticatesUsers;
//    use Socialite;

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
    
    
    public function redirectToFacebookProvider()
{
//        dd('ssss');
    return \Socialite::driver('facebook')->redirect();
//    dd('sss');
}
 
/**
 * Obtain the user information from Facebook.
 *
 * @return void
 */
 public function handleProviderFacebookCallback()
{
//     dd('sss');
    $user = \Socialite::driver('facebook')->user(); // Fetch authenticated user
    dd($user); 
}
}
