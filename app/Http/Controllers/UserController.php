<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    function store(Request $req){
        $data = $req->input();

        $req->session()->put('user', $data['user']);

        return redirect('/');
    }

    function destory(){
        if(session()->has('user')){
            session()->pull('user');
        }

        return redirect('/');
    }

    function sae(Request $req){
        
        $data = new User;

        $data->first_name = $req->fname ;
        $data->last_name = $req->lname;
        $data->email = $req->email;
        $data->password = $req->password;
        $data->role = $req->role;
        $data->phone_number = $req->pnumber;
        $data->gender = $req->customRadio;
        $data->save();


    }
}
