<?php

namespace App\Http\Controllers;
use DB;
use Redirect;
use session;
use App\User;
use App\Post;
use App\Contact;
use App\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
   
    public function index () {
        $posts      = Post::count();
        $contact     = Contact::count();
        $users      = User::count();
       
        $contacts= DB::table('contacts')->get();
        
        return view ('admin.index', compact('contacts'), get_defined_vars());
    }
    public function user () {
        $contacts= DB::table('contacts')->get();
        $users= DB::table('users')->get();
        return view ('admin.user', compact('users', 'contacts'));
    }
    


    //edit profile
    public function edit ($id) {
        $contacts= DB::table('contacts')->get();
        $users = User::find($id);
        
        return view('admin.edit', compact('users', 'contacts'));
    }
    
    //update profile users
    public function update(Request $request, $id) {

        $request->validate([

            'name' =>  'required',
            'email' => 'required'
            
        ]);

        $user = User::find($id) ;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;

        $user->save();

        return redirect('/user')->with('success', 'تم التعديل بنجاح!');

    }
}
