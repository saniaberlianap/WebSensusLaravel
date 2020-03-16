@extends('layouts.dash')

@section('content')

<div class="container">
	<div align="right">
		<a href="{{ route('keluarga.index') }}" class="btn btn-primary">Back</a>
	</div>
	<p>
	<form method="post" action="{{ route('keluarga.update', $klrg->id) }}" enctype="multipart/form-data">		
	@csrf
		<div class="form-group">
			<label class="col-md-4 text-left">Enter Father's Name</label>
				<div class="col-md-8">
					<input type="text" name="ayah" value="{{ $klrg->ayah }}" class="form-control input-lg">
				</div>
		</div>

		<div class="form-group">
			<label class="col-md-4 text-left">Enter Mother's Name</label>
			<div class="col-md-8">
				<input type="text" name="ibu" value="{{ $klrg->ibu }}" class="form-control input-lg">
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-4 text-left">Enter Address</label>
			<div class="col-md-8">
				<input type="text" name="alamat" value="{{ $klrg->alamat }}" class="form-control input-lg">
			</div>
		</div>
			<p>
				<div class="form-group text-center">
					<input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit">
				</div>
		</form>
</div>
@endsection