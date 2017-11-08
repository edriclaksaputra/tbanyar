@include('layout.header')

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Input Supplier Baru</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Data Supplier
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body col">
                                <div class="row col-lg-12">
                                    <form role="form" novalidate="novalidate" method="post" enctype="multipart/form-data" action="inputsupplier/addnewsupplier">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="form-group col-lg-4">
                                                <label>Nama Supplier &nbsp</label>
                                                <input type="text" name="namasupplier">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-4">
                                                <label>Alamat &nbsp</label>
                                                <textarea rows="4" name="alamatsupplier" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-4">
                                                <label>Nomor Telepon &nbsp</label>
                                                <input type="text" name="telpsupplier">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-4">
                                                <button type="submit" class="btn btn-success">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        @include('layout.footer')

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
        </script>
    </body>
</html>
