<?php

namespace App\Http\Controllers;
use DB;
use Redirect;
use session;
use App\User;
use App\Post;
use App\Contact;
use App\Sections;
use App\Admin;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function section () {
        $contacts= DB::table('contacts')->get();
        $sections= DB::table('sections')->get();
        
        
        return view ('admin.section', compact('contacts' , 'sections'));
    }

    public function addsection (request $request) {
      
        $add = new Sections();
        $add->name=request('name');
        
        
    
    
        $add->save();
        return redirect ('/section')->with('success', 'تم إضافة قسم جديد!');
       
    
    }


   





}
