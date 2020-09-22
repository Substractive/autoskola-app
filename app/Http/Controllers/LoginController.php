<?php
/**
 * Created by PhpStorm.
 * User: Dino
 * Date: 19.9.2020.
 * Time: 22:25
 */
namespace App\Http\Controllers;

use App\Http\Controllers\Contracts\LoginControllerContract;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller implements LoginControllerContract {


    public function login(){
        return view('login');
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }else{
            return redirect()->route('login')
                ->with(LoginController::KEY_MESSAGE_ERROR,'Podaci za prijavu nisu ispravni');
        }
    }

}
