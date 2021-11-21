<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Food;
use App\Models\User;
use App\Models\FoodChef;
use App\Models\Cart;
use App\Models\Order;

class HomeController extends Controller
{
    public function index() {
        $data = food::all();
        $data2 = foodchef::all();
        return view("home", compact("data", "data2"));
    }

    public function redirects() {
        $data = food::all();
        $data2 = foodchef::all();

        $userType = Auth::user()->usertype;

        if($userType === '1'){
            return view('admin.adminhome');
        } else {
            $user_id = Auth::id();
            $count = cart::where('user_id', $user_id)->count();
            return view('home',compact('data','data2','count'));
        }
    }

    public function addcard(Request $request, $id)
    {
        if(Auth::id()){
            $user_id = Auth::id();
            $foodid = $id;
            $quantity = $request->quantity;

            $cart = new cart;

            $cart->user_id = $user_id;
            $cart->food_id = $foodid;
            $cart->quantity = $quantity;

            $cart->save();

            return redirect()->back();
        } else {
            return redirect('/login');
        }
    }

    
    public function showcart(Request $request, $id)
    {
        # code...
        $count = cart::where('user_id', $id)->count();

        $data2 = cart::select('*')->where('user_id', '=', $id)->get();

        $data = cart::where('user_id', $id)->join('food', 'carts.food_id', '=', 'food.id')->get();

        return view('showcart', compact('count', 'data','data2'));
    }

    public function remove($id)
    {
        # code...
        $data = cart::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function orderconfirm(Request $request)
    {
        # code...
        foreach($request->foodname as $key => $foodname){
            $data = new order;
            $data->foodname = $request->foodname[$key];
            $data->price = $request->price[$key];
            $data->quantity = $request->quantity[$key];
            $data->name = $request->name;
            $data->address = $request->address;
            $data->phone = $request->number;

            $data->save();


        }
        return redirect()->back();
        
    }
}
