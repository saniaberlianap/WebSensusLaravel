<table>
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Foto Profil</th>
			<th>No ID Keluarga</th>
		</tr>
	</thead>
	<tbody>
		@php $id = 1 @endphp
		@foreach($ekspor as $eks)
		<tr>
			<td>{{ $id++ }}</td>
			<td>{{ $eks->nama }}</td>
			<td>{{ $eks->gender }}</td>
			<td>{{ $eks->image }}</td>
			<td>{{ $eks->keluarga_id }}</td>
		</tr>
		@endforeach
	</tbody>
</table>