<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Admin;

class AdminController extends Controller
{   
    public function account () {
        return view('components.account')->with(['account' => Admin::find(Auth::user()->id)]);
    }

    public function update(Request $request) {
        // return dd($request->all());
        if($request->type == 'info') {
            $validate = $request->validate([
                'fname' => 'required|min:2|max:25',
                'lname' => 'required|min:2|max:25',
                'bday' => 'required',
                'gender' => 'required',
            ]);
    
            if(!$validate) return back()->with(['type'=> 'info']);
    
            Admin::find(Auth::user()->id)->update($request->all());
    
            return back()->with(['success' => 'Info update successfull', 'type' =>'info']);
        }
        else if($request->type == 'pass') {
            
            $validate = $request->validate([
                'password' => 'required|min:4|confirmed',
            ]);
            if(!$validate) return back()->with(['type'=> 'pass']);

            Admin::find(Auth::user()->id)->update(['password' => bcrypt($request->password)]);

            return back()->with(['success' => 'Pass update successfull', 'type' => 'pass']);
        }
       
    }
    
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
