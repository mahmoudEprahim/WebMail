<?php

namespace App\Http\Controllers;
use DB;
use Redirect;
use App\Post;
use App\Message;
use session;
use Alert;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


        public function index () {
            $message = Post::where('user_id',auth()->user()->id)->paginate(3);

            //  $posts= DB::table('posts')->paginate(6);
            // $next = Post::orderBy('id', 'asc')->paginate(6) ;
            return view ('posts.index' , compact('message'));
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

        $this->validate(request (), [
            'to' => 'required',
            'Adderss' => 'somtimes',
            'message' => 'somtimes',
            'file' => 'image|mimes:jpeg,bmp,png|max:1999',

        ]);

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
