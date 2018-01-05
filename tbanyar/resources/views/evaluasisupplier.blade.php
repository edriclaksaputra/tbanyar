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
                    <div class="col-lg-7">
                        <div class="panel panel-default">
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th class="col-lg-1">No.</th>
                                                <th class="col-lg-3">Nama Barang</th>
                                                <th class="col-lg-3">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($items as $item)
                                            <tr class="odd gradeX">
                                                <td>{{$loop->iteration}}</td>
                                                <td id="namabarang{{$loop->iteration}}">{{$item->nama}}</td>
                                                <td><button type="button" class="btn btn-info" onclick="pilihBarang(document.getElementById('namabarang{{$loop->iteration}}').innerHTML, {{$item->id}})">Pilih Barang</button></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                                <hr>
                                <form role="form" method="post" action="rekomendsupplier">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="form-group col-lg-12">
                                            <div class="form-group alert alert-success">
                                                <label class="col-lg-2">Nama Barang</label>
                                                <input type="text" name="namabarang" id="namaBarangDipilih" disabled>
                                                <input type="hidden" name="item_id" id="item_id" value="0">
                                            </div>
                                            <div class="form-group panel panel-default">
                                                <div class="panel-heading">
                                                    Parameter
                                                </div>
                                                <!-- /.panel-heading -->
                                                <div class="form-group panel-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th>Prioritas</th>
                                                                    <th>Aspek</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>
                                                                        <select class="form-group" name="aspek1">
                                                                            <option value="harga-0.4" selected>Harga</option>
                                                                            <option value="kecepatan-0.4">Kecepatan Pengiriman</option>
                                                                            <option value="jatuhtempo-0.4">Jatuh Tempo</option>
                                                                            <option value="ketersediaan-0.4">Ketersediaan Barang</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>
                                                                        <select class="form-group" name="aspek2">
                                                                            <option value="harga-0.3">Harga</option>
                                                                            <option value="kecepatan-0.3" selected>Kecepatan Pengiriman</option>
                                                                            <option value="jatuhtempo-0.3">Jatuh Tempo</option>
                                                                            <option value="ketersediaan-0.3">Ketersediaan Barang</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>3</td>
                                                                    <td>
                                                                        <select class="form-group" name="aspek3">
                                                                            <option value="harga-0.2">Harga</option>
                                                                            <option value="kecepatan-0.2">Kecepatan Pengiriman</option>
                                                                            <option value="jatuhtempo-0.2" selected>Jatuh Tempo</option>
                                                                            <option value="ketersediaan-0.2">Ketersediaan Barang</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>4</td>
                                                                    <td>
                                                                        <select class="form-group" name="aspek4">
                                                                            <option value="harga-0.1">Harga</option>
                                                                            <option value="kecepatan-0.1">Kecepatan Pengiriman</option>
                                                                            <option value="jatuhtempo-0.1">Jatuh Tempo</option>
                                                                            <option value="ketersediaan-0.1" selected>Ketersediaan Barang</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- /.table-responsive -->
                                                </div>
                                                <!-- /.panel-body -->
                                            </div>
                                            <button type="submit" class="btn btn-success">Show Result</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-8 -->
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
            function pilihBarang(namaBarang, item_id){
                var namaBarangDipilih = document.getElementById('namaBarangDipilih');
                namaBarangDipilih.value = namaBarang;

                var barang_id = document.getElementById('item_id');
                barang_id.value = item_id;
            }
        </script>
    </body>
</html>
