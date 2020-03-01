<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Admin;

class AdminController extends Controller
{
    
    public function login(Request $request) {
        
        // return dd($request->all());
        // $login = $req->only('username', 'password');
        
        
        $login = Auth::attempt([
            'username' => $request->input('username'),
            'password' => $request->input('password')
        ]);

        return redirect('login');
    }

    public function logout() {
        Auth::logout();
        return redirect('login');
    }

    
}
