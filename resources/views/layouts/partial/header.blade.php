<nav class="main-header navbar navbar-expand navbar-white navbar-light">
   <!-- Left navbar links -->
   <ul class="navbar-nav">
      <li class="nav-item">
         <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
         <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
         <a href="#" class="nav-link">Contact</a>
      </li>
   </ul>

   <!-- SEARCH FORM -->
   <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
         <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
         <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
               <i class="fas fa-search"></i>
            </button>
         </div>
      </div>
   </form>
   <!-- Right navbar links -->
   <ul class="navbar-nav ml-auto">
      <!-- User Account: style can be found in dropdown.less -->
      <li class="dropdown user user-menu">
         <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="{{ asset('assets/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
            <span class="hidden-xs">{{ Auth::user()->name }}</span>
         </a>
         <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
               <img src="{{ asset('assets/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
               <p>
                  {{ Auth::user()->name }}
                  <small>Member since Nov. 2012</small>
               </p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
               <div class="pull-right">
                  <a class="btn btn-default btn-flat" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                     Sing Out
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     @csrf
                  </form>
               </div>
            </li>
         </ul>
      </li>

   </ul>
</nav>
<!-- /.navbar -->
