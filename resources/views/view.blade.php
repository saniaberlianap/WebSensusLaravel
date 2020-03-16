@extends('layouts.dash')

@section('title', 'View')

@section('content')

<div class="container">
  <div class="content">
    <div align="right">
      <a href="{{ route('crud.index') }}" class="btn btn-primary">Back</a>
    </div>
  <p>
    <div class="row">
        <div class="col-md-8">
            <div class="card card-user">
                <div class="image">
                  <img src="{{asset('assets2/img/damir-bosnjak.jpg')}}" alt="...">
                  </div>
                  <div class="card-body">
                    <div class="author">
                      <a href="#">
                        <img class="avatar border-gray" src="{{ URL::to('/') }}/images/{{ $data->image }}" alt="...">
                          <h5 class="title">{{ $data->nama }}</h5>
                      </a>
                  <p class="description">
                    {{ $data->gender }}
                  </p>
                </div>
              </div>
              <div class="card-footer">
                <hr>
                <div class="button-container">
                  <div class="row">
                    <div class="col-lg-3 col-md-6 col-6 ml-auto">
                      <h5>Ayah
                        <br>
                        <small>{{ $data->keluarga->ayah }}</small>
                      </h5>
                    </div>
                    <div class="col-lg-4 col-md-6 col-6 ml-auto mr-auto">
                      <h5>Ibu
                        <br>
                        <small>{{ $data->keluarga->ibu }}</small>
                      </h5>
                    </div>
                    <div class="col-lg-3 mr-auto">
                      <h5>Alamat
                        <br>
                        <small>{{ $data->keluarga->alamat }}</small>
                      </h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
      </div>
</div>

@endsection