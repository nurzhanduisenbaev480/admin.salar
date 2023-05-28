<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    //
    public function index(){

        return view('order.index');
    }
    public function create(){
        $cities = City::all();
        $author = Auth::user();
        return view('order.create', compact('cities', 'author'));
    }
}
