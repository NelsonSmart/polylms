<?php

namespace App\Http\Controllers\Auth_admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin_pages.auth_register');
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
        $this->validate( $request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = new User([
            'username' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request ->get('password')),

        ]);

        $user->save();

        return redirect() ->route('admin_register') -> with ('success', 'Record Added');

        /*
            Auth::login($user = User::create([
                'username' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]));
           confirmed| 
        */


       // event(new Registered($user));

       // return redirect(RouteServiceProvider::HOME);
    }
}
