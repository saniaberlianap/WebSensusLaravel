@extends('layouts.dash')

@section('title', 'keluarga profile')

@section('content')

<div class="content">
  <div class="row">
    <div class="card col-md-7">
        <div align="right">
		        <a href="{{ route('crud.index') }}" class="btn btn-primary">Back</a>
	       </div>
          <div class="card-header">
              <h4 class="card-title">Profil Keluarga</h4>
          </div>
              <div class="card-body">
                <ul class="list-unstyled team-members">
                  <li>
                    <div class="row">
                      <div class="col-md-7 col-7">
                        Ayah
                        <br />
                        <span class="text-muted">
                          <small>{{ $keluarga->ayah }}</small>
                        </span>
                      </div>
                      <div class="col-md-3 col-3 text-right">
                        <btn class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-envelope"></i></btn>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="row">
                      <div class="col-md-7 col-7">
                        Ibu
                        <br />
                        <span class="text-success">
                          <small>{{ $keluarga->ibu }}</small>
                        </span>
                      </div>
                      <div class="col-md-3 col-3 text-right">
                        <btn class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-envelope"></i></btn>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="row">
                      <div class="col-ms-7 col-7">
                        Alamat
                        <br />
                        <span class="text-danger">
                          <small>{{ $keluarga->alamat }}</small>
                        </span>
                      </div>
                      <div class="col-md-3 col-3 text-right">
                        <btn class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-envelope"></i></btn>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="row">
                      <div class="col-md-7 col-7">
                       <table class="table">
          							<tr>
          								<th>Anak Kandung</th>
          							</tr>
          							 @foreach($keluarga->crud as $crud)
            							<tr>
            								<td>{{ $crud->nama }} -  {{ $crud->gender }}</td>
            							</tr>
							           @endforeach
						            </table>
                      </div>
                      <div class="col-md-3 col-3 text-right">
                        <btn class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-envelope"></i></btn>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
      </div>
@endsection