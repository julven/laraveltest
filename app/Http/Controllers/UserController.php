<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    public function index() {
      
    }

    public function read($id) {

    }

    public function store(Request $request) {
        

        $validate = $request->validate([
            'fname' => 'required|max:50',
            'lname' => 'required|max:50',
            'gender' => 'required|max:50',
            'bday' => 'required|max:50',
            'image' => 'mimes:jpeg,jpg,png|required|max:10000'
        ]);
        if(!$validate) return back()->withInput($request);
        
        $image = $request->file('image');
        $image->move(public_path('images'), $image->getClientOriginalName());

        $user = new User();
        $user->fname = $request->input('fname');
        $user->lname = $request->input('lname');
        $user->gender = $request->input('gender');
        $user->bday = $request->input('bday');
        $user->image = $user->image = '/images/'.$image->getClientOriginalName();
        $user->save();

        return back()->with(['success' => 'User successfuly added!']);
    }

    public function update() {

    }

    public function destroy() {

    }

    public function home() {
        return view('components.home');
    }

    public function list() {
        return view('components.list');
    }

    public function account() {
        return view('components.account');
    }

    public function userform() {
        return view('components.user_form');
    }
}
