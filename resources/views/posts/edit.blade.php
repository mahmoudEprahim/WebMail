

@extends('layouts.master')

@section('contect')



@section('title')
تعديل المنشور
@stop



@section('contect')

 <div class="row">
     <div class="col-md-9 offset-md-2">
         <h3>مشاركة موضوع جديد</h3>
         <hr>
         <form action="{{ '/posts/' . $post->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">العنوان</label>
                <input type="text" name="title" id="title" class="form-control" value="{{$post->title}}">
               
            </div>
   
            <div class="form-group">
               <label for="body">الموضوع</label>
               <textarea name="body" id="body" cols="30" rows="4" class="form-control">{{$post->body}}</textarea>
           </div>

           
            <div class="form-group">
               <button type="submit" class="btn btn-primary">تعديل</button>
           </div>
         </form>

       
        
       
     </div>
 </div>


 @endsection
