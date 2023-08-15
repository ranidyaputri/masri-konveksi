<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    function index() {
        $splitname = "";
        if(Auth::check()){
            $string = User::where('name', Auth::user()->name)->first()->name;
            $name = explode(" ", $string);
            $splitname = $name[0];
        }
        return view('landing', [
            'name' => $splitname,
        ]);
    }
}
