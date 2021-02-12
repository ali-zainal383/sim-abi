<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">

   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <title>@yield('title')</title>

   <!-- Tell the browser to be responsive to screen width -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
   <!-- Ionicons -->
   <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
   <!-- Theme style -->
   <link rel="stylesheet" href="{{ asset('assets/css/adminlte.min.css') }}">
   <!-- Google Font: Source Sans Pro -->
   <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

   @stack('css')

</head>

<body class="hold-transition sidebar-mini layout-fixed">
   <div class="wrapper">

      <!-- Navbar -->
      @include('layouts.partial.header')
      <!-- /.navbar -->

      @switch(Auth::user()->role->id)
          @case(1)
              @include('admin.sidebar')
              @break
          @case(2)
              @include('ketua.sidebar')
              @break
          @default
              Auth::logout()
              return route('login')
      @endswitch

      {{-- <!-- Main Sidebar Container -->
      @include('layouts.backend.partial.sidebar') --}}

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
         @yield('content')
      </div>
      <!-- /.content-wrapper -->
      @include('layouts.partial.footer')

   </div>
   <!-- ./wrapper -->

   <!-- jQuery -->
   <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
   <!-- jQuery UI 1.11.4 -->
   <script src="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
   <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
   <script>
      $.widget.bridge('uibutton', $.ui.button)

   </script>
   <!-- Bootstrap 4 -->
   <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
   <!-- AdminLTE App -->
   <script src="{{ asset('assets/js/adminlte.js') }}"></script>

   @stack('js')

</body>

</html>
