<aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Brand Logo -->
   <a href="#" class="brand-link">
      <img src="{{ asset('assets/img/dpd-abi-kab-malang.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light" style="font-size:15px">SIMA DPD ABI Kab.Malang</span>
   </a>

   <!-- Sidebar -->
   <div class="sidebar">
      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
               <a href="{{ route('admin.dashboard') }}" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                     Dashboard
                  </p>
               </a>
            </li>
            <li class="nav-item">
               <a href="{{ route('admin.user.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-user-alt"></i>
                  <p>
                     Data User
                  </p>
               </a>
            </li>
            <li class="nav-item">
               <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-layer-group"></i>
                  <p>
                     Data Level
                  </p>
               </a>
            </li>
         </ul>
      </nav>
      <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
</aside>
