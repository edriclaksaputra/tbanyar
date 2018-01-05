@include('layout.header')

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">{{$namaBarang}}</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-8">
                        @if(count($itemSupplier) == 0)
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2>Supplier belum ada</h2>
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <form method="post" action="listbarangsupplier.detail.addsupplier">
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-primary">+ Tambah Supplier Baru</button>
                                    <input type="hidden" name="iditem" value="{{$idbarang}}">
                                </form>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                        @else
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                List Supplier {{$itemSupplier[0]->items->nama}}
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th class="col-lg-1">No.</th>
                                                <th class="col-lg-3">Nama Supplier</th>
                                                <th class="col-lg-2">Harga Beli</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($itemSupplier as $itemSup)
                                            <tr class="odd gradeX">
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$itemSup->suppliers->nama}}</td>
                                                <td>{{$itemSup->hargabeli}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                                <form method="post" action="listbarangsupplier.detail.addsupplier">
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-primary">+ Tambah Supplier Baru</button>
                                    <input type="hidden" name="iditem" value="{{$itemSupplier[0]->items_id}}">
                                </form>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        @endif
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
