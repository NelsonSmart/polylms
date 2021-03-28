<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        
        $request->authenticate();

        $req = $request->email ;

        $user = DB::table('users')->where('email', $req)
        ->get();

        foreach($user as $item){
            if ($item->role == 0){
                $request->session()->put('user', $user);
    
                return redirect()->intended('/');
            }elseif($item->role == 2){
                $request->session()->put('user', $user);
    
                return redirect()->intended('admin_');


            }else{
                return back()->withErrors([
                    'email' => 'the provided credentials do not match our records.',
                    ]);
            }
    
            
            

        }

        
    }

    function s(){
        $dat = DB::table('users')->where('email', 'admin@adimn.com')
        ->first();

        return $dat->email;
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
       

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
