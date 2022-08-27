@extends('layouts.admin')

@section('content')


<div class="page-wrapper">
 
 <!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<!-- Custom CSS -->
<link rel="stylesheet" type="text/css" href="../../assets/extra-libs/multicheck/multicheck.css">
<link href="../../assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
<link href="../../dist/css/style.min.css" rel="stylesheet">

</head>

<body>

<div class="card">
                     <div class="card-body">
                         <h5 class="card-title">Bookings</h5>
                         <div class="table-responsive">
                             <table id="zero_config" class="table table-striped table-bordered">
                                   <thead>
                                     <tr>
                                         <td>#.</td>
                                         <td>Booking Date</td>
                                         <td>User</td>
                                         <td>Hall</td>
                                         <td>Actions</td>
                                         </tr>

                                        </thead>
                                        <tbody>
                                         @foreach ($Booking as $Bookings)
                                         <tr>
                                             <td>{{ $Bookings->id }}</td>

                                             <td>{{ $Bookings->booking_date }}</td>
                                             <td>{{ $Bookings->user ? $Bookings->user->name : "" }}</td>
                                             <td>{{ $Bookings->hall ? $Bookings->hall->name : ""  }}</td>
                                         <td>    <div>
{{--                                                 <a href="{{ route('bookingedit.show', $Bookings->id) }}" class="btn btn-success">Edit</a>--}}
<a href="{{ route('bookingdestroy.show', $Bookings->id) }}" class="btn btn-danger">Delete</a>
                                                 <a href="{{ route("adminrating.show", $Bookings->id) }}" class="btn btn-warning">Rating</a>
                                                 </div>
                                         </td>
{{--                                             {{ dd($Bookings->id) }}--}}

                                         </tr>
                                         @endforeach
                                 </tbody>

                             </table>
                         </div>

                     </div>
                 </div>
             </div>
         </div>

         <!-- ============================================================== -->
         <!-- End PAge Content -->
         <!-- ============================================================== -->
         <!-- ============================================================== -->
         <!-- Right sidebar -->
         <!-- ============================================================== -->
         <!-- .right-sidebar -->
         <!-- ============================================================== -->
         <!-- End Right sidebar -->
         <!-- ============================================================== -->
     </div>
     <!-- ============================================================== -->
     <!-- End Container fluid  -->
     <!-- ============================================================== -->
     <!-- ============================================================== -->
     <!-- footer -->
     <!-- ============================================================== -->
     <footer class="footer text-center">
     </footer>
     <!-- ============================================================== -->
     <!-- End footer -->
     <!-- ============================================================== -->
 </div>
 <!-- ============================================================== -->
 <!-- End Page wrapper  -->
 <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script src="../../dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="../../dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="../../dist/js/custom.min.js"></script>
<!-- this page js -->
<script src="../../assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
<script src="../../assets/extra-libs/multicheck/jquery.multicheck.js"></script>
<script src="../../assets/extra-libs/DataTables/datatables.min.js"></script>
<script>
 /****************************************
  *       Basic Table                   *
  ****************************************/
 $('#zero_config').DataTable();
</script>

</body>

</html>
</div>
@stop