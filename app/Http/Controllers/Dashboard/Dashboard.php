<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Access;
use App\Models\Data;
use App\Models\Domain;
use App\Models\Profile;
use App\Models\ProfileUsers;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index(){
        $domains = count(Domain::all());
        $profiles = count(Profile::all());
        $access = count(Access::all());
        $data = count(Data::all());
        $users = ProfileUsers::all();
        $active_access = Access::all();
        return view('home.dashboard',compact('domains','profiles','access','data','users','active_access'));
    }
}
