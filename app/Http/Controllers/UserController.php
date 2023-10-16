<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

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
}
