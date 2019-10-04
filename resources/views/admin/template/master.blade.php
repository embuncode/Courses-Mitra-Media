<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="{{ url ('image/mitra.png') }}">
    <title>Selamat Datang di Admin Mitra Media</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- CSFR token for ajax call -->
    <meta name="_token" content="{{ csrf_token() }}"/>
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ url ('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url ('admin/bower_components/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ url ('admin/bower_components/Ionicons/css/ionicons.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url ('admin/dist/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins -->
    <link rel="stylesheet" href="{{ url ('admin/dist/css/skins/_all-skins.min.css') }}">
  	<!-- style css -->
	  <link rel="stylesheet" href="{{ url ('admin/dist/css/style.css') }}">
    <!-- Sweet alert -->
    <link rel="stylesheet" href="{{ url ('sweetalert2/sweetalert2.css') }}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{ url ('admin/bower_components/morris.js/morris.css') }}">
    <link rel="stylesheet" href="{{ url ('admin/bower_components/jvectormap/jquery-jvectormap.css') }}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{ url ('admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ url ('admin/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
    <!-- Datatable -->
    <link rel="stylesheet" href="{{ url ('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <!-- icheck checkboxes -->
    <link rel="stylesheet" href="https://raw.githubusercontent.com/fronteed/icheck/1.x/skins/square/yellow.css">
    <!-- toastr notifications -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <!-- jQuery -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script> 
    <!-- Bootstrap JavaScript -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.1/js/bootstrap.min.js"></script>
    <!-- toastr notifications -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

</head>
<body class="hold-transition skin-green sidebar-mini">

<div class="wrapper">

  	<header class="main-header">
  	  	<!-- Logo -->
  	  	<a href="/home" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>M</b>M</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Mitra</b>Media</span>
  	  	</a>

  	  	<!-- Header Navbar: style can be found in header.less -->
  	  	<nav class="navbar navbar-static-top">
      		<!-- Sidebar toggle button-->
      		<a href="/logout" class="sidebar-toggle" data-toggle="push-menu" role="button">
      		  	<span class="sr-only">Toggle navigation</span>
      		</a>

      		<div class="navbar-custom-menu">
      		  	<ul class="nav navbar-nav">

                <li class="dropdown messages-menu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-envelope-o"></i>
                    <span class="label label-success">{{ $pesans }}</span>
                  </a>
                </li>
          
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="/logout" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <img src="{{ url ('admin/dist/img/avatar0.png') }}" class="user-image" alt="User Image">
                        <span class="hidden-xs">Administrator</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{ url ('admin/dist/img/avatar0.png') }}" class="img-circle" alt="User Image">
                            <p>
                                {{Session::get('username')}} - Web Developer
                                <small>Member since Nov. 2012</small>
                            </p>
                        </li>
        
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="/logout" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>

                <li class="messages-menu open">
                  <a href="/" target="_blank" title="Lihat Website" aria-expanded="true">
                    <i class="fa fa-firefox"></i>
                    </a>           
                </li>

      		  	</ul>
      		</div>
  	  	</nav>
  	</header>

  	<!-- Left side column. contains the logo and sidebar -->
  	<aside class="main-sidebar">
  	  @include('admin.template.include.navbar');
  	</aside>

  	<!--content -->
    @yield('content')

  	<footer class="main-footer">
  	     <div class="pull-right hidden-xs">
  	         <b>Version</b> 0.1
  	     </div>
  	     <strong>Copyright &copy; 2019 <a href="https://embuncode.blogspot.com/">Embuncode</a>.</strong> All rights
  	     reserved.
  	</footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{ url ('admin/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Sweetalert2 -->
<script src="{{ url ('sweetalert2/sweetalert2.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ url ('admin/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ url ('admin/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- Morris.js charts -->
<script src="{{ url ('admin/bower_components/raphael/raphael.min.js') }}"></script>
<script src="{{ url ('admin/bower_components/morris.js/morris.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ url ('admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ url ('admin/bower_components/jquery-knob/dist/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ url ('admin/bower_components/moment/min/moment.min.js') }}"></script>
<script src="{{ url ('admin/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<!-- datepicker -->
<script src="{{ url ('admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ url ('dist/Chart.js') }}"></script>
<!-- Slimscroll -->
<script src="{{ url ('admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ url ('admin/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ url ('admin/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ url ('admin/dist/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url ('admin/dist/js/demo.js') }}"></script>
<!-- CK Editor -->
<script src="{{ url ('admin/bower_components/ckeditor/ckeditor.js') }}"></script>

<script>
  // Date picker
    $('#tgl_lahir').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd',
    })
</script>   
<script>
  $(function () {
    CKEDITOR.replace('materi')
  })
</script>

<!-- DataTables -->
<script src="{{ url ('admin/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ url ('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<!-- page script -->
@stack('scripts')

</body>
</html>