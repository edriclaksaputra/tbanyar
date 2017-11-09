@include('layout.header')

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Validasi PO</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th class="col-lg-1">No.</th>
                                                <th class="col-lg-2">Tanggal PO</th>
                                                <th class="col-lg-2">Nomor PO</th>
                                                <th class="col-lg-3">Judul Pesanan</th>
                                                <th class="col-lg-2">Nama Supplier</th>
                                                <th class="col-lg-2">Validasi</th>
                                                <th class="col-lg-2">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($orders as $order)
                                            <tr class="odd gradeX">
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$order->tanggal}}</td>
                                                <td>{{$order->id}}</td>
                                                <td>{{$order->keterangan}}</td>
                                                <td class="center">{{$order->suppliers->nama}}</td>
                                                @if($order->status == 0)
                                                <td class="center"><button onclick="validasi('{{$order->id}}','{{$order->suppliers->nama}}')" type="submit" class="btn btn-warning" data-toggle="modal" data-target="#myModal">Validasi</button></td>
                                                <td class="center"><button style="color: red" type="button" class="btn btn-default disabled">Not Yet</button></td>
                                                @elseif($order->status == 1)
                                                <td class="center"><button type="button" class="btn btn-warning disabled">Validasi</button></td>
                                                <td class="center"><button type="button" class="btn btn-default btn-circle disabled"><i class="fa fa-check"></i></button></td>
                                                @endif
                                                <!-- <td class="center"><button type="button" class="btn btn-default btn-circle disabled"><i class="fa fa-check"></i></button></td> -->
                                            </tr>
                                            @endforeach
                                            <!-- <tr class="even gradeC">
                                                <td>2</td>
                                                <td>10 Agustus 2017</td>
                                                <td>1000002</td>
                                                <td>Keterangan pesanan dari gardu cahaya</td>
                                                <td>Gardu Cahaya</td>
                                                <td class="center"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">Validasi</button></td>
                                                <td class="center">Belum</td>
                                            </tr>
                                            <tr class="odd gradeA">
                                                <td>3</td>
                                                <td>10 Agustus 2017</td>
                                                <td>1000003</td>
                                                <td>Keterangan pesanan dari angkasa putra</td>
                                                <td>Angkasa Putra</td>
                                                <td class="center"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">Validasi</button></td>
                                                <td class="center">Belum</td>
                                            </tr> -->
                                        </tbody>
                                    </table>
                                    <!-- Modal -->
                                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="myModalLabel">Validasi PO</h4>
                                                </div>
                                                <div class="modal-body">
                                                    Apakah anda yakin untuk validasi PO nomor <strong><label id="nomorpo"></label></strong> atas nama Supplier <strong><label id="namasupplier"></label></strong> ?
                                                </div>
                                                <form role="role" novalidate="novalidate" method="post" enctype="multipart/form-data" action="validasipo/validateorder">
                                                    {{ csrf_field() }}
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                                        <button type="submit" class="btn btn-primary">Ya</button>
                                                    </div> 
                                                    <input type="hidden" id="idOrderKirim" name="idOrderKirim" value="0">
                                                </form>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->
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
        <script>
            function validasi(nomorpo,namasupplier){
                var modalnomorpo = document.getElementById('nomorpo');
                modalnomorpo.innerHTML = nomorpo;

                var modalnamasupplier = document.getElementById('namasupplier');
                modalnamasupplier.innerHTML = namasupplier;

                var idOrder = document.getElementById('idOrderKirim');
                idOrder.value = nomorpo;
            }
        </script>

    </body>
</html>
