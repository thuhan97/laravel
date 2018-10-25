<html>
<head>
	<title>Register New student</title>
	<meta charset="utf-8"></meta>
	<link rel="stylesheet" type="text/css" href="register.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="{{ URL::asset('css/show.css') }}" rel="stylesheet" media="screen">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	
</head>
<body>
  	@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
	@endif
	<div class="register">
		<a href="students">View list student</a>
		<form>
			<h3>You have registed with id number is {{ $student ->id}}</h3> 

			<div class="group">
				<button type="button">Full Name </button>
				<span>{{ $student ->name}}</span>
				
			</div>
			<div class="group">
				<button type="button">Gender </button>
				<span><?php
					if($student ->gender==0)
					echo "Nữ";
					else echo "Nam";
				?></span>
			</div>
			<div class="group">
				<button type="button">Faculty</button>
				<span><?php
					if($student->faculty==1)
					echo "Khoa học máy tính";
					else echo "Khoa học vật liệu";
				?></span>
			</div>
			<div class="group">
				<button type="button">Birthday_year</button>
				<span>{{ $student ->birthday_year}}</span>
			</div>
			
		</form>
	
	</div>

      
</body>
</html>