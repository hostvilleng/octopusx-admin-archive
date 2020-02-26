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

    public function create(Request $request){
        try{
            $user = auth()->user();
            $body = $request->except('_token');

            $profiles = $user->domain()->create($body);

            return redirect()->route('domain')->with(['success'=>'Domain  Created Successfully']);
        }
        catch (\Exception $e) {
            return redirect()->route('domain')->with(['error'=>$e->getMessage()]);

        }
    }
}
