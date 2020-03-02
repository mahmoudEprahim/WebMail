@extends('layouts.admin')
@section('contect')

<div class="col-lg-8 col-md-12">
                    <div class="table-responsive">
                        <table class="table table-hover table-custom spacing5">
                        @include('include.message')  
                        </tr>
                            <thead>
                                <tr> 
                                    <th style="width: 20px;">#</th>
                                    <th>اسم القسم</th>
                                   
                                    <th style="width: 50px;">الحالة</th>
                                    <th style="width: 110px;">إجراءات</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr>
                        @foreach ($sections as $sections)
                                <tr>
                                    <td>
                                        <span>{{$sections->id}}</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avtar-pic w35 bg-red" data-toggle="tooltip" data-placement="top" title="Avatar Name"><span>قسم</span></div>
                                            <div class="ml-3">
                                                
                                                <p class="mb-0">{{$sections->name}}</p>
                                            </div>
                                        </div>
                                    </td>
                                    
                                    <td><span class="badge badge-success ml-0 mr-0">مفعل</span></td>
                                    <td>
                                    <a href="section/edit">
                                        <button type="button" class="btn btn-sm btn-default" title="تعديل" data-toggle="tooltip" data-placement="top"><i class="icon-envelope"></i></button></a>
                                        <button type="button" class="btn btn-sm btn-default " title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                                       
                                        <button type="submit" class="btn btn-sm btn-default" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash"></i></button>
                                        
                                    </td>
                                    
                                </tr>
                                @endforeach
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>




<div class="row clearfix">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>إضافة قسم جديد</h2>
                        </div>
                        <div class="body">
                            <form id="basic-form" method="POST" action="{{ route('addsection') }}">

@csrf
                                <div class="form-group">
                                    <label>اسم القسم</label>
                                    <input type="text" class="form-control" required name="name">
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary">إضافة</button>
                            </form>
                        </div>
                    </div>

                    

@endsection







