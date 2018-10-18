<html>
<head>
	<title>Register New user</title>
	<meta charset="utf-8"></meta>
	<link rel="stylesheet" type="text/css" href="register.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="{{ URL::asset('css/show.css') }}" rel="stylesheet" media="screen">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	
</head>
<body>
  	@if (session('status'))
    <div class="alert alert-success success">
        {{ session('status') }}
    </div>
	@endif
	<div class="register">
		<a href="/users/users">View list user</a>
		<form>
			<h3>You have registed with id number is {{ $user ->id}}</h3> 

			<div class="group">
				<button type="button">Full Name </button>
				<span>{{ $user ->name}}</span>
				
			</div>
			<div class="group">
				<button type="button">Gender </button>
				<span><?php
					if($user ->gender==0)
					echo "Female";
					else echo "Male";
				?></span>
			</div>
			<div class="group">
				<button type="button">Faculty</button>
				<span><?php
					if($user->faculty==1)
					echo "Computer Science";
					else echo "Material Science";
				?></span>
			</div>
			<div class="group">
				<button type="button">Birthday_year</button>
				<span>{{ $user ->birthday_year}}</span>
			</div>
			
		</form>
	
	</div>

      
</body>
</html>