<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use function PHPUnit\Framework\returnValue;

class UserController extends Controller
{
    public function index()
    {
        return view('Admin.User.addUser');
    }

    public function create(Request $request)
    {
        $creditials = $request->validate([
              'name' => 'required',
              'email' => 'required|email',
              'password' => 'required|min:6',
              'confirm_password' => 'required|same:password|min:6'  
        ]);

        User::create([
            'name' =>  $request->name,
            'email' => $request->email,
            'password' =>Hash::make($request->confirm_password)
            
        ]);

        return to_route('list');
    }

    public function allUser()
    {
        $data = DB::table('users')->get();

        return view('Admin.User.listUser',compact('data'));
    }

    public function removeUser($id)
    {
        User::find($id)->delete();
        return to_route('list');
    }

    public function updateUser(Request $request,$id)
    {
     $user = User::find($id);
     $creditials = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:6',
        'confirm_password' => 'required|same:password|min:6'  
    ]);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);
        return
            to_route('list');
    }

    public function updatePage($id)
    {
        $data = User::find($id);    
        return
                view('Admin.User.updateUser',compact('data'));
    }
}