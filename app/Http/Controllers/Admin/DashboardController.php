<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    
    public function registered()
    {
        $users = User::all();
        return view('admin.register')->with('users',$users);
    }

    public function registeredit(Request $request,$id)
    {
       $users=User::findorfail($id);
       return view('admin.register-edit')->with('users',$users);
    }

    public function nonAdmin(Request $request,$id)
    {
        $users = User::all();
        return view('admin.register')->with('users',$users);
    }



    public function registerupdate(Request $request,$id)
    {
       $users=User::find($id);
       $users->name=$request->input('username');
       $users->approval=$request->input('approval');
       $users->update();

       return redirect('/role-register')->with('Updated');
    }

    //
}
