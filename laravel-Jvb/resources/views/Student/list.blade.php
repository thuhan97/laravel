<!DOCTYPE html>
<html>
<head>

	<title>List student</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<link href="{{ URL::asset('css/list.css') }}" rel="stylesheet" media="screen">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>

<body>
	@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
	@endif
<div class="content">

	<h1>List students</h1>
	<table>
		<thead>
		<tr>
			<th class="left-table">id</th>
			<th>name</th>
			<th>gender</th>
			<th>faculty</th>
			<th>birthday_year</th>
			<th>action</th>
		</tr>
		</thead>
		<tbody>
			@foreach($student as $row)
			<tr>
			<td class="left-table">{{$row->id}}</td>
			<td>{{$row->name}}</td>
			<td>
				<?php if ($row->gender==0) echo "nữ";
					else echo "nam";
				?>
				
			</td>
			<td>
				<?php if ($row->faculty==1) echo "Khoa học máy tính";
					else echo "Khoa học vật liệu";
				?>
			</td>
			<td style="text-align: right;">{{$row->birthday_year}}</td>
			<td>
				<a href="edit/student/{{$row->id}}"><i class="fas fa-edit edit-icon"></i></a>
				<a href="delete/student/{{$row->id}}" class="delete"><i class="fas fa-trash-alt delete-icon"></i></a>
			</td>
		</tr>
		@endforeach
		</tbody>
	</table>
	<div >{{ $student->links()}}</div>
</div>

<script>
    $(".delete").on("click", function(){
        return confirm("Are you sure delete this student?");
    });
</script>
</body>
</html>