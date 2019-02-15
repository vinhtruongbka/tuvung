@extends('master')
@section('content')
<div class="row ali">
   <div class="col-xs-12 col-md-9">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding">
         <div id="content"><!--start content -->
           <div class="account_itf">      
             <div class="title_itf">BẢNG PHÍ ĐĂNG KÝ SỬ DỤNG</div>     
             <table class="viewtable">
               <thead>
                 <tr>             
                    <th>TÊN GÓI ĐĂNG KÝ</th>
                    <th>THỜI GIAN</th>
                    <th>GIÁ TIỀN</th>
                    <th>ĐĂNG KÝ</th>
                </tr>
            </thead>
            <tbody>
              <tr>
                 <td><img class="img_file" src="https://tuvungtienghan.com/static/images/time.png" alt="" height="20px" width="22px"><p class="name_file">Truy cập 365 ngày</p></td>
                 <td>8760 Giờ</td>
                 <td>{{number_format(365*2000)}} VNĐ</td>
                 <td><a class="add_signup" href="{{ route('getExtension','365') }}">đăng ký</a></td>                      
             </tr><tr>
                 <td><img class="img_file" src="https://tuvungtienghan.com/static/images/time.png" alt="" height="20px" width="22px"><p class="name_file">Truy cập 180 ngày</p></td>
                 <td>4320 Giờ</td>
                 <td>{{number_format(180*2000)}} VNĐ</td>
                 <td><a class="add_signup" href="{{ route('getExtension','180') }}">đăng ký</a></td>                      
             </tr><tr>
                 <td><img class="img_file" src="https://tuvungtienghan.com/static/images/time.png" alt="" height="20px" width="22px"><p class="name_file">Truy cập 90 ngày</p></td>
                 <td>2160 Giờ</td>
                 <td>{{number_format(90*2000)}} VNĐ</td>
                 <td><a class="add_signup" href="{{ route('getExtension','90') }}">đăng ký</a></td>                      
             </tr><tr>
                 <td><img class="img_file" src="https://tuvungtienghan.com/static/images/time.png" alt="" height="20px" width="22px"><p class="name_file">Truy cập 30 ngày</p></td>
                 <td>720 Giờ</td>
                 <td>{{number_format(30*2000)}} VNĐ</td>
                 <td><a class="add_signup" href="{{ route('getExtension','30') }}">đăng ký</a></td>                      
             </tr><tr>
                 <td><img class="img_file" src="https://tuvungtienghan.com/static/images/time.png" alt="" height="20px" width="22px"><p class="name_file">Truy cập 10 ngày</p></td>
                 <td>240 Giờ</td>
                 <td>{{number_format(10*2000)}} VNĐ</td>
                 <td><a class="add_signup" href="{{ route('getExtension','10') }}">đăng ký</a></td>                      
             </tr><tr>
                 <td><img class="img_file" src="https://tuvungtienghan.com/static/images/time.png" alt="" height="20px" width="22px"><p class="name_file">Truy cập 1 ngày</p></td>
                 <td>24 Giờ</td>
                 <td>{{number_format(1*2000)}} VNĐ</td>
                 <td><a class="add_signup" href="{{ route('getExtension','1') }}">đăng ký</a></td>                      
             </tr>        
         </tbody>
     </table>
     <div class="message_center"> <p class="warningr message_center">Vui lòng click chuột vào "Đăng ký" ở trên để truy cập những phần còn lại !</p></div>

     <div class="clear_center"></div>
     <div class="title_itf">THÔNG TIN NGƯỜI DÙNG</div>  
     <table class="register">

      <tbody><tr>
        <td><label for="seri" style="color:red;">Mã số giao dịch:</label></td>
        <td class="rg_font" style="color:red;"> 1653947</td>
        <td></td>
    </tr>
    <tr>
        <td><label for="seri">Họ và tên người dùng: </label></td>
        <td class="rg_font"> {{Auth::user()->name}}</td>
        <td></td>
    </tr>
    <tr>
        <td><label for="seri">Email người dùng:</label></td>
        <td class="rg_font"> {{Auth::user()->email}}</td>
        <td></td>
    </tr>
    <tr>
        <td><label for="seri">Tổng Tiền còn dư:</label></td>
        <td class="rg_font">{{number_format(Auth::user()->money)}} VNĐ</td> 
        <td></td>
    </tr>
    <tr>
        <td><label for="seri">Kết Thúc gói đăng ký:</label></td>
        <td class="rg_font">
            @if (Auth::user()->endDate!= null )
                {{date('d-m-Y', strtotime(Auth::user()->endDate))}}
            @else
                chưa gia hạn nên chưa có thống kê
            @endif
        </td>
        <td></td>
    </tr>
</tbody></table>
<p class="title_itf">HƯỚNG DẪN CHUYỂN KHOẢN VÀ ĐĂNG KÝ HỌC</p>
<br>
<video width="100%" height="100%" controls="">
  <source src="http://tuvungtienghan.com/static/videos/chuyenkhoankhoahocsua.mp4" type="video/mp4">
  </video>
  <br>
</div>

</div><!--and content -->
</div>
</div>
<div class="col-xs-12 col-md-3">
   <div id="aside"><!--Start bside-->
     @include('page.sidebar')
 </div> 
</div>
@endsection
