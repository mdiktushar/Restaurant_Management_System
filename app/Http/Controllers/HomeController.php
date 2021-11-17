<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Food;
use App\Models\User;

class HomeController extends Controller
{
    public function index() {
        $data = food::all();
        return view("home", compact("data"));
    }

    public function redirects() {
        $userType = Auth::user()->usertype;

        if($userType === '1'){
            return view('admin.adminhome');
        } else {
            return view('home');
        }
    }
}
