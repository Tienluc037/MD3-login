<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.list',compact('users'));
    }

    public function showFormCreate()
    {
        $roles = Role::all();
        return view('user.create',compact('roles'));    }

    public function create(Request $request)
    {
        $user = new User();
       $user->name = $request->name;
       $user->email = $request->email;
       $user->password = Hash::make($request->password);
       $user->save();


       $user->roles()->sync($request->role);
        return redirect()->route('users.index');
    }
}
