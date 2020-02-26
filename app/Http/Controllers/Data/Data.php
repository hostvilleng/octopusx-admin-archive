<?php

namespace App\Http\Controllers\Data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Data extends Controller
{
    public function index(){
        $models = \App\Models\Data::all();
        return view('data.index',compact('models'));
    }
}
