<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="main_files/yosri/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link href="main_files/yosri/font-awesome.min.css" rel="stylesheet" type="text/css" />
     <!-- from internet -->
     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
      <!-- Ionicons 2.0.0 -->
      <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />

    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->

    <link rel="stylesheet" href="{{ asset('adminlte/css/adminlte.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- bootstrap rtl -->
    <link rel="stylesheet" href="{{ asset('adminlte/css/bootstrap-rtl.min.css') }}">
    <!-- template rtl version -->

    <link rel="stylesheet" href="{{ asset('adminlte/css/custom-style.css')}}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- font awesome -->
      <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">

    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>

      <link rel="stylesheet" href="{{ asset('rating/ratingstar.css') }}">

      <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="main_files/font-awesome.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="main_files/ionicons.css">
  <!-- Theme style -->

  <link rel="stylesheet" href="main_files/adminlte.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="main_files/css.css" rel="stylesheet">

  <!-- bootstrap rtl -->
  <link rel="stylesheet" href="main_files/bootstrap-rtl.css">
  <!-- template rtl version -->

  <link rel="stylesheet" href="main_files/custom-style.css">

  <script src="main_files/jquery_002.js"></script>
  <!-- font awesome -->
    <link rel="stylesheet" href="main_files/font-awesome_002.css">

  <script src="main_files/ckeditor.js"></script><style>.cke{visibility:hidden;}</style>

    <link rel="stylesheet" href="main_files/ratingstar.css">

    <title>Seamless</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <!-- Datepicker -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- Datatables -->
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/r-2.2.3/datatables.min.css" />

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
</head>
<body class="sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper"><!-- Navbar -->
<nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>

    </ul>

    <!-- SEARCH FORM -->



    <!-- Right navbar links -->
    <ul class="navbar-nav mr-auto">
      <!-- Messages Dropdown Menu -->
           <li style="margin-left: 300px;"> <a href="{{ url('e_pssword') }}">Change Password </a></li>

           <li style="margin-left: 400px;">



<a href="{{ route('logout') }}"
     onclick="event.preventDefault();
       document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      {{ csrf_field() }}
                                  </form>


</li>


    </ul>
  </nav>
  @yield('content')
<!-- /.navbar -->
<nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->


    <div class="form-control">
    <div class="form-group">
              @include('flash-message')
               @yield('content3')
               </div>
                 </div>

  </nav>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="min-height: 434px;">
    <!-- Brand Logo -->
    <a href="{{ url('a_mission') }}" class="brand-link">
        <img src="{{ asset('AdminLTELogo.png') }}" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Seamless</span>
    </a>
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->


             <li class="nav-item">
    <a href="{{ url('a_mission') }}" class="brand-link">
        <i class=" nav-icon fa fa-dashboard"></i>
        <span class="brand-text font-weight-light">Dashboard</span>

    </a>
</li>

