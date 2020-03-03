<?php

namespace App\Http\Controllers;
use DB;
use Mail;
use Redirect;
use App\Contact;
use Sessions;
use Alert;
use Illuminate\Http\Request;
use App\Mail\SendMail;
class PagesController extends Controller
{

    //page index
    public function index () {


        return view ('pages.index');
    }

    //page about
    public function about () {

        return view ('pages.about');
    }

//user profile
public function profile () {
    $user = auth()->user() ;
        $posts = $user->posts;

    return view ('pages.profile', compact('posts'));
}

    //page contact

    public function contact () {

        return view ('pages.contact');
    }


    //add new contact
    public function addcontact (request $request) {
        $this->validate(request (), [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

            $add = new Contact();
            $add->name=request('name');
            $add->email=request('email');
            $add->message=request('message');



            $add->save();
            $data = array(
                'name' => $request->name,
                'message' => $request->message,
                'email' => $request->email,


            );
            Mail::to($data['email'])->send(new SendMail($data));
            return redirect ('/contact')->with('success', 'تم الإرسال بنجاح!');


        }




}
