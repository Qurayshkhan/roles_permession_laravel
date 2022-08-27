@extends("layouts.admin")

@section("content")


        <div class="page-wrapper">

<div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Register CUstomers</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                          <thead>
                                           <tr>
                                                <td>#.</td>
                                                <td>Name</td>
                                                <td>Email</td>
                                                <td>Address</td>
                                                <td>Mobile</td>
                                                <td>Gender</td>
                                                <td>Date of Birth</td>
                                                <td>CNIC</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($User as $User)
                                            <tr>
                                            <td>{{ $User->id }}</td>
                                            <td>{{ $User->name }}</td>
                                            <td>{{ $User->email }}</td>
                                            <td>{{ $User->address }}</td>
                                            <td>{{ $User->mobile }}</td>
                                            <td>{{ $User->gender }}</td>
                                            <td>{{ $User->dob }}</td>
                                            <td>{{ $User->cnic }}</td>
                                         
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