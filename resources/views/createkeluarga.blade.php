@extends('layouts.dash')

@section('title', 'create keluarga')

@section('content')

@if($errors->any())
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif

<p>
	<br>
		<p>
			<br>
<div class="container">
	<div align="right">
		<a href="{{ route('keluarga.index') }}" class="btn btn-default">Back</a>
	</div>
	<form method="post" action="{{ route('keluarga.store') }}" enctype="multipart/form-data">
	@csrf
		<div class="form-group">
			<label class="col-md-4 text-left">Enter Father's Name</label>
				<div class="col-md-8">
					<input type="text" name="ayah" class="form-control input-lg">
				</div>
		</div>
		<p>
		<div class="form-group">
			<label class="col-md-4 text-left">Enter Mother's Name</label>
				<div class="col-md-8">
					<input type="text" name="ibu" class="form-control input-lg">
				</div>
		</div>
		<p>
		<div class="form-group">
			<label class="col-md-4 text-left">Enter Address</label>
				<div class="col-md-8">
					<input type="text" name="alamat" class="form-control input-lg">
				</div>
		</div>
		<p>
		<div class="form-group text-center">
			<input type="submit" name="add" class="btn btn-primary input-lg" value="Add">
		</div>
	</form>
</div>

@endsection