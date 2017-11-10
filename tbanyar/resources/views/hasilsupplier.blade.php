@include('layout.header')

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Evaluasi Supplier</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <!-- /.col-lg-8 -->
                    <div class="col-lg-5">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Hasi Alternatif
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Alamat</th>
                                                <th>No. Telp</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(count($suppliers) == 1)
                                            <tr>
                                                <td>1</td>
                                                <td>{{$suppliers->nama}}</td>
                                                <td>{{$suppliers->alamat}}</td>
                                                <td>{{$suppliers->telp}}</td>
                                            </tr>
                                            @else
                                            @foreach($listSupplierSorted as $supplier)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$supplier->nama}}</td>
                                                <td>{{$supplier->alamat}}</td>
                                                <td>{{$supplier->telp}}</td>
                                            </tr>
                                            @endforeach
                                            @endif
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
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
