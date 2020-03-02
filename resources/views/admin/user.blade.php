@extends('layouts.admin')
@section('contect')




<div class="col-lg-8 col-md-12">
                    <div class="table-responsive">
                        <table class="table table-hover table-custom spacing5">
                            <thead>
                                <tr> 
                                    <th style="width: 20px;">#</th>
                                    <th>الاسم</th>
                                    <th style="width: 50px;">البريد الالكتروني</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                @foreach ($users as $users)
                                
                                <tr>
                                    <td>
                                        <span>{{$users->id}}</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avtar-pic w35 bg-red" data-toggle="tooltip" data-placement="top" title="Avatar Name"><span>عضو</span></div>
                                            <div class="ml-3">
                                            @if( Auth::user()->role=='admin')
                                                <a href="{{ '/user/' . $users->id . '/edit'}}" title="">{{$users->name}}</a>
                                                @endif
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{$users->email}}</td>
                                    @endforeach
                                    </tr>
                                    
                            </tbody>
                        </table>
                    </div>


@endsection