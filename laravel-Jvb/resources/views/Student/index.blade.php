<html>
<head>
	<title>Đăng ký tân sinh viên</title>
	<meta charset="utf-8"></meta>
	<link rel="stylesheet" type="text/css" href="register.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	

	<style type="text/css">
		

h1{
	text-align: center;
}
h3{
	text-align: center;
}
.register{
	font-size: 16px;
	font-family: "Times New Roman", Times, serif;
	width: 500px;
	margin: 50px auto;
	border: 2px solid #4267b2;
}
.group{
	margin: 25px 30px;
	width: 460px;
	height: 30px;
}
button{
	background: #4d7fe4;
	border: 2px solid #4267b2;
	width: 100px;
	height: 30px;
	line-height: 30px;
	color: #fff;
}
input[type="text"]{
	width: 200px;
	height: 30px;
	border: 2px solid #4267b2;
	margin-left: 20px;
}
input[name="name"]{
	width: 300px;
}
input[type="radio"]{
	margin-left: 20px;
}
select{
	width: 200px;
	height: 30px;
	border: 2px solid #4267b2;
	margin-left: 20px;
}
span{
	color: red;
	margin-left: 20px;
}

.submit{
	margin-left: 37%;
	width: 120px;
	margin-top: 30px;
	margin-bottom: 30px;
	border-radius: 5px;
}
.value{
	color: #333;
	font-size: 16px;
}
	</style>
	
</head>
<body>
  
	<div class="register">
		
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