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
    public function create(Request $request){
        try{
            $user = auth()->user();
            $body = $request->except('_token');

            $access_services = $user->access()->create($body);

            return redirect()->route('access')->with(['success'=>'Access  Created Successfully']);
        }
        catch (\Exception $e) {
            return redirect()->route('access')->with(['error'=>$e->getMessage()]);

        }
    }
}
