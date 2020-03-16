@extends('layouts.dash')

@section('title','Index')

@section('content')

<div class="container">

	@if($message = Session::get('success'))
	<div class="alert alert-success">
		<p> {{ $message }} </p>
	</div>
	@endif
	<p>
		<br>
			<form method="GET" class="form-inline">
				<div class="form-group">
					<input type="text" name="search" class="form-control" placeholder="Search" value="{{ request()->get('search') }}">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-outline-success my-2 my-sm-0">Search</button>
				</div>
			</form>

			<a href="/export/export_excel2" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
		
			<a href="/export/cetak_pdf2" class="btn btn-primary" target="_blank">CETAK PDF</a>
		
			<a href="{{ route('crud.create') }}" class="btn btn-default">Add</a>
	    <p>
	    	<div class="content">
	        	<div class="row">
	          		<div class="col-md-12">
	            		<div class="card">
	              			<div class="card-header">
	                			<h4 class="card-title"> Data Anak</h4>
	              			</div>
	              			<div class="card-body">
	                			<div class="table-responsive">
	 								<table class="table">
									    <thead class=" text-primary">
										<tr>
											<th width="10%">Foto</th>
											<th width="20%">Nama</th>
											<th width="20%">Gender</th>
											<th width="20%">Nama Ayah</th>
											<th width="30%">Pilihan</th>
										</tr>
										</thead>
									 <tbody>
										@foreach($data as $row)
										<tr>
											<td>
												<img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="75"/></td>
											<td>{{ $row->nama }}</td>
											<td>{{ $row->gender }}</td>
											<td><a href="/keluarga/{{$row->keluarga_id}}/profile" class="btn btn-default">{{$row->keluarga->ayah}}</a></td>
											<td>
												<form action="{{ route('crud.destroy', $row->id) }}" method="post">
												<a href="{{ route('crud.show', $row->id) }}" class="btn btn-primary m-1">Detail</a>
												<a href="{{ route('crud.edit', $row->id) }}" class="btn btn-warning m-1">Edit</a>
													@csrf
													@method('DELETE')
													<button type="submit" class="btn btn-danger m-1">Delete</button>
												</form>
											</td>
										</tr>
									@endforeach
								</table>
							</div>
{!! $data->links() !!}
@endsection