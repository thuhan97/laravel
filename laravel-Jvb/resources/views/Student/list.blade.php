<!DOCTYPE html>
<html>
<head>
	<title>Danh sach sinh vien</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<link href="{{ URL::asset('css/list.css') }}" rel="stylesheet" media="screen">

</head>

<body>
	
<div class="content">
	<h1>Danh sach sinh vien</h1>
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
				<a href="delete/student/{{$row->id}}"><i class="fas fa-trash-alt delete-icon"></i></a>
			</td>
		</tr>
		@endforeach
		</tbody>
	</table>
</div>
</body>
</html>