</ul>
    <!-- Sidebar -->
    <div class="sidebar">
        <div>
            <!-- Sidebar user panel (optional) -->


                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                             with font-awesome or any other icon font library -->


                             <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <p>

                                        {{ Auth::user()->name }}

                                    </p>
                                    <i class=" nav-icon fa fa-user"></i>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin_register') }}" class="nav-link">
                                    <p>

                                        Add Uesr

                                    </p>
                                    <i class=" nav-icon fa fa-user-plus"></i>

                                </a>
                            </li>

                    </ul>
            </nav>
            <div class="user-panel mt-1 pb-1 mb-1 d-flex">
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->







                            <li class="nav-item">
                              <a href="#" class="nav-link">


                                <p>
                                  <i class="nav-icon fa fa-angle-right left"></i>
                                  Captain

                                </p>
                                <i class="nav-icon fa fa-file"></i>

                              </a>
                              <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="{{ url('c_create') }}" class="nav-link">

                                    <p>Add Captain</p>
                                    <i class="fa fa-circle nav-icon"></i>
                                  </a>
                                </li>
                                <li class="nav-item">
                                  <a href="{{ url('captains') }}" class="nav-link">

                                    <p>Show Captain</p>
                                     <i class="fa fa-circle nav-icon"></i>
                                  </a>
                                </li>
                              </ul>
                            </li>


                            <li class="nav-item">
                              <a href="#" class="nav-link">


                                <p>
                                  <i class="nav-icon fa fa-angle-right left"></i>
                                 add Motors

                                </p>
                                <i class="nav-icon fa fa-file"></i>

                              </a>
                              <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="{{ url('m_create') }}" class="nav-link">

                                    <p>Add Motors</p>
                                    <i class="fa fa-circle nav-icon"></i>
                                  </a>
                                </li>
                                <li class="nav-item">
                                  <a href="{{ url('motor') }}" class="nav-link">

                                    <p>Show Motors</p>
                                     <i class="fa fa-circle nav-icon"></i>
                                  </a>
                                </li>
                              </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">


                                  <p>
                                    <i class="nav-icon fa fa-angle-right left"></i>
                                    maintenances Motors

                                  </p>
                                  <i class="nav-icon fa fa-file"></i>

                                </a>
                                <ul class="nav nav-treeview">
                                  <li class="nav-item">
                                    <a href="{{ url('ma_create') }}" class="nav-link">

                                      <p>Add maintenances Motors</p>
                                      <i class="fa fa-circle nav-icon"></i>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="{{ url('maintenances') }}" class="nav-link">

                                      <p>Show maintenances Motors</p>
                                       <i class="fa fa-circle nav-icon"></i>
                                    </a>
                                  </li>
                                </ul>
                              </li>
                            <li class="nav-item">
                              <a href="#" class="nav-link">


                                <p>
                                  <i class="left fa fa-angle-right"></i>
                                  Trip



                                </p>
                                <i class="nav-icon fa fa-file"></i>

                              </a>
                              <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="{{ url('t_create') }}" class="nav-link">

                                    <p>Add Trip</p>
                                    <i class="fa fa-circle nav-icon"></i>
                                  </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('t_import') }}" class="nav-link">

                                      <p>import Trip</p>
                                      <i class="fa fa-circle nav-icon"></i>
                                    </a>
                                  </li>
                                <li class="nav-item">
                                  <a href="{{ url('tripe') }}" class="nav-link">

                                    <p>Show Tripe</p>
                                     <i class="fa fa-circle nav-icon"></i>
                                  </a>
                                </li>
                              </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">


                                  <p>
                                    <i class="nav-icon fa fa-angle-right left"></i>
                                    Expenses

                                  </p>
                                  <i class="nav-icon fa fa-file"></i>

                                </a>
                                <ul class="nav nav-treeview">
                                  <li class="nav-item">
                                    <a href="{{ url('e_create') }}" class="nav-link">

                                      <p>Add Expenses</p>
                                      <i class="fa fa-circle nav-icon"></i>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="{{ url('expenses') }}" class="nav-link">

                                      <p>Show Expenses</p>
                                       <i class="fa fa-circle nav-icon"></i>
                                    </a>
                                  </li>
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="{{ url('commission') }}" class="nav-link">


                                  <p>
                                  
                                   Show commission

                                  </p>
                                  <i class="nav-icon fa fa-file"></i>

                                </a>
                               
                              </li>

                        











                                          </ul>

                          </li>


                </ul>
            </nav>

            @yield('content1')
            <!-- /.sidebar-menu -->
        </div>


    </div>
   <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2022-2023 <a href="#">Seamless</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>
             <!-- /.content-wrapper -->

    <!-- /.sidebar -->
</aside>


<!-- jQuery -->
<script src="main_files/jquery_003.js"></script>
<!-- Bootstrap 4 -->
<script src="main_files/bootstrap.js"></script>
<!-- SlimScroll -->
<script src="main_files/jquery.js"></script>
<!-- FastClick -->
<script src="main_files/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="main_files/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="main_files/demo.js"></script>

<script src="main_files/bootstrap_002.js"></script>
<!-- jquery -->
<script src="main_files/jquery_002.js"></script>
<!-- star js -->
<script src="main_files/ratingstar.js"></script>




<script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'}),_trfd.push({'ap':'cpsh'},{'server':'a2plcpnl0756'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.</script><script src="main_files/tcc_l.js"></script>
</div></div></div></body></html>
