<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class DashboardController extends Controller
{
    function index(Request $request){

        if(Auth::user()->role == 'user')
        {
        return view('dashboard')->with('num',$request->get('slug'));
        }elseif(Auth::user()->role == 'admin'){
            return view('dashboard')->with('num',$request->get('slug'));
        }
        elseif(Auth::user()->role == 'manager'){
            return view('dashboard')->with('num',$request->get('slug'));
        }

    }
}
