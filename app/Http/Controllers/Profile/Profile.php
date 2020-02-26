<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class Profile extends Controller
{
    public function index(){
        $profiles = \App\Models\Profile::all();
        return view('profile.index',compact('profiles'));
    }

    public function create(Request $request){
        try{
            $user = auth()->user();
            $body = $request->except('_token');

            $profiles = $user->profile()->create($body);

            return redirect()->route('profile')->with(['success'=>'Profile Detail Created Successfully']);
        }
        catch (\Exception $e) {
            return redirect()->route('profile')->with(['error'=>$e->getMessage()]);

        }
    }

    public function profileUsers(Request $request){
        $profile = \App\Models\Profile::findorFail($request->get('_id'));
        $profileUsers = $profile->profile_user()->get();
        return view('profile.profile_user',compact('profile','profileUsers'));
    }

    public function createUser(Request $request){
        try {
            $profile = \App\Models\Profile::find($request->_id);
            $body = $request->except('_token');
            $profileUsers = $profile->profile_user()->create($body);
            return redirect()->back()->with(['success'=>'User Detail Created Successfully']);
        }
        catch (\Exception $e){
            return redirect()->back()->with(['error'=>$e->getMessage()]);

        }
    }
}
