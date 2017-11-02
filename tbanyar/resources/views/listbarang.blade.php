@include('layout.header')

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">List Barang</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                List Detail Barang
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th class="col-lg-1">No.</th>
                                                <th class="col-lg-3">Nama Barang</th>
                                                <th class="col-lg-3">Harga Beli</th>
                                                <th class="col-lg-2">Harga Jual</th>
                                                <th class="col-lg-1">Stock</th>
                                                <th class="col-lg-3">Supplier</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd gradeX">
                                                <td>1</td>
                                                <td>Pasir Urug</td>
                                                <td>200000</td>
                                                <td class="center">210000</td>
                                                <td class="center">20</td>
                                                <td class="center">Semen Tiga Roda</td>
                                            </tr>
                                            <tr class="even gradeC">
                                                <td>2</td>
                                                <td>Abu Batu</td>
                                                <td>150000</td>
                                                <td class="center">165000</td>
                                                <td class="center">35</td>
                                                <td class="center">Kopo Jaya</td>
                                            </tr>
                                            <tr class="odd gradeA">
                                                <td>3</td>
                                                <td>Bilik Bambu Hitam Variasi</td>
                                                <td>150000</td>
                                                <td class="center">175000</td>
                                                <td class="center">48</td>
                                                <td class="center">Angkasa Putra</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
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
