<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   <base href="{{asset('')}}">
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="public/text/bootstrap.min.css" >
    
    <!--Fontawesome CDN-->
	<link href="public/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="public/text/text.css">
</head>
<body background="public/admin/images/544750.jpg">
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Đăng nhập</h3>
			</div>
			<div class="card-body">
				<form method="post" action="{{ route('loginAdmin') }}" id="form">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Email" name="email">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-key" style="font-weight: bold;"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password" name="password">
					</div>
					@if(Session::has('flag'))
					<div class="input-group form-group justify-content-center">
						<p class="warningr " style="color: #A9A9A9">{{Session::get('message')}}</p>
					</div>
				            
				    @endif
					<div class="form-group">
						<input type="hidden" name="_token" value="{{csrf_token()}}">
						<input type="submit" value="Login" class="btn float-right login_btn">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>