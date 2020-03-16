@extends('layouts.parent')

@section('title', 'Data Anak')

@section('main')

<!-- Hero Area Start -->
<div id="hero-area" class="hero-area-bg">
        <div class="container">      
          <div class="row">
            <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
              <div class="contents">
                <h2 class="head-title">SENSUS ANAK<br>2 0 2 0</h2>
                <p>Pastikan Anda turut serta #MencatatIndonesia dalam pelaksanaan Sensus Penduduk Online pada Februari - Maret 2020.</p>
              </div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
              <div class="intro-img">
                <img class="img-fluid" src="assets/img/a5.png" alt="">
              </div>            
            </div>
          </div> 
        </div> 
      </div>
      <!-- Hero Area End -->
		
      <section id="team" class="section-padding bg-gray">
      <div class="container">
        <div class="section-header text-center">          
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Data Anak</h2>
          <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <form method="GET" class="form-inline">
		<div class="form-group mt-3">
			<input type="text" name="search" class="form-control" placeholder="Search" value="{{ request()->get('search') }}">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-border video-popup">Search</button>
		</div>
	</form>
        <div class="row">
        @foreach($data as $row)
          <div class="col-lg-6 col-md-12 col-xs-12">
            <!-- Team Item Starts -->   
            <div class="team-item wow fadeInRight" data-wow-delay="0.2s">
              <div class="team-img">
                <img class="img-fluid" src="{{ URL::to('/') }}/images/{{ $row->image }}" alt="">
              </div>
              <div class="contetn">
                <div class="info-text">
                  <h3><a href="#">{{ $row->nama }}</a></h3>
                  <p>{{ $row->gender }}</p>
                </div>
                <p>Nama Ayah : {{$row->keluarga->ayah}}</p>
                <ul class="social-icons">
                  <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>
          @endforeach
        </div>
      </div>
          
          <!-- Testimonial Section Start -->
    <section id="testimonial" class="testimonial section-padding">
      <div class="container">
        <div class="row justify-content-center">
          <h2 class="section-title wow fadeInDown mb-5" data-wow-delay="0.3s">Data Keluarga</h2>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div id="testimonials" class="owl-carousel wow fadeInUp" data-wow-delay="1.2s">
              @foreach($keluarga as $row)
              <div class="item">
                <div class="testimonial-item">
                  <div class="info">
                    <h2><a href="#">ID Keluarga : {{ $row->id}}</a></h2>   </div>
                    <div class="content">
                        <p class="description">
                          Ayah : {{ $row->ayah }}
                        </p>
                        <p class="description">
                          Ibu : {{ $row->ibu }}
                        </p>
                        <p class="description">
                          Alamat : {{ $row->alamat }}
                        </p>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonial Section End -->


@endsection