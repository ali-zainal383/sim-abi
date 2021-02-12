@extends('layouts.app')

@section('title', 'Data User')

@push('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endpush

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
<div class="container-fluid">
   <div class="row mb-2">
      <div class="col-sm-6">
         <h1>Users</h1>
      </div>
      <div class="col-sm-6">
         <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data user</li>
         </ol>
      </div>
   </div>
</div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-12">
            <div class="card">
               <div class="card-header">
                  <h3 class="card-title">DataTable with minimal features & hover style</h3>
               </div>
               <!-- /.card-header -->
               <div class="card-body">
                  <table id="userDataTable" class="table table-bordered table-hover">
                     <thead>
                        <tr>
                           <th>Rendering engine</th>
                           <th>Browser</th>
                           <th>Platform(s)</th>
                           <th>Engine version</th>
                           <th>CSS grade</th>
                        </tr>
                     </thead>
                     <tbody>
                     </tbody>                 
                  </table>
               </div>
               <!-- /.card-body -->
            </div>
            <!-- /.card -->
         </div>
         <!-- /.col -->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container-fluid -->
</section>
@endsection

@push('js')
<!-- DataTables -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script>
  $(function () {
    $('#userDataTable').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
@endpush
