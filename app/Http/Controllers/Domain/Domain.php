<?php

namespace App\Http\Controllers\Domain;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Domain extends Controller
{
    public function index(){
        $domains = \App\Models\Domain::all();
        return view('domain.index',compact('domains'));
    }
}
