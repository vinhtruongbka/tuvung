 <div class="side"><!--Start bside 1-->
    <h2 style="background-color: #2F4F4F;color: #fff">QUẢN LÝ TRANG CÁ NHÂN</h2>
    <ul class="ul_side">
        @if (Auth::check())
            <li>
                <a href='{{ route('home.getMoney')}}'>Quản trị</a>
            </li>
            <li>
                <a href='{{ route('postLogout')}}'>Đăng xuất</a>
            </li>
        @else
            <li>
                <a href='{{ route('home.getRegisration')}}'>Đăng ký</a>
            </li>
            <li>
                <a href='{{ route('getLogin')}}'>Đăng nhập</a>
            </li>
        @endif 
        <li>
              <a href='{{ route('getRecharge')}}'>Nạp tiền</a>
        </li>
    </ul>
</div>

@foreach ($sidebars as $sidebar)
    <div class="side"><!--Start bside 1-->
    <h2 style="text-transform: uppercase;background-color: #2F4F4F;color: #fff">{{$sidebar->title}}</h2>
    <ul class="ul_side">
        @foreach ($categorys_2 as $category_2)
            @if ($category_2->idSidebar == $sidebar->id)
                <li><a style="color:#FF4500;" href='{{ route('home.detail',$category_2->slug) }}'>{{$category_2->title}}</a></li>
            @endif
        @endforeach
        @foreach ($categorys as $category)
            @if ($category->idSidebar == $sidebar->id)
                <li><a href='{{ route('home.Quesetion',$category->slug)}}'>{{$category->title}}</a></li>
            @endif
        @endforeach
    </ul>   
    </div> <!--end bside 1-->
@endforeach
@php
   $visit =countView();
@endphp
 <div class="sid"><!--Start bside 1-->
    <h2 style="background-color: #2F4F4F;color: #fff">ĐẾM SỐ NGƯỜI TRUY CẬP</h2>
          <ul class="ul_online">
          <li class=""><p> Đang truy cập: {{ $visit['countView'] }} </p></li>
          <li class=""><p>Đầu ngày tới giờ:  {{ $visit['countDay'] }} </p></li>
          <li class=""><p>Truy cập hôm qua:  {{ $visit['yesterday'] }} </p></li>
          <!--<li class="tatca"><p>Tổng số người dùng:7,899   </p></li>
          <li class="thangtruoc"><p>Trung bình:   </p></li>-->
    </ul>
</div>
<div class="side" style="margin-top: 15px;">
    <h2 style="background-color: #2F4F4F;color: #fff">THEO DÕI MẠNG XÃ HỘI</h2>
        <div class="fb-like" data-href="https://www.facebook.com/muasamthachthat/" data-width="40" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true" style="height: 80px"></div>

    </div>