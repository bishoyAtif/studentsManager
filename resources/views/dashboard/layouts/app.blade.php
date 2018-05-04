<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('dashboard/images/favicon.png') }}">
  <title>@yield('title') | Dashboard</title>
  <link href="{{ asset('dashboard/css/lib/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('dashboard/css/helper.css') }}" rel="stylesheet">
  <link href="{{ asset('dashboard/css/style.css') }}" rel="stylesheet">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
  <!--[if lt IE 9]>
  <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar">
  <div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
      <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
  </div>
  <div id="main-wrapper">
    <div class="header">
      <nav class="navbar top-navbar navbar-expand-md navbar-light">
        <div class="navbar-header">
          <a class="navbar-brand" href="{{ route('dashboard.home') }}">
            <span><img width="131" height="35" src="{{ asset('dashboard/images/text-logo.png') }}" alt="homepage" class="dark-logo" /></span>
          </a>
        </div>
        <div class="navbar-collapse">
          <ul class="navbar-nav mr-auto mt-md-0"></ul>
          @if(auth()->user())
            <ul class="navbar-nav my-lg-0">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-muted" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('dashboard/images/5.jpg') }}" alt="user" class="profile-pic" /></a>
                <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                  <ul class="dropdown-user">
                    <li><a>
                      <form action="{{ route('dashboard.logout') }}" method="POST">
                        @csrf
                        <button class="btn btn-link btn-sm" type="submit"><i class="fa fa-power-off"></i> Logout</button>
                      </form>
                    </a></li>
                  </ul>
                </div>
              </li>
            </ul>
          @endif
        </div>
      </nav>
    </div>
    @if(auth()->user())
      <div class="left-sidebar">
        <div class="scroll-sidebar">
          <nav class="sidebar-nav">
            <ul id="sidebarnav">
              <li class="nav-devider"></li>
              <li class="active"><a class="has-arrow" href="#" aria-expanded="false"><span class="hide-menu">Entities<span class="label label-rouded label-primary pull-right">2</span></span></a>
                <ul aria-expanded="false" class="collapse in">
                  <li><a href="{{ route('dashboard.departments.index') }}">Departments</a></li>
                  <li><a href="{{ route('dashboard.students.index') }}">Students</a></li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    @endif
    <div class="page-wrapper">
      <div class="row page-titles">
        <div class="col-md-5 align-self-center">
          <h3 class="text-info">@yield('title')</h3>
        </div>
      </div>
      <div class="container-fluid">
        @yield('content')
      </div>
    </div>
    <footer class="footer"> © 2018 All rights reserved.</footer>
  </div>
  </div>
  <script src="{{ asset('dashboard/js/lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('dashboard/js/lib/bootstrap/js/popper.min.js') }}"></script>
  <script src="{{ asset('dashboard/js/lib/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('dashboard/js/jquery.slimscroll.js') }}"></script>
  <script src="{{ asset('dashboard/js/sidebarmenu.js') }}"></script>
  <script src="{{ asset('dashboard/js/lib/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
  <script src="{{ asset('dashboard/js/scripts.js') }}"></script>
  <script src="{{ asset('dashboard/js/custom.min.js') }}"></script>
  <script src="{{ asset('dashboard/js/lib/datatables/datatables.min.js') }}"></script>
  <script src="{{ asset('dashboard/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js') }}"></script>
  @yield('footerScripts')
</body>
