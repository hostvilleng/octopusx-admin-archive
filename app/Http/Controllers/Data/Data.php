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

    public function create(Request $request){
        try{
            $user = auth()->user();
            $body = $request->except('_token');

            $profiles = $user->data()->create($body);

            return redirect()->route('data')->with(['success'=>'Data Model  Created Successfully']);
        }
        catch (\Exception $e) {
            return redirect()->route('data')->with(['error'=>$e->getMessage()]);

        }
    }
}
