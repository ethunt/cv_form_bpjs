<!-- start: TOPBAR -->
<header class="topbar navbar navbar-inverse navbar-fixed-top inner">
    <!-- start: TOPBAR CONTAINER -->
    <div class="container" style="background-color: #00a859;">
        <div class="navbar-header">
            <a class="sb-toggle-left hidden-md hidden-lg" href="#main-navbar">
                <i class="fa fa-bars"></i>
            </a>
            <!-- start: LOGO -->
            <a class="navbar-brand" href="{{URL::to('home')}}">
              <img src="" class="center" style="height: 30px">
            </a>
            <!-- end: LOGO -->
        </div>
        <div class="topbar-tools">
            <!-- start: TOP NAVIGATION MENU -->
            <ul class="nav navbar-right">
                <!-- start: USER DROPDOWN -->
                {{--  <li class="dropdown current-user">
                    <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
                        <!--img src="/assets/images/anonymous.jpg" class="img-circle" alt="" width="30"> <span class="username hidden-xs"--></span> <i class="fa fa-caret-down "></i>
                    </a>
                    <ul class="dropdown-menu dropdown-dark">
                      <!--li>
                          <a href="{{ URL::to('changePassword') }}">
                              Change Password
                          </a>
                      </li-->
                      <li>
                          <a href="{{ URL::to('logout') }}">
                              Log Out
                          </a>
                      </li>
                    </ul>
                </li>  --}}
            </ul>
            <!-- end: TOP NAVIGATION MENU -->
        </div>
    </div>
    <!-- end: TOPBAR CONTAINER -->
</header>
<!-- end: TOPBAR -->
