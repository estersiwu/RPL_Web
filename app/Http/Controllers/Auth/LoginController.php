<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = '/home';
    public function redirectTo()
    {

        //Koordinator Login
        if(Auth::user()->role == 'koordinator')
        {
            return 'dashboard-koord';
        }

        //Dosen Login
        if(Auth::user()->role == 'dosen')
        {
            return 'dashboard-dosen';
        }

        //Mahasiswa User Login
        if(Auth::user()->role == NULL)
        {
            return 'home';
        }
        //else
        //{
            //return 'home';
        //}
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
