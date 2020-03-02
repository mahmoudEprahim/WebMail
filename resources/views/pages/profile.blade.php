@extends('layouts.master')

@section('contect')



@section('title')
موضوعاتي
@stop
<!-- Start: Highlight Blue -->
<div class="highlight-blue">
        <div class="container">
            <!-- Start: Intro -->
            <div class="intro">
                <h2 class="text-center">موضوعاتي</h2>
               
            </div>
            <!-- End: Intro -->
 
        </div>
    </div>
    <table class="table">
                            <thead>
                              <tr>
                               
                                <th scope="col">العنوان</th>
                                <th scope="col">الاجراءات</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach($posts as $post)
                                     <tr>
                                        
                                        <td>{{$post->title}}</td>
                                     <td> <a href="{{'/posts/' . $post->id}}" class="btn btn-primary">عرض المزيد</a></td>
                                     </tr>
                                @endforeach
                       
                              
                            </tbody>
                          </table>
                </div>
            </div>
        </div>
    </div>
</div>
    
                                
    @endsection
       