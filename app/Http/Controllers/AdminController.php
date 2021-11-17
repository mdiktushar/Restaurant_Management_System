<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Food;

class AdminController extends Controller
{
    public function user() {

        $data = user::all();
        return view('admin.users', compact("data"));
    }
    
    public function delete($id) {

        $data = user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function foodmenue()
    {
        # code...
        $data = food::all();
        return view('admin.foodmenue', compact("data"));
    }

    public function upload(Request $request)
    {
        # code...
        $data = new food;
        $image = $request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimage',$imagename);
        $data->image = $imagename;

        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;

        $data->save();
        return redirect()->back();
    }

    public function deletemenue($id) {
        $data = food::find($id);
        $data->delete();
        return redirect()->back();
    }
}
