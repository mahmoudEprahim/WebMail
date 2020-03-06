<?php

namespace App\Http\Controllers;
use DB;
use Mail;
use Redirect;
use App\Contact;
use App\Message;
use App\Post;
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

        $data = $this->validate(request (), [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',

        ],[]);

            $add = new Post();
            $add->title=request('name');
            $add->body=request('message');
            $add->from=auth()->user()->email;
            $add->to=request('email');
            $add->user_id=auth()->user()->id;


            // return $this->from(auth()->user()->email)
            // ->subject('New_Email')
            // ->View('pages.MailContent')
            // ->with('data',$this->data);
            $add->save();
            $data = array(
                'name' => $request->name,
                'message' => $request->message,
                'email' => $request->email,
                'from' =>auth()->user()->email,




            );
            Mail::to($data['email'])->send(new SendMail($data));
            return redirect ('/contact')->with('success', 'تم الإرسال بنجاح!');


        }




}
