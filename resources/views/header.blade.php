<div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button> 
        <a class="navbar-brand" href="#">Dùng menu ấn 3 vạch trắng</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li>
                <a href='{{ route('home.index')}}'>trang chủ</a>
            </li>
            @foreach ($menus as $menu)
            <li>
                <a href='{{ route('home.Quesetion',$menu->slug)}}'>{{$menu->title}}</a>
            </li>
            @endforeach
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
        </ul>
    </div><!--/.nav-collapse -->
</div>