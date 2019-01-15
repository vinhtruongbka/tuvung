@foreach ($sidebars as $sidebar)
    <div class="side"><!--Start bside 1-->
    <h2 style="text-transform: uppercase;">{{$sidebar->Title}}</h2>
    <ul class="ul_side">
        @foreach ($categorys_2 as $category_2)
            @if ($category_2->SidebarID == $sidebar->id)
                <li><a style="color:#FF4500;" href='{{ route('home.detail',$category_2->Slug) }}'>{{$category_2->Title}}</a></li>
            @endif
        @endforeach
        @foreach ($categorys as $category)
            @if ($category->SidebarID == $sidebar->id)
                <li><a href='{{ route('home.Quesetion',$category->Slug)}}' style="text-transform:un">{{$category->Title}}</a></li>
            @endif
        @endforeach
    </ul>   
    </div> <!--end bside 1-->
@endforeach
    <div class="sid"><!--Start bside 1-->
        <h2>ĐẾM SỐ NGƯỜI TRUY CẬP</h2>
        <ul class="ul_online">
          <li class="online"><p> Đang truy cập:  88 </p></li>
          <li class="tuantruoc"><p>Đầu ngày tới giờ:  673 </p></li>
          <li class="tuannay"><p>Truy cập hôm qua:  1,700 </p></li>
          <!--<li class="tatca"><p>Tổng số người dùng:919   </p></li>
              <li class="thangtruoc"><p>Trung bình:   </p></li>-->
          </ul>
  </div> 