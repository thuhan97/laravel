<html>
<head>
	<title>Register new user</title>
	<meta charset="utf-8"></meta>
	<link rel="stylesheet" type="text/css" href="register.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" >
	<link href="{{ URL::asset('css/edit.css') }}" rel="stylesheet" media="screen">
	<link href="{{ URL::asset('css/error.css') }}" rel="stylesheet" media="screen">
	<!-- <script src="{{ URL::asset('js/register.js') }}"></script> -->
</head>
<body>

	<div class="register">

		<form role="form" method="put"  name="register" action="/users/{{$user->id}}" >
			 @csrf

			<!-- <input type="hidden" name="_token" value=”{{ csrf_token() }}”> -->
			<h1>Update user's profile</h1>
			@include('block.error')
			<span id="error"></span>
			<div class="group">
				<button type="button">Full Name</button>
				<input type="text" name="name"  id="name" value="{{$user->name}}" />
				</br>
				<!-- @if ($errors->has('name'))
    				<span class="error">{{ $errors->first('name') }}</span>
				@endif -->
			</div>
			<div class="group">
				<button type="button">Gender</button>
				<input type="radio" name="gender" value="0" {{ $user->gender == '0' ? 'checked' : ''}}/> Female
				<input type="radio" name="gender" value="1" {{ $user->gender == '1' ? 'checked' : ''}}/> Male
				</br>
				<!-- @if ($errors->has('gender'))
    				<span class="error">{{ $errors->first('gender') }}</span>
				@endif -->
			</div>
			<div class="group">
				<button type="button">Faculty</button>
				<select id="faculty" name="faculty" >
					<option value=""></option>
					<option value="1" {{ $user->faculty == '1' ? 'selected' : ''}}>Computer Science</option>
					<option value="2" {{ $user->faculty == '2' ? 'selected' : ''}}>Material Science</option>
				</select>
				</br>
				<!-- @if ($errors->has('faculty'))
    				<span class="error">{{ $errors->first('faculty') }}</span>
				@endif -->
			</div>
			<div class="group">
				<button type="button">Birthday_year</button>
				<input type="text" name="birthday_year" id="birthday_year" value={{$user->birthday_year}} /></br>
				<!-- @if ($errors->has('birthday_year'))
    				<span class="error">{{ $errors->first('birthday_year') }}</span>
				@endif -->
			</div>
			<button type="submit" name="submit" class="submit" >Update</button>
		</form>
	</div>
	
</body>
</html>