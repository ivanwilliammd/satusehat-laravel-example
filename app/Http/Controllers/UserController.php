<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        if(Auth::id() == 1){
            $users = User::paginate();
        }
        else{
            $users = User::where('id', Auth::id())->paginate();
        }

        return view('users', compact('users'));
    }


    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->nik = $request->nik;
        $user->save();

        return redirect()->back()->with('success', 'Created New User.');
    }
}
