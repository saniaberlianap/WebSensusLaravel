@extends('layouts.dash')

@section('title', 'keluarga')

@section('content')

<div class="container">
	@if($message = Session::get('success'))
	<div class="alert alert-success">
		<p> {{ $message }} </p>
	</div>
	@endif
	<p>
		<br>

		<a href="/export/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
		<a href="/export/cetak_pdf" class="btn btn-primary" target="_blank">CETAK PDF</a>
		<a href="{{ route('keluarga.create') }}" class="btn btn-default">Add</a>
	<form method="GET" class="form-inline">
		<div class="form-group">
			<input type="text" name="search" class="form-control" placeholder="Search" value="{{ request()->get('search') }}">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-outline-success my-2 my-sm-0">Search</button>
		</div>
	</form>
	<div class="content">
	    <div class="row">
	       <div class="col-md-12">
	          <div class="card">
	             <div class="card-header">
	                <h4 class="card-title"> Data Keluarga</h4>
	              </div>
	              <div class="card-body">
	                <div class="table-responsive">
						 <table class="table">
						    <thead class=" text-primary">
							<tr>
								<thead>
								<th width="10%">ID</th>
								<th width="20%">Father's Name</th>
								<th width="20%">Mother's Name</th>
								<th width="20%">Address</th>
								<th width="30%">Option</th>
							</tr>
						</thead>
						<tbody>
							@foreach($klrg as $row)
								<tr>
									<td>{{ $row->id}}</td>
									<td>{{ $row->ayah }}</td>
									<td>{{ $row->ibu }}</td>
									<td>{{ $row->alamat }}</td>
									<td>
										<form action="{{ route('keluarga.destroy', $row->id) }}" method="post">
										<a href="{{ route('keluarga.show', $row->id) }}" class="btn btn-primary m-1">Detail</a>
										<a href="{{ route('keluarga.edit', $row->id) }}" class="btn btn-warning m-1">Edit</a>
										
											@csrf
										</form>
									</td>
								</tr>
							</tbody>
							@endforeach
						</table>
	{!! $klrg->links() !!}
</div>

@endsection