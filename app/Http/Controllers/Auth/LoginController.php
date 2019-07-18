<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use Auth;
use App\User;

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

    //Google oAuth
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback()
    {
        $userSocial = Socialite::driver('google')->stateless()->user();
         //emailで登録を調べる
         $user = User::where(['email' => $userSocial->getEmail()])->first();

         //登録（email）の有無で分岐
         if($user){
 
             //登録あればそのままログイン（2回目以降）
             Auth::login($user);
             return redirect('/tasks');
 
         }else{
 
             //なければ登録（初回）
             $newuser = new User;
             $newuser->name = $userSocial->getName();
             $newuser->email = $userSocial->getEmail();
             $newuser->save();
 
             //そのままログイン
             Auth::login($newuser);
             return redirect('/tasks');
         }
        // $user->token;
    }
}
