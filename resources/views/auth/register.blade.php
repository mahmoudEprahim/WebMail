@extends('layouts.master')

@section('contect')



@section('title')
مشترك جديد
@stop
<!-- Start: Highlight Blue -->
<div class="highlight-blue">
        <div class="container">
            <!-- Start: Intro -->
            <div class="intro">
                <h2 class="text-center">انشاء حساب جديد</h2>
                <p class="text-center">يمكنك الانضمام الينا وانشاء حساب خاص بك على موقعنا. </p>
            </div>
            <!-- End: Intro -->

        </div>
    </div>
    <!-- End: Highlight Blue -->
    <!-- Start: Registration Form with Photo -->
    <div class="register-photo">
        <!-- Start: Form Container -->
        <div class="form-container">
            <!-- Start: Image -->
            <!-- End: Image -->
            <form method="POST" action="{{ route('register') }}">
                        @csrf
                <h2 class="text-center"><strong>انشاء</strong> حساب.</h2>
                <div class="form-group"><input class="form-control" type="text" name="name" placeholder="اسم المستخدم" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
                <div class="form-group"><input class="form-control" type="email" name="email" placeholder="البريد الالكترونى" value="{{ old('email') }}" required autocomplete="email">
            
                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
                <div class="form-group"><input class="form-control" type="password" name="password" placeholder="كلمة المرور" required autocomplete="new-password">
            
                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
                <div class="form-group"><input class="form-control" type="password" name="password_confirmation" placeholder="تاكيد كلمة المرور" required autocomplete="new-password">
            
            
            </div>
                <div class="form-group">
                    <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox">اوافق على الشروط والبنود لدى الموقع.</label></div>
                </div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit">تسجيل</button></div><a class="already" href="/login">لديك بالفعل حساب؟  تسجيل الدخول</a></form>
        </div>
        <!-- End: Form Container -->
    </div>

    @endsection
       