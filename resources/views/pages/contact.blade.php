@extends('layouts.master')

@section('contect')



@section('title')
إتصل بنا
@stop



@section('contect')
<div class="highlight-blue">
        <div class="container">
            <!-- Start: Intro -->
            <div class="intro">
                <h2 class="text-center">الاتصال بنا</h2>
                <p class="text-center">يمكنك الاتصال بنا عبر النموذج التالى اكتب ماتريد. </p>
            </div>
            <!-- End: Intro -->
        </div>
    </div>
    <!-- End: Highlight Blue -->
    <!-- Start: Contact Form Clean -->
    <div class="contact-clean">
        <form method="POST" action="{{ route('addcontact') }}">

@csrf
            <h2 class="text-center"></h2>
            <!-- Start: Success Example -->
            <div class="form-group"><input class="form-control" type="text" name="name" placeholder="الاسم كامل">
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
            <!-- End: Success Example -->
            <!-- Start: Error Example -->
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="البريد الالكترونى">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                <!-- End: The Error Message -->
            </div>
            <!-- End: Error Example -->
            <div class="form-group"><textarea class="form-control" name="message" placeholder="نص الرسالة" rows="14"></textarea>
                            @error('message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
            <div class="form-group"><button class="btn btn-primary" type="submit">ارسل </button></div>
        </form>
    </div>
    <!-- End: Contact Form Clean -->
	    <!-- Start: Features Boxed -->
    <div class="features-boxed">
        <div class="container">
            <!-- Start: Intro -->
            <div class="intro">
                <h2 class="text-center">الاتصال المباشر </h2>
            </div>
            <!-- End: Intro -->
            <!-- Start: Features -->
            <div class="row justify-content-center features">
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-phone icon"></i>
                        <h3 class="name">الجوال</h3>
                        <p class="description"> <h4> 0920390168 </h4> </p>
					</div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-envelope icon"></i>
                        <h3 class="name">البريد</h3>
                        <p class="description"> <h4> blog@text.com </h4> </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-whatsapp icon"></i>
                        <h3 class="name">واتس اب </h3>
                        <p class="description"> <h4> 0915380373 </h4> </p>
                    </div>
                </div>
            </div>
            <!-- End: Features -->
        </div>
    </div>
    @endsection
