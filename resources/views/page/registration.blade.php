@extends('master')
@section('content')
<div class="row ali">
   <div class="col-xs-12 col-md-9">
      <div id="content"><!--start content -->
    <div class="account_itf">
     <div class="title_itf">ĐĂNG KÝ TÀI KHOẢN</div>
            <form class="form-horizontal padding_20" action="{{ route('postRegistration') }}" accept-charset="utf-8" enctype="multipart/form-data" method="post" id="form">
            <div class="form-group padding_20">
              <label for="inputEmail3" class="col-sm-4 control-label">Họ Tên:</label>
              <div class="col-sm-8">
              <input type="text" class="textbox_rg" name="rg_name" value="" required="" pattern=".{4,40}" maxlength="40" placeholder="Họ và tên" x-moz-errormessage="Nhập đầy đủ họ tên">
            </div>
            </div>
            <div class="form-group padding_20">
              <label for="inputEmail3" class="col-sm-4 control-label">Email:</label>
              <div class="col-sm-8">
              <input type="email" class="textbox_rg" name="rg_email" value="" id="email" maxlength="50" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="Địa chỉ email" x-moz-errormessage="Nhập email">              </div>
            </div>
            <div class="form-group padding_20">
              <label for="inputEmail3" class="col-sm-4 control-label">Xác nhận lại email:</label>
              <div class="col-sm-8">
              <input type="email" class="textbox_rg" name="confirm_email" value="" id="confirm_email" maxlength="50" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="Nhập lại địa chỉ email">              </div>
            </div>
            <div class="form-group padding_20">
              <label for="inputEmail3" class="col-sm-4 control-label">Mật khẩu:</label>
              <div class="col-sm-8">
              <input type="password" class="textbox_rg" name="rg_password" value="" placeholder="Mật khẩu" id="password" required="" pattern="[0-9A-Za-z]{4,20}" maxlength="40" x-moz-errormessage="Nhập mật khẩu {từ 4 đến 20 ký tự} và không chứa ký tự đặt biệt">              </div>
            </div>
            <div class="form-group padding_20">
              <label for="inputEmail3" class="col-sm-4 control-label">Xác nhận mật khẩu:</label>
              <div class="col-sm-8">
              <input type="password" class="textbox_rg" name="confirm_password" value="" placeholder="Nhập lại mật khẩu" required="" pattern="[0-9A-Za-z]{4,20}" maxlength="40" id="confirm_password">              </div>
            </div>
            <div class="form-group padding_20">
              <label for="inputEmail3" class="col-sm-4 control-label">Giới tính:</label>
              <select name="rg_sex_select" id="sex_select" required="" x-moz-errormessage="Xác nhận giới tính">
                  <option value="d" disabled="disabled" selected="selected">Giới tính:</option>
                  <option value="1">Nữ</option>
                  <option value="2">Nam</option>
                  </select>              <div class="col-sm-8">
              </div>
            </div>
            <div class="form-group padding_20">
              <label for="inputEmail3" class="col-sm-4 control-label">Ngày tháng năm sinh:</label>
              <div class="col-sm-8">
                <select name="rg_day_select" required="" x-moz-errormessage="Nhập ngày sinh"><option value="a" disabled="disabled" selected="selected">Ngày:</option>
                    @for ($i = 1; $i <32 ; $i++)
                      <option value="{{ $i}}">{{ $i}}</option>
                    @endfor
                  </select>
                  <?php
                    $rg_month_select = array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec' );
                  ?>
                <select name="rg_month_select" required="" x-moz-errormessage="Nhập tháng sinh">
                  <option value="b" disabled="disabled" selected="selected">Tháng:</option>
                    @foreach ($rg_month_select as $key=>$rg_month_selec)
                      <option value="{{$key}}">{{$rg_month_selec}}</option>
                    @endforeach
                </select>    
                <select name="rg_year_select" required="" x-moz-errormessage="Nhập năm sinh"><option value="c" disabled="disabled" selected="selected">Năm:</option>
                    @for ($i = 2019; $i >= 1950 ; $i--)
                      <option value="{{ $i}}">{{ $i}}</option>
                    @endfor
                  </select>
                </div>
            </div>
            <div class="form-group">
            <label for="inputPassword3" class="col-sm-4 control-label"></label>
              <div class="col-sm-8">
              <input class="check_rgt" checked="checked" type="checkbox" name="checkbox_yes" value="" required="" x-moz-errormessage="Bạn phải đồng ý điều khoản">
              <p class="texk_check_rgt">Tôi chấp nhận điều khoản !</p>            </div>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
          <div class="form-group">
            <div class="col-sm-offset-4 col-sm-8">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <button type="submit" class="btn btn-success" value="Gửi">Đăng Ký</button>
          </div>
          </div>
          <div class="clause">
            <p class="warning_title"> Điều khoản khi sử dụng:</p>
            <p class="warning_content">1) Không bình luận vấn đề liên quan đến quốc gia như chính trị, văn hóa, quân sự...</p>
            <p class="warning_content">2) Không đặt link đến các website đồi trụy, văn hóa phẩm độc hại, quảng cáo... </p>
            <p class="warning_content">3) Không văng tục chửi bậy, bình luận thiếu văn hóa và ảnh hưởng đến website...</p>
            <p class="warning_content">Nếu vi phạm người dùng sẽ bị khóa bình luận hoặc khóa tài khoản vĩnh viễn (không thông báo khi khóa, không đền bù hay hoàn trả), nếu người dùng bình luận liên quan đến những vấn đề luật pháp thì người dùng tự chịu hoàn toàn trách nhiệm trước pháp luật.</p>
            <p class="warning_title"> Lưu ý:</p> 
            <p class="warning_content">khi các bạn đăng ký tài khoản trong website tuvungtienghan.com thì phải sử dụng tài khoản gmail hoặc yahoo mail mà các bạn đang sử dụng, khi đó hệ thống mới gửi link kích hoạt tài khoản vào gmail hoặc yahoo mail của các bạn được</p>
          </div>
        </form>
    </div>
    </div>    
  </div>
<div class="col-xs-12 col-md-3">
   <div id="aside"><!--Start bside-->
     @include('page.sidebar')
  </div> 
</div>
@endsection
