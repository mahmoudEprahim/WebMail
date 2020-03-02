

 @extends('layouts.admin')
@section('contect')


<div class="auth-main particles_js">
    <div class="auth_div vivify popIn">
        
        <div class="card">
            <div class="body">
                <p class="lead">تعديل بيانات المستخدم</p>
                <form class="form-auth-small m-t-20"  action="{{ '/user/' . $users->id}}" method="POST">
            @csrf
            @method('PUT')
                <div class="form-group">
                        <label for="signin-email" class="control-label sr-only">الاسم</label>
                        <input type="name" class="form-control round" id="signin-email" value="{{$users->name}}" name="name">
                    </div>
                    <div class="form-group">
                        <label for="signin-email" class="control-label sr-only">البريد الالكتروني</label>
                        <input type="email" class="form-control round" id="signin-email"  value="{{$users->email}}" name="email" >
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline1" name="role" value="user" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline1">مستخدم</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline2" name="role" value="edit" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline2">محرر</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline3" name="role" value="admin" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline3">مدير</label>
</div>

                    
                    
                    <button type="submit" class="btn btn-primary btn-round btn-block">إضافة</button>
                    
                </form>
            </div>
        </div>
    </div>

@endsection