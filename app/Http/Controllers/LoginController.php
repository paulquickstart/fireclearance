<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        return view('login');
    }

    public function logout(Request $request){
       //  $logout = Auth::logout();
         Auth::logout();
         return redirect('/login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function registration(Request $request)
    {
        return view('registration');
    }

    public function authenticate(Request $request)
    {

        $user = User::usernameOrEmail( $request->get('login-email') )->first();
        if($user)
        {

            if (Auth::attempt(['username' => $user->username, 'password' => $request->input('login-password'), 'id' => $user->id]) ){

                $user = Auth::user();

                $suer_role = $user->roles->first()->name;

                switch ($suer_role) {
                    case User::ROLE_CLIENT :
                        return redirect()->intended('user/client');
                        break;         
                }
            }

            $request->session()->flash('message', 'Login is invalid');
            
            return redirect()->route('login');
        }

    }
}
