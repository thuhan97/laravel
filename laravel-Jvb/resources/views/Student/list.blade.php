<!DOCTYPE html>
<html>
<head>
	<title>Danh sach sinh vien</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<style type="text/css">
		.content{

			width: 600px;
			margin: 30px;
			padding: 20px;
			margin: auto;
		}

		th{
			border-top: 1px solid #ccc;
			border-bottom: 1px solid #ccc;
			border-right: 1px solid #ccc;
			padding: 5px;
		}
		td{
			padding: 5px;
			border-bottom: 1px solid #ccc;
			border-right: 1px solid #ccc;
		}
		.left-table{
			border-left: 1px solid #ccc;
		}
		.edit-icon{
			color: blue;
			padding: 5px;
		}
		.delete-icon{
			color: red;
		}
		h1{
			color: #333;
			text-align: center;
		}
	</style>
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