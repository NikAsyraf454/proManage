
  

<!-- Left column -->
<div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <div class="square"></div>
          <h1>Pro - Manage</h1>
        </header>
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
            
        </div>
        
        <nav class="templatemo-left-nav">          
          <ul>
            <!-- <li><a href="#" class="active"><i class="fa fa-home fa-fw"></i>Dashboard</a></li> -->
            <!-- <li><a href="data-visualization.html"><i class="fa fa-bar-chart fa-fw"></i>Charts</a></li>
            <li><a href="data-visualization.html"><i class="fa fa-database fa-fw"></i>Data Visualization</a></li>
            <li><a href="maps.html"><i class="fa fa-map-marker fa-fw"></i>Maps</a></li>
            <li><a href="manage-users.html"><i class="fa fa-users fa-fw"></i>Manage Users</a></li>
            <li><a href="preferences.html"><i class="fa fa-sliders fa-fw"></i>Preferences</a></li> -->
            @if (Route::has('login'))
                <!-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block"> -->
                    @auth
                        <li><a href="{{ url('/home') }}"> Dashboard </a></li>
                        <li><a href="{{ url('/user/profile') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Profile Settings</a></li>
                        <li><a href="/studentList">Student List</a></li>
                        <li><a href="/projectList">Project List</a></li>
                        @php if(Auth::user()->usertype == 1) { @endphp
                        <li><a href="/userList">User List</a></li>
                        @php } @endphp
                        <li><a href="{{ url('/logout') }}"> logout </a></li>
                    @else
                        <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                        @endif
                        
                    @endauth
                <!-- </div> -->
                
            @endif
            <!-- <li><a href="login.html"><i class="fa fa-eject fa-fw"></i>Sign Out</a></li> -->
          </ul>  
        </nav>
      </div>
      <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <!-- <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
                <li><a href="">Projects</a></li>
                <li><a href="/studentList">Student List</a></li>
                <li><a href="">Overview</a></li>
                <li><a href="login.html">Sign in form</a></li>
              </ul>  
            </nav> 
          </div>
        </div> -->
        
