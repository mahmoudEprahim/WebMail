


 <!-- Start: Navigation with Button -->
 <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
        <div class="container"><a class="navbar-brand" href="{{url('/')}}">WebMail </a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{url('/')}}"><i class="fa fa-home"></i> </a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{url('/about')}}"> عن البريد الالكتروني</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{url('/posts')}}"> البريد الالكتروني</a></li>

                        <div class="dropdown-menu" role="menu">

						<a class="dropdown-item" role="presentation" href=""></a>


						</div>
                    </li>



					<li class="nav-item" role="presentation"><a class="nav-link" href="{{url('/contact')}}">اتصل بنا</a></li>
                    @guest
                </ul><span class="navbar-text actions"> <a class="btn btn-light action-button" role="button" href="{{url('/login')}}">دخول</a>
                @if (Route::has('register'))
                 <a class="btn btn-light action-button" role="button" href="{{url('/register')}}">تسجيل</a></span></div>
                 @endif
                 @else
                 <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"> {{ Auth::user()->name }} </a>
                        <div class="dropdown-menu" role="menu">

                        @if( Auth::user()->role=='admin')
                        <!-- <a class="dropdown-item" role="presentation" href="/profile">موضوعاتي</a> -->
						<a class="dropdown-item" role="presentation" href="{{url('/admin')}}">لوحة التحكم</a>
                        @endif
                        @if( Auth::user()->role=='edit' or Auth::user()->role=='admin')
                        <a class="dropdown-item" role="presentation" href="{{url('/create')}}">اضافة منشور</a>

                        @endif
						<a class="dropdown-item" role="presentation" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">خروج</a>

						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
						</div>
        </div>
        @endguest
    </nav>
    <!-- End: Navigation with Button -->
