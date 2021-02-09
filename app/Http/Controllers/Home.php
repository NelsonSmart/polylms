<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class Home extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function profile(){
        return view('pages/welcome2');
    }
}
