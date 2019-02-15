@extends('master')
@section('content')
<div class="row ali">
 <div class="col-xs-12 col-md-9">
  <div id="content"><!--start content -->
    <div class="account_itf">      
     <div class="title_itf">THANH TOÁN PHÍ ĐĂNG KÝ GÓI DỊCH VỤ</div>
     <div class="message_rg"> </div>
     <table class="viewtable">
       <thead>
         <tr>             
          <th>TÊN GÓI ĐĂNG KÝ</th>
          <th>THỜI GIAN SỬ DỤNG</th>
          <th>GIÁ TIỀN</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><img class="img_file" src="https://tuvungtienghan.com/static/images/time.png" alt="" height="20px" width="22px"><p class="name_file">Truy cập {{$date}} ngày</p></td>
         <td>{{$date*24}} Giờ</td>
         <td>{{number_format($date*2000)}} VNĐ</td>                   
       </tr>        
     </tbody>
   </table>
  @if (Session::has('flag'))
     <p class="warningr">{{Session::get('errMoney')}}<a href="{{ route('getRecharge') }}"> Nạp tiền</a></p>
   @endif
   <form method="post" action="{{ route('postExtension') }}" id="form">
    <input type="text" name="money" hidden value="{{$date*2000}}">
    <input type="text" name="endDate" hidden value="{{$date}}">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="submit" value="THANH TOÁN" class="send_contacts">
  </form>
  <div class="clause">
    <p class="warning_title">GHI CHÚ:</p>
    <p class="warning_content">THANH TOÁN: khi bạn click chuột vào thanh toán hệ thống sẽ trừ số tiền tương ứng ở bảng trên và cung cấp cho bạn thời gian học tương ứng, khi đó bạn có thể truy cập những phần có tính phí của hệ thống. khi hết thời gian bạn phải gia hạn tiếp mới có thể truy cập tiếp được những phần có tính phí của hệ thống. </p>
    <p class="warning_content">Ví dụ: bạn thanh toán một ngày là 2,000vnđ thì hệ thống trừ của bạn là 2,000vnđ và cấp cho bạn 24 tiếng đồng hồ để bạn truy cập toàn bộ hệ thống, thời gian tính từ lúc bạn thanh toán. nếu hết 24 giờ bạn không gia hạn để học tiếp nữa thì số tiền còn lại của bạn sẽ được bảo lưu cho đến khi bạn sử dụng tiếp. hệ thống không tự động trừ tiền hàng ngày của tắt cả các thành vi </p>
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
