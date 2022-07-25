<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index()
    {
        $user_id = request()->session()->get('LoggedIn');
        if(!isset($user_id))
            return view('login');
        else{
            return redirect('/');
        }
    }
    public function store()
    {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $user = DB::table('users')->where('email',$attributes['email'])
                                ->where('password',$attributes['password'])
                                ->first();
        if (isset($user)) {
            request()->session()->put('LoggedIn', $user->id);
            return redirect('/');
        }
    }
}
