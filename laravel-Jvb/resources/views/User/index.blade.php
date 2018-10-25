<!DOCTYPE html>
<html>
<head>

	<title>List student</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<link href="{{ URL::asset('css/list.css') }}" rel="stylesheet" >
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>

<body>
	@if (session('status'))
    <div class="alert alert-success success">
        {{ session('status') }}
    </div>
	@endif
<a href="/logout" class="float-right">Logout</a></br></br>
<button class="btn btn-success float-right"><a href="{{route('user.create',['id'=>null])}}">Add new student</a></button>
<div class="content">
	<h1>List students</h1>
	<table  class="table table-hover">
		<thead>
		<tr>
			<th scope="col">id</th>
			<th>name</th>
			<th>gender</th>
			<th>faculty</th>
			<th>birthday_year</th>
			<th>action</th>
		</tr>
		</thead>
		<tbody>
			@foreach($users as $row)
			<tr scope="row">
			<td class="left-table">{{$row->id}}</td>
			<td>{{$row->name}}</td>
			<td>
				<?php if ($row->gender==0) echo "female";
					else echo "male";
				?>
				
			</td>
			<td>
				<?php if ($row->faculty==1) echo "Computer Science";
					else echo "Material Science";
				?>
			</td>
			<td style="text-align: right;">{{$row->birthday_year}}</td>
			<td>
				<a href="{{route('user.create',['id'=>$row->id])}}"><i class="fas fa-edit edit-icon"></i></a>
				<a href="{{route('user.destroy',['id'=>$row->id])}}" class="delete"><i class="fas fa-trash-alt delete-icon"></i></a>
			</td>
		</tr>
		@endforeach
		</tbody>
	</table>
	
</div>

<script>
    $(".delete").on("click", function(){
        return confirm("Are you sure delete this student?");
    });
</script>
</body>
</html>