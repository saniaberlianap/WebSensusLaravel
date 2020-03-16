@extends('layouts.dash')

@section('title', 'Edit')

@section('content')

<div align="right">
	<a href="{{ route('crud.index') }}" class="btn btn-primary">Back</a>
</div>
	<p>
		<form method="post" action="{{ route('crud.update', $data->id) }}" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
			<label class="col-md-4 text-left">Masukkan Nama</label>
				<div class="col-md-8">
					<input type="text" name="nama" value="{{ $data->nama }}" class="form-control input-lg">
				</div>
		</div>

	<div class="form-group">
		<label class="col-md-4 text-left">Masukkan Jenis Kelamin</label>
			<div class="col-md-8">
				<select name="gender" id="" class="form-control">
					<option value="Lelaki">Lelaki</option>
					<option value="Perempuan">Perempuan</option>
				</select>
			</div>
	</div>

	<div class="form-group">
		<label class="col-md-4 text-left">Masukkan Id Keluarga</label>
			<div class="col-md-8">
				<input type="text" name="keluarga_id" value="{{ $data->keluarga_id }}" class="form-control input-lg">
			</div>
	</div>

	<div class="form-group">
		<label class="col-md-4 text-left">Select Profile Image</label>
			<div class="col-md-8">
				<input type="file" name="image"/>
					<img src="{{ URL::to('/')}}/images/{{ $data->image }}" class="img-thumbnail" width="100">
						<input type="hidden" name="hidden_image" value="{{ $data->image }}" class="form-control">
			</div>
	</div>
	<p>
	<div class="form-group text-center">
		<input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit">
	</div>
</form>
@endsection