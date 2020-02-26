<?php

namespace App\Http\Controllers\Access;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Access extends Controller
{
    public function index(){
        $access_services = \App\Models\Access::all();
        return view('access.index',compact('access_services'));
    }
}
