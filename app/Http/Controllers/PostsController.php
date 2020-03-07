<?php

namespace App\Http\Controllers;
use DB;
use Redirect;
use App\Post;
use App\Message;
use session;
use Alert;
use Mail;
use App\Mail\SendMail;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


        public function index () {
            $outBox = Post::where('from',auth()->user()->email)->paginate(3);
            $inbox = Post::where('to',auth()->user()->email)->paginate(3);

            //  $posts= DB::table('posts')->paginate(6);
            // $next = Post::orderBy('id', 'asc')->paginate(6) ;
            return view ('posts.index' , compact('outBox','inbox'));
        }

    public function create () {
        $sections= DB::table('sections')->get();
        return view ('posts.create', compact('sections'));
    }

    //show psot
    public function show($id) {

        $post = Post::find($id);
        return view('posts.show', compact('post'));
    }

    //edit post
    public function edit ($id) {
        $post = Post::find($id);

        return view('posts.edit', compact('post'));

    }



    public function add (request $request) {

        $this->validate($request, [
            'to' => 'sometimes',
            'Adderss' => 'sometimes',
            'message' => 'sometimes',


        ],[]);

        if ($request->hasFile('blogImage')) {
            $file = $request->file('blogImage') ;
            $ext = $file->getClientOriginalExtension() ;
            $filename = 'blog_image' . '_' . time() . '.' . $ext ;
            $file->storeAs('public/blogImage', $filename);

        } else {

            $filename = 'noimage.png';
        }

        $add = new Post();
        $add->title=request('Adderss');

        $add->body=request('message');
        $add->from=auth()->user()->email;
        $add->to=request('to');
        $add->image=$filename;
        $add->user_id = auth()->user()->id;




        $add->save();
        $data = array(
            'name' => request('Adderss'),
            'message' => request('message'),
            'email' => request('to'),
            'from' =>auth()->user()->email,




        );
            Mail::to($data['email'])->send(new SendMail($data));
        return redirect ('/posts')->with('success', 'تم النشر!');


    }
    public function reply () {
        $post = Post::find($id);

        return view('posts.edit', compact('post'));

    }
    public function update(Request $request, $id) {

        $request->validate([

            'title' =>  'required|max:200',
            'body' => 'required|min:100',
        ]);

        $post = Post::find($id) ;
        $post->title = $request->title;
        $post->body = $request->body;

        $post->save();

        return redirect('/posts')->with('success', 'تم التعديل بنجاح!');

    }
    //delete
    public function destroy($id) {

        $post = POST::find($id) ;

        $post->delete();

        return redirect('/posts')->with('success', 'تم حذف المنشور بنجاح!');

    }

}
