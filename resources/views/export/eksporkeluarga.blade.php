<table>
	<thead>
		<tr>
			<th>No</th>
			<th>Nama ayah</th>
			<th>Nama Ibu</th>
			<th>Alamat</th>
		</tr>
	</thead>
	<tbody>
		@php $id = 1 @endphp
		@foreach($ekspor as $eks)
		<tr>
			<td>{{ $id++ }}</td>
			<td>{{ $eks->ayah }}</td>
			<td>{{ $eks->ibu }}</td>
			<td>{{ $eks->alamat }}</td>
		</tr>
		@endforeach
	</tbody>
</table>