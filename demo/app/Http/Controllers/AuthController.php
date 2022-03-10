<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function showForm()
    {
        $roles = Role::all();
        return view('auth.register',compact('roles'));
    }

    public function register(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        $user->roles()->sync($request->role);
        return redirect()->route('login');
    }


    public function showFormLogin()
    {
     return view('auth.login');
    }

    public function login(Request $request)
    {
//        $user = $request->only('email', 'password');
        return redirect()->route('users.index');
    }

}
