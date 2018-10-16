<html>
<head>
	<title>Đăng ký tân sinh viên</title>
	<meta charset="utf-8"></meta>
	<link rel="stylesheet" type="text/css" href="register.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="{{ URL::asset('css/index.css') }}" rel="stylesheet" media="screen">

	
</head>
<body>
  	
	<div class="register">
		<a href="/students">Xem danh sach sinh vien</a>
		<form>
			<h3>Bạn vừa đăng ký xong sinh viên có mã là {{ $student ->id}}</h3> 

			<div class="group">
				<button type="button">Họ và tên </button>
				<span>{{ $student ->name}}</span>
				
			</div>
			<div class="group">
				<button type="button">Giới tính </button>
				<span><?php
					if($student ->gender==0)
					echo "Nữ";
					else echo "Nam";
				?></span>
			</div>
			<div class="group">
				<button type="button">Phân khoa</button>
				<span><?php
					if($student->faculty==1)
					echo "Khoa học máy tính";
					else echo "Khoa học vật liệu";
				?></span>
			</div>
			<div class="group">
				<button type="button">Năm sinh</button>
				<span>{{ $student ->birthday_year}}</span>
			</div>
			
		</form>
	
	</div>

      
</body>
</html>