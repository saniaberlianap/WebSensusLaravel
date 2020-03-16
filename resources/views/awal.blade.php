@extends('layouts.parent')

@section('title', 'Awal landingpage')

@section('main')

 <!-- Hero Area Start -->
 <div id="hero-area" class="hero-area-bg">
    <div class="container">      
      <div class="row">
        <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
          <div class="contents">
            <h2 class="head-title">SENSUS ANAK<br>2 0 2 0</h2>
               <p>Pastikan Anda turut serta #MencatatIndonesia dalam pelaksanaan Sensus Penduduk Online pada Februari - Maret 2020.</p>
                <div class="header-button">
                  <a href="{{ route('dataanak') }}" class="btn btn-common">Lihat Data</i></a>
                </div>
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
    </header>
    <!-- Header Area wrapper End -->

    <!-- Services Section Start -->
    <section id="services" class="section-padding">
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Mengapa Sensus Penduduk Online?</h2>
          <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div class="row">
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="0.3s">
              <div class="icon">
                <i class="lni lni-laptop"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Partisipasi Aktif</a></h3>
                  <p>Dapat dilakukan kapan saja secara mandiri selama periode pelaksanaan Sensus Penduduk Online.</p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="0.6s">
              <div class="icon">
                <i class="lni lni-users"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Optimalisasi Teknologi Informasi</a></h3>
                  <p>Literasi masyarakat terhadap penggunaan teknologi informasi yang semakin baik. </p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="0.9s">
              <div class="icon">
                <i class="lni lni-agenda"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Budaya Cinta Data</a></h3>
                <p>Menumbuhkan kesadaran masyarakat tentang arti penting data, dimulai dari informasi pribadinya. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services Section End -->

    <!-- About Section start -->
    <div class="about-area section-padding bg-gray">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-xs-12 info">
            <div class="about-wrapper wow fadeInLeft" data-wow-delay="0.3s">
              <div>
                <div class="site-heading">
                  <h2 class="section-title">Satu Data Kependudukan</h2>
                </div>
                <div class="content">
                  <p>
                  Sensus Penduduk 2020 (SP2020) menggunakan data administrasi kependudukan dari Ditjen Dukcapil sebagai basis data dasar yang kemudian dilengkapi pada pelaksanaan SP2020. Upaya ini menjadi langkah penting untuk mewujudkan "Satu Data Kependudukan Indonesia".
                  Menggunakan data administrasi kependudukan dari Ditjen Dukcapil sebagai basis data dasar yang kemudian dilengkapi pada pelaksanaan SP2020. Upaya ini menjadi langkah penting pewujudan Satu Data Kependudukan Indonesia.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-xs-12 wow fadeInRight" data-wow-delay="0.3s">
            <img class="img-fluid" src="assets/img/about/img-1.png" alt="" >
          </div>
        </div>
      </div>
    </div>
    <!-- About Section End -->

    <!-- Features Section Start -->
    <section id="features" class="section-padding">
      <div class="container">
        <div class="section-header text-center">          
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Makna Logo</h2>
          <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
            <div class="content-left">
              <div class="box-item wow fadeInLeft" data-wow-delay="0.3s">
                <span class="icon">
                  <i class="lni lni-hand"></i>
                </span>
                <div class="text">
                  <h4>Bentuk orang bergandengan dan mengangkat tangan.</h4>
                  <p>mewakili kegiatan sensus penduduk di mana penduduk merupakan elemen utamanya serta diperlukan keterlibatan seluruh warga Indonesia dalam mensuskseskan Sensus Penduduk 2020.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
            <div class="show-box wow fadeInUp" data-wow-delay="0.3s">
              <img src="assets/img/feature/intro-mobile.png" alt="">
            </div>
          </div>
          <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
            <div class="content-right">
              <div class="box-item wow fadeInRight" data-wow-delay="0.3s">
                <span class="icon">
                  <i class="lni-leaf"></i>
                </span>
                <div class="text">
                  <h4>Bentuk pita tali yang tersambung</h4>
                    <p>menggambarkan bahwa kegiatan sensus penduduk merupakan kegiatan yang berkelanjutan. Pita tali ini juga menggambarkan grafik data dan tanda centang (check list), menunjukkan kegiatan Sensus Penduduk 2020 dilakukan secara profesional dan memastikan semua warga terdaftar Sensus Penduduk 2020.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Features Section End -->   

    <!-- Contact Section Start -->
    <section id="contact" class="section-padding bg-gray">    
      <div class="container">
        <div class="section-header text-center">          
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Countact Us</h2>
          <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div class="row contact-form-area wow fadeInUp" data-wow-delay="0.3s">   
          <div class="col-lg-7 col-md-12 col-sm-12">
            <div class="contact-block">
              <form id="contactForm">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" id="name" name="name" placeholder="Name" required data-error="Please enter your name">
                      <div class="help-block with-errors"></div>
                    </div>                                 
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" placeholder="Email" id="email" class="form-control" name="email" required data-error="Please enter your email">
                      <div class="help-block with-errors"></div>
                    </div> 
                  </div>
                   <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" placeholder="Subject" id="msg_subject" class="form-control" required data-error="Please enter your subject">
                        <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group"> 
                      <textarea class="form-control" id="message" placeholder="Your Message" rows="7" data-error="Write your message" required></textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="submit-button text-left">
                      <button class="btn btn-common" id="form-submit" type="submit">Send Message</button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div> 
                      <div class="clearfix"></div> 
                    </div>
                  </div>
                </div>            
              </form>
            </div>
          </div>
          <div class="col-lg-5 col-md-12 col-xs-12">
            <div class="map">
              <object style="border:0; height: 280px; width: 100%;" data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d34015.943594576835!2d-106.43242624069771!3d31.677719472407432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e75d90e99d597b%3A0x6cd3eb9a9fcd23f1!2sCourtyard+by+Marriott+Ciudad+Juarez!5e0!3m2!1sen!2sbd!4v1533791187584"></object>
            </div>
          </div>
        </div>
      </div> 
    </section>
    <!-- Contact Section End -->

@endsection