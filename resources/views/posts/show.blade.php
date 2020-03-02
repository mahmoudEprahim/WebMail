@extends('layouts.master')

@section('contect')



@section('title')
المدونة
@stop
@section('contect')
                    

                     
                     <div class="highlight-blue">
        <div class="container">
            <!-- Start: Intro -->
            
            <div class="intro">
            
                <h1 class="text-center"> {{$post->title}}</h1>
                <p class="text-center">القسم:{{$post->section}}</p>
                <p class="text-center">بواسطة: {{$post->user->name}}</p>
                <p class="text-center">{{$post->created_at}}</p>
            </div>
            
            <!-- End: Intro -->
        </div>
       
    </div>
    <br>
    <h1 class="text-center">  <div class="col-sm-6 col-lg-9 item"><img class="img-fluid" src="{{asset('storage/blogImage/' . $post->image)}}"> </h1>
    <div class="testimonials-clean">
        <div class="container">
            <!-- Start: Intro -->
            
            <!-- End: Intro -->
            <div class="row people">
                <div class="col-md-50 col-lg-50 item">
                    <div class="box">
                        <p class="text">{{$post->body}}</p>
                    </div>
                    
            
                </div>
                <div>
               
                @if( Auth::user()->role=='edit' or Auth::user()->role=='admin')
                   
                    <a href="{{ '/posts/' . $post->id . '/edit'}}" class="btn btn-primary float-left mr-2"> تعديل</a>
                
                    <form action="{{route('posts.destroy', ['id' => $post->id])}}" method="POST">
                    
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger float-left"> حزف</button>

                    </form>
                @endif
            

              
                </div>
                </div>
                </div>
                     @endsection     
                     