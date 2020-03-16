<html>
<head>
	<title>Download PDF</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Data Keluarga</h4>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Ayah</th>
				<th>Nama Ibu</th>
				<th>Alamat</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($keluarga as $c)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{$c->ayah}}</td>
				<td>{{$c->ibu}}</td>
				<td>{{$c->alamat}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>