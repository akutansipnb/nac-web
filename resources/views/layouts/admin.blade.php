<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>NAC | Dashboard</title>
  <!-- Favicon -->
  <link rel="icon" href="{{asset('img/brand/favicon.pn')}}" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href={{asset('vendor/nucleo/css/nucleo.css')}} type="text/css">
  <link rel="stylesheet" href={{asset('vendor/@fortawesome/fontawesome-free/css/all.min.css')}} type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href={{asset('css/argon.css?v=1.2.0')}} type="text/css">
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src={{asset('img/brand/logo.png')}} class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link {{ Route::is('admin.dashboard') ? 'active' : '' }}" href={{ route('admin.dashboard') }}>
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Route::is('university.index') ? 'active' : '' }}" href={{route('university.index')}}>
                <i class="ni ni-spaceship text-warning"></i>
                <span class="nav-link-text">Perguruan Tinggi</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Route::is('school.index') ? 'active' : '' }}" href={{route('school.index')}}>
                <i class="ni ni-tie-bow text-danger"></i>
                <span class="nav-link-text">Sekolah</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Route::is('contestants.index') ? 'active' : '' }}" href={{route('contestants.index')}}>
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Peserta</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Route::is('mentors.index') ? 'active' : '' }}" href="{{ route('mentors.index') }}">
                <i class="ni ni-briefcase-24 text-info"></i>
                <span class="nav-link-text">Pendamping</span>
              </a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link" href="examples/tables.html">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Tables</span>
              </a>
            </li> --}}
            <li class="nav-item">
              <a class="nav-link {{ Route::is('member.index') ? 'active' : '' }}" href={{route('member.index')}}>
                <i class="ni ni-badge text-orange"></i>
                <span class="nav-link-text">Admin</span>
              </a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link" href="examples/login.html">
                <i class="ni ni-key-25 text-info"></i>
                <span class="nav-link-text">Login</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/register.html">
                <i class="ni ni-circle-08 text-pink"></i>
                <span class="nav-link-text">Register</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/upgrade.html">
                <i class="ni ni-send text-dark"></i>
                <span class="nav-link-text">Upgrade</span>
              </a>
            </li> --}}
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Web Setting</span>
          </h6>
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
              <a class="nav-link {{ Route::is('events.index') ? 'active' : '' }}" href={{route('events.index')}}>
                <i class="ni ni-trophy text-orange"></i>
                <span class="nav-link-text">Perlombaan</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link {{ Route::is('blogs.index') ? 'active' : '' }}" href={{route('blogs.index')}}>
                <i class="ni ni-collection text-orange"></i>
                <span class="nav-link-text">Berita</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link {{ Route::is('schedules.index') ? 'active' : '' }}" href="{{ route('schedules.index') }}">
                <i class="ni ni-calendar-grid-58 text-info"></i>
                <span class="nav-link-text">Lintas Waktu</span>
              </a>
            </li>


            <li class="nav-item">
              <a class="nav-link {{ Route::is('landing.index') ? 'active' : '' }}" href="{{ route('landing.index') }}" >
                <i class="ni ni-settings-gear-65 text-danger"></i>
                <span class="nav-link-text">Landing Page Setting</span>
              </a>
            </li>

          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>

          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    @if (Auth::user()->img_url == NULL)
                      <img alt="Image placeholder" src="{{asset('img/icons/users.png')}}">
                    @else
                      <img alt="Image placeholder" src="{{asset(Auth::user()->img_url)}}">
                    @endif
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold"> {{ Auth::user()->name }} </span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                {{-- <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-calendar-grid-58"></i>
                  <span>Activity</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-support-16"></i>
                  <span>Support</span>
                </a> --}}
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="ni ni-user-run"></i>
                                        <span>Logout</span>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    @yield('content')
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src={{asset('vendor/jquery/dist/jquery.min.js')}}></script>
  <script src={{asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}></script>
  <script src={{asset('vendor/js-cookie/js.cookie.js')}}></script>
  <script src={{asset('vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}></script>
  <script src={{asset('vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}></script>
  <!-- Optional JS -->
  <script src={{asset('vendor/chart.js/dist/Chart.min.js')}}></script>
  <script src={{asset('vendor/chart.js/dist/Chart.extension.js')}}></script>
  <!-- Argon JS -->
  <script src={{asset('js/argon.js?v=1.2.0')}}></script>
  <script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
</body>

</html>
