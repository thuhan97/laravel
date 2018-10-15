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
		<form role="form" method="post"  name="register" action="{{ action('StudentController@store') }}" >
			    @csrf

			<!-- <input type="hidden" name="_token" value=”{{ csrf_token() }}”> -->
			<h1>Đăng ký tân sinh viên</h1>
			<span id="error"></span>
			<div class="group">
				<button type="button">Họ và tên</button>
				<input type="text" name="name" value="" id="name">
			</div>
			<div class="group">
				<button type="button">Giới tính</button>
				<input type="radio" name="gender" value="0"> Nữ
				<input type="radio" name="gender" value="1"> Nam
			</div>
			<div class="group">
				<button type="button">Phân khoa</button>
				<select id="faculty" name="faculty">
					<option value=""></option>
					<option value="1">Khoa học máy tính</option>
					<option value="2">Khoa học vật liệu</option>
				</select>
			</div>
			<div class="group">
				<button type="button">Năm sinh</button>
				<input type="text" name="birthday_year" value="" id="birthday_year"></br>
			</div>
			<button type="submit" name="submit" class="submit" onclick="return validateFrm()">Đăng ký</button>
		</form>
	</div>
	<script type="text/javascript">
		function validateFrm(){
		var name=$("#name").val();
		var gender= $('input[name=gender]:checked').val();
		console.log(gender);
		var faculty=$('#faculty').val()
		var birthday_year=$("#birthday_year").val();
		//console.log(x);
		// alert(gender);
		// alert(faculty);
		// alert(birthday_year);
		if(name==''){
			$("#error").html('<span id="error">Hay nhap ten</span>');
		}
		else if(gender === undefined){
			$("#error").html('<span id="error">Hay chon gioi tinh</span>');
		}
		// else if(gender!==){
		// 	$("#error").html('<span id="error">Hay chon  gioi tinh</span>');
		// }
		else if(faculty === ''){
			$("#error").html('<span id="error">Hay chon phan khoa</span>');
		}
		else if(birthday_year ===''){
			$("#error").html('<span id="error">Hay nhap nam sinh</span>');
		}
		else return true;
		return false;
	}

	</script>
</body>
</html>