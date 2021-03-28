<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{

    public function index(){
        return  view('pages.index');
    }
    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $remember = true ;

        $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'repassword' => 'required|string|min:8|same:password'
        ]);

        Auth::login($user = User::create([
            'first_name' => $request->fname,
            'last_name' => $request->lname,
            'role' => $request->role,
           'phone_number' => $request->pnumber,
            'gender' => $request->customRadio,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'remember_token' => $remember,
        ]), $remember = true);

        event(new Registered($user));

        return redirect(RouteServiceProvider::HOME)-> with ('success', 'Account Created');
    }
}
