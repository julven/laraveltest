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
        
        $validate = $this->validation($request, 'add');
      
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

    public function update(Request $request, $id) {
        $validate = $this->validation($request, 'edit');

    
        $user = User::find($id);
        $user->fname = $request->input('fname');
        $user->lname = $request->input('lname');
        $user->gender = $request->input('gender');
        $user->bday = $request->input('bday');
        if($request->image != null ) {
            if(file_exists(public_path().$user->image)) unlink(public_path().$user->image);
            $image = $request->file('image');
            $image->move(public_path('images'), $image->getClientOriginalName());
            $user->image = '/images/'.$image->getClientOriginalName();
        }
        $user->save();

        return redirect()->back()->with(['success' => 'User successfully updated!']);
        

    }

    public function destroy(Request $request) {
        // return dd($request->id);
        $user = User::findOrFail($request->id);
        if(file_exists(public_path().$user->image)) unlink(public_path().$user->image);
        $user->delete();
        
        return back();
    }

    public function home() {
        $data['total'] = User::all()->count();
        $data['male'] = User::where('gender','male')->count();
        $data['female'] = User::where('gender','female')->count();

        // return dd($data);
        return view('components.home')->with(['data' => $data]);
    }
    

    public function list() {
        return view('components.list')->with(['users' => User::paginate(5)]);
        
    }
    public function pagedlist($page) {
        if(!is_numeric($page)) return redirect('list');
        // return dd( User::paginate(5));
        return view('components.list')->with(['users' => User::paginate(5)]);
        
    }

    public function account() {
        return view('components.account');
    }

    public function useradd() {
        // return dd(url()->previous());
        return view('components.user_form')->with(['type' => 'add']);
    }
    public function useredit($id) {
        // return $id;
        $user = User::find($id);

        if(!$user) return redirect()->back();
        return view('components.user_form')->with(['type' => 'edit', 'user' => $user]);
    }

    private function validation ($request, $type) {
        $fields = [
            'fname' => 'required|max:50',
            'lname' => 'required|max:50',
            'gender' => 'required|max:50',
            'bday' => 'required|max:50',
        ];

        if($type == 'add') $fields['image'] = 'mimes:jpeg,jpg,png|required|max:10000';

        // return dd($fields);

        $validate = $request->validate($fields);

        if(!$validate) return back()->withInput($request);
        
    }
}
