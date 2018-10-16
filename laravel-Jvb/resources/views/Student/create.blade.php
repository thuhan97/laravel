<html>
<head>
	<title>Đăng ký tân sinh viên</title>
	<meta charset="utf-8"></meta>
	<link rel="stylesheet" type="text/css" href="register.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<link href="{{ URL::asset('css/register.css') }}" rel="stylesheet" media="screen">
	<link href="{{ URL::asset('css/error.css') }}" rel="stylesheet" media="screen">
	<!-- <script src="{{ URL::asset('js/register.js') }}"></script> -->
</head>
<body>
	
	<div class="register">
		@if (session()->has('message'))
    <h3>{{session()->get('mesage')}}</h3>
	@endif
		<form role="form" method="post"  name="register" action="{{ action('StudentController@store') }}" >
			 @csrf

			<!-- <input type="hidden" name="_token" value=”{{ csrf_token() }}”> -->
			<h1>Đăng ký tân sinh viên</h1>
			@include('block.error')
			<span id="error"></span>
			<div class="group">
				<button type="button">Họ và tên</button>
				<input type="text" name="name" value="" id="name">
				<!-- @if ($errors->has('name'))
    				<span class="error">{{ $errors->first('name') }}</span>
				@endif -->
			</div>
			<div class="group">
				<button type="button">Giới tính</button>
				<input type="radio" name="gender" value="0"> Nữ
				<input type="radio" name="gender" value="1"> Nam
				</br>
				<!-- @if ($errors->has('gender'))
    				<span class="error">{{ $errors->first('gender') }}</span>
				@endif -->
			</div>
			<div class="group">
				<button type="button">Phân khoa</button>
				<select id="faculty" name="faculty">
					<option value=""></option>
					<option value="1">Khoa học máy tính</option>
					<option value="2">Khoa học vật liệu</option>
				</select>
				</br>
				<!-- @if ($errors->has('faculty'))
    				<span class="error">{{ $errors->first('faculty') }}</span>
				@endif -->
			</div>
			<div class="group">
				<button type="button">Năm sinh</button>
				<input type="text" name="birthday_year" value="" id="birthday_year"></br>
				<!-- @if ($errors->has('birthday_year'))
    				<span class="error">{{ $errors->first('birthday_year') }}</span>
				@endif -->
			</div>
			<button type="submit" name="submit" class="submit" onclick="return validateFrm()">Đăng ký</button>
		</form>
		
	</div>
	
</body>
</html>