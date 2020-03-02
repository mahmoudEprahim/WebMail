@if( Auth::user()->role=='edit' or Auth::user()->role=='admin')

@extends('layouts.master')

@section('contect')



@section('title')
منشور جديد
@stop



@section('contect')

 <div class="row">
     <div class="col-md-9 offset-md-2">
         <h3>مشاركة موضوع جديد</h3>
         <hr>
         <form method="POST" action="{{ route('add') }}" enctype="multipart/form-data">

            @csrf
            <div class="form-group">
                <label for="title">العنوان</label>
                <input type="text" name="title" id="title" class="form-control">
               
            </div>
   
            <div class="form-group">
               <label for="body">الموضوع</label>
               <textarea class="form-control" id="summary-ckeditor" name="body"></textarea>
           </div>
          
      
            <div class="form-group">
                <input type="file" name="blogImage" id="blogImage" class="form-control-file">
            </div>
            <div class="form-group col-md-4">
      <label for="inputState">القسم</label>
      
      <select id="section" name="section" class="form-control">
      @foreach ($sections as $sections)
        <option  name="section" value="{{$sections->name}}">{{$sections->name}}</option>
       
        @endforeach
      </select>
     
      </div>
            <div class="form-group">
               <button type="submit" class="btn btn-primary">مشاركة</button>
           </div>
         </form>

       
        
       
     </div>
 </div>
 <!-- <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'summary-ckeditor' );
</script> -->

 @endsection


@endif