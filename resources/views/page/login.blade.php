@extends('master')
@section('content')
<div class="row ali">
   <div class="col-xs-12 col-md-9">
      <div id="content"><!--start content -->
    <div class="account_itf">
     <div class="title_itf">ĐĂNG NHẬP TÀI KHOẢN</div>
      @if(Session::has('flag'))
            <p class="warningr">{{Session::get('message')}}</p>
      @endif
           <form class="form-horizontal" method="post" action="{{ route('login') }}" id="form">
            <div class="form-group padding_20">
              <label for="inputEmail3" class="col-sm-4 control-label">Email:</label>
              <div class="col-sm-8"><input type="email" width="280" id="lg_email" name="email" value="" maxlength="50" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="Địa chỉ email" x-moz-errormessage="Nhập email">              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-4 control-label">Mật khẩu:</label>
              <div class="col-sm-8"><input type="password" id="lg_pass" name="password" value="" placeholder="Mật khẩu" required="" pattern="[0-9A-Za-z]{4,20}" maxlength="40" x-moz-errormessage="Nhập mật khẩu {từ 4 đến 20 ký tự} và không chứa ký tự đặt biệt">              </div>
              </div>
            <div class="form-group">
              <div class="col-sm-12 login_rgt">
              <a href="{{ route('home.getRegisration')}}">Đăng ký tài khoản</a>
                —
               <a href="javascrip:">Lấy lại mật khẩu ?</a>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-4 col-sm-8">
                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                  <button type="submit" class="btn btn-success" value="Gửi">Đăng Nhập</button>
              </div>
            </div>
        </form>
            <div class="clause_acb">
            <p class="warning_title"> Chú ý:</p>
            <p class="warning_content">Một tài khoản chỉ được phép một người sử dụng.</p>
            <p class="warning_content">Tài khoản nhiều người sử dụng có thể bị khóa vĩnh viễn.</p>
            </div>
    </div>
    </div>
  </div>
<div class="col-xs-12 col-md-3">
   <div id="aside"><!--Start bside-->
     @include('page.sidebar')
  </div> 
</div>
@endsection
