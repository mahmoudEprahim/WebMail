

@extends('layouts.master')

@section('title')
تسجيل الدخول
@stop

@section('contect')
<!-- Start: Highlight Blue -->
<div class="highlight-blue">
        <div class="container">
            <!-- Start: Intro -->
            <div class="intro">
                <h2 class="text-center">تسجيل الدخول</h2>
                <p class="text-center">يمكنك تسجيل الدخول الى حسابك من هنا </p>
            </div>
            <!-- End: Intro -->
        </div>
    </div>
    <!-- End: Highlight Blue -->
    <!-- Start: Login Form Clean -->
    
    <div class="login-clean">
        <form method="POST" action="{{ route('login') }}">
        @csrf
            
            <div class="illustration"><i class="fa fa-user-circle-o"></i></div>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="البريد الالكترونى" value="{{ old('email') }}" >
           
        </div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="كلمة المرور"  autocomplete="current-password">
        
            
        </div>

        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('تذكير كلمة المرور') }}
                                    </label>
                                </div>
                            </div>
                        </div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">تسجيل الدخول</button></div>@if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('نسيت كلمة المرور؟') }}
                                    </a>
                                @endif</form>
    </div>
    
    <!-- End: Login Form Clean -->


@endsection



