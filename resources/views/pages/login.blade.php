<div class="log-w3">
	<div class="w3layouts-main">
		<h2>Đăng nhập</h2>
		<?php
		$msg=Session::get('message');
		if($msg)	{
			echo $msg;
			Session::put('message',null);
		}
		?>
		<form action="{{URL::to('/admin-dashboard')}}" method="post">
			{{csrf_field() }}
			<input type="text" class="ggg" name="username" placeholder="Tên đăng nhập" required>
			<input type="password" class="ggg" name="password" placeholder="Mật khẩu" required>
			<a href="{{URL::to('nhan-vien')}}" class="text-primary">Đăng ký tài khoản</a>
			<div class="clearfix"></div>
			<input type="submit" value="Đăng nhập" name="login">
		</form>		
	</div>
</div>