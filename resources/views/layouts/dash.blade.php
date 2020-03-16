<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets2/img/sensus.png')}}">
  <link rel="icon" type="image/png" href="{{asset('assets2/img/sen.png')}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
  @yield('title', 'title')
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{asset('assets2/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{asset('assets2/css/paper-dashboard.css?v=2.0.0')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('assets2/demo/demo.css')}}" rel="stylesheet" />
</head>
<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
     
      <div class="logo">
        <a class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="{{asset('assets2/img/sen.png')}}">
          </div>
        </a>
        <a class="simple-text logo-normal">
          Sensus Anak
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="{{'/dashboard'}}">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href=" {{'/'}} ">
              <i class="nc-icon nc-shop"></i>
              <p>User Page</p>
            </a>
          </li>
          <li>
            <a href=" {{ route('dataanak') }} ">
              <i class="nc-icon nc-shop"></i>
              <p>User Page - Data</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">


      @yield('content')
      

  <!--   Core JS Files   -->
  <script src="{{asset('assets2/js/core/jquery.min.js')}}"></script>
  <script src="{{asset('assets2/js/core/popper.min.js')}}"></script>
  <script src="{{asset('assets2/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets2/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <!-- Chart JS -->
  <script src="{{asset('assets2/js/plugins/chartjs.min.js')}}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{asset('assets2/js/plugins/bootstrap-notify.js')}}"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('assets2/js/paper-dashboard.min.js?v=2.0.0')}}" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>

</body>
</html>