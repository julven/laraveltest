<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Admin;

class AdminController extends Controller
{
    
    public function login(Request $request) {

        $validate = $request->validate([
            'username' => 'required|min:5|max:25',
            'password' => 'required'
        ]);
        
        
        $login = Auth::attempt([
            'username' => $request->input('username'),
            'password' => $request->input('password')
        ]);

        if(!$login) return back()->withInput()->withErrors(['msg'=> "wrong username or password"]);

        else return redirect('home');
    }

    public function logout() {
        Auth::logout();
        return redirect('login');
    }

    

    
}
