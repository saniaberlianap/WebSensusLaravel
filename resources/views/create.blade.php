@extends('layouts.dash')

@section('title','Create')

@section('content')

<div class="container">
	@if($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif


	<div align="right">
		<a href="{{ route('crud.index') }}" class="btn btn-default">Back</a>
	</div>
	<form method="post" action="{{ route('crud.store') }}" enctype="multipart/form-data">
	@csrf
	<div class="form-group">
		<label class="col-md-4 text-left">Masukkan Nama</label>
		<div class="col-md-8">
			<input type="text" name="nama" class="form-control input-lg">
		</div>
	</div>
	<p>
	<div class="form-group">
		<label class="col-md-4 text-left">Masukkan Jenis Kelamin</label>
			<div class="col-md-8">
				<select name="gender" id="" class="form-control">
					<option value="Lelaki">Lelaki</option>
					<option value="Perempuan">Perempuan</option>
				</select>
			</div>
	</div>
	<p>
	<div class="form-group">
		<label class="col-md-4 text-left">Masukkan ID Keluarga</label>
			<div class="col-md-8">
				<input type="text" name="keluarga_id" class="form-control input-lg">
			</div>
	</div>
	<p>
	<div class="form-group">
		<label class="col-md-4 text-left">Select Profile Image</label>
			<div class=" col-md-8">
				<input type="file" name="image" class="form-control"/>
			</div>
		</div>
		<p>
		<div class="form-group text-center">
			<input type="submit" name="add" class="btn btn-primary input-lg" value="Add">
		</div>
	</form>
</div>

@endsection