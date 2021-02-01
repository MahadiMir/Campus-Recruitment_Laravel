<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('admin')}}/images/favicon.ico" type="image/ico" />

    <title>Student Recruitment! | </title>

    <!-- Bootstrap -->
    <link href="{{asset('admin')}}/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('admin')}}/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('admin')}}/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('admin')}}/iCheck/skins/flat/green.css" rel="stylesheet">
    
    <!-- bootstrap-progressbar -->
    <link href="{{asset('admin')}}/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->


    <link href="{{asset('admin')}}/css/custom.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/1.6.0/css/buttons.dataTables.min.css" rel="stylesheet">
     <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.3.2/ckeditor.js" ></script>
    <style type="text/css">
      .nav.side-menu>li>a 
      {
        margin-bottom: -10px;
      }
    </style>
    @stack('css')
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Student Recruitment !</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{ Auth::user()->name }}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li class="{{Request::is('home')? 'active': ''}}"><a href="{{route('home')}}"><i class="fa fa-home"></i> Home </span></a>
                    
                  </li>
                  <li class="{{Request::is('user*')? 'active': ''}}"><a  href="{{route('user_index')}}"><i class="fa fa-user"></i> User</span></a>
                    
                  </li>
                  <li class="{{Request::is('admin-add')? 'active': ''}}">
                      <a href="{{route('user_admin_add')}}"> <i class="fa fa-user"></i> Admin Add</span>
                      </a>
                    
                  </li>

                  <li class="{{Request::is('job-pos*')? 'active': ''}}">
                      <a href="{{route('job_post_index')}}"><i class="fa fa-envira" aria-hidden="true"></i></i>Job Post</span>
                      </a>
                  </li>
                   <li class="{{Request::is('student-profile*')? 'active': ''}}">
                      <a href="{{route('student_profile_index')}}"><i class="fa fa-yelp" aria-hidden="true"></i></i></i>Student Profile</span>
                      </a>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                  <li>
                      <a  class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                           <i class="fa fa-sign-out"></i>{{ __('Logout') }}
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>
                  <div style="background: #EDEDED;position: absolute;z-index:1350 !important;font-size: 30px" class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a  class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

       
        <div style="background: white" class="right_col" role="main">
         
        
            @yield('content')
                
        </div>
       
      </div>
    </div>

   

    <!-- Custom Theme Scripts -->
     <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>  
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
      function a() 
      {
        $('#example').DataTable( {
        dom: 'Bfrtip',
          buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
          } );
      }
      setTimeout(a(),3000);
    </script>
    <script type="text/javascript">
        
      var ckEditorID;

      ckEditorID = 'ckeExample';

      function fnConsolePrint()
      {
    
        console.log(CKEDITOR.instances[ckEditorID].getData());
      }
      CKEDITOR.config.forcePasteAsPlainText = true;
      CKEDITOR.replace( ckEditorID,
      {
          toolbar :
          [
            {
              items : [ 'Bold','Italic','Underline','Strike','-','RemoveFormat' ]
            },
            {
              items : [ 'Format']
            },
            {
              items : [ 'Link','Unlink' ]
            },
            {
              items : [ 'Indent','Outdent','-','BulletedList','NumberedList']
            },
            {
              items : [ 'Undo','Redo']
            }
          ]
      })
  </script>
     @stack('js')
  </body>
</html>
