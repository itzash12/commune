
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  <base href="{{\URL::to('/')}}">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="/actualites">Actualites </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{route('demandes.create')}}">Les Demandes </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Les Reclamation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">autorisations urbaines</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">L'hygiene</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">L'hygiene</a>
          </li>
          
      </ul>
    
      <div class="nav-item dropdown" >
        
				<a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action">
           {{Auth::user()->name}}<b class="caret"></b></a>
				<div class="dropdown-menu">
					<a href="/profile_admin" class="nav-link"><i class="fa fa-user-o"></i> Profile</a></a>
					<a href="/settings_admin" class="nav-link"><i class="fa fa-sliders"></i> Settings</a></a>
					<div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ route('logout') }}"
          onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
           {{ __('Logout') }}
       
  
       <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
           @csrf
       </form>
      </a>
				</div>
			</div>
      
      
      </li>
      
    </ul>

    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{\URL::to('/')}}" class="brand-link">
      <img src="dist/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Commune Thala</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{Auth::user()->name}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a>{{Auth::user()->name}}</a>
        </div>
      </div>

     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               
               <li class="nav-item">
                <a href="/actualites" class="nav-link">
                  <p>
                    Actualites
                  </p>
                </a>
              </li><li class="nav-item">
                <a href="{{route('demandes.create')}}" class="nav-link">
                  <p>
                    Les Demandes
                  </p>
                </a>
              </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <p>
                Les Reclamation
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <p>
                Autorisations Urbaines
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <p>
                L'hygiene
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
    
  </aside>

      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      @yield('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

  
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  
</div>
  
</div>


<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>


