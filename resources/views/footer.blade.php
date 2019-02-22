<style type="text/css">
	.mynav{
		margin-bottom: 15px;
	}
	.mynav li{
		padding-left: 10px !important;
	}
	.mynav li a{
		color: #fff !important;
		padding: 0px !important;
	}
	.mynav li a:hover{
		background-color: #2F4F4F !important;
	}
</style>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding">
	<ul class="nav nav-pills mynav">
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
	{!! $address->content !!}

 </div>
