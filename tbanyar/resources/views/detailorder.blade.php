@include('layout.header')
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Pembelian</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Input Detail Order
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <form role="form">
                                        <div class="row">
                                            <div class="form-group col-lg-4">
                                                <label>No. PO &nbsp &nbsp   &nbsp       &nbsp   &nbsp</label>
                                                <input type="text" name="kodesupplier">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-4">
                                                <label>Hari/Tanggal</label>
                                                <input type="text" name="kodesupplier">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-4">
                                                <label>Supplier &nbsp&nbsp  &nbsp   &nbsp</label>
                                                <input type="text" name="kodesupplier" value="Semen Tiga Roda" disabled>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-4">
                                                <label>Keterangan Pesanan</label>
                                                <br>
                                                <textarea name="keterangan" rows="3" cols="50"></textarea>
                                            </div>
                                        </div>

                                        <hr>
                                        <div class="alert alert-warning">
                                        <strong>List Barang Semen Tiga Roda</strong>
                                        </div>
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th class="col-lg-1">No.</th>
                                                    <th class="col-lg-3">Nama Barang</th>
                                                    <th class="col-lg-3">Harga Barang Satuan</th>
                                                    <th class="col-lg-2">Jumlah</th>
                                                    <th class="col-lg-2">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="odd gradeX">
                                                    <td>1</td>
                                                    <td><label id="nama">Kayu Balok Tiga Roda</label></td>
                                                    <td><label id="harga">125000</label></td>
                                                    <td class="center"><input type="number" name="banyak" id="banyak" value="0"></td>
                                                    <td class="center"><button type="button" class="btn btn-info fa fa-plus" onclick="addBarangBeli(document.getElementById('nama').innerHTML, document.getElementById('harga').innerHTML, document.getElementById('banyak').value)">Add</button></td>
                                                </tr>
                                                <tr class="even gradeC">
                                                    <td>2</td>
                                                    <td>Plin Tegel Warna Tiga Roda</td>
                                                    <td><label id="harga">90000</label></td>
                                                    <td class="center"><input type="number" name="banyak" id="banyak" value="0"></td>
                                                    <td class="center"><button type="button" class="btn btn-info fa fa-plus">Add</button></td>
                                                </tr>
                                                <tr class="odd gradeA">
                                                    <td>3</td>
                                                    <td>Marmer Alam Lampung Ukuran Besar Tiga Roda</td>
                                                    <td><label id="harga">150000</label></td>
                                                    <td class="center"><input type="number" name="banyak" id="banyak" value="0"></td>
                                                    <td class="center"><button type="button" class="btn btn-info fa fa-plus">Add</button></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                    <hr>
                                    <form role="role">
                                        <div class="alert alert-info">
                                        <strong>List Barang Dibeli</strong>
                                        </div>
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="col-lg-1">No.</th>
                                                    <th class="col-lg-3">Nama Barang</th>
                                                    <th class="col-lg-3">Harga Barang</th>
                                                    <th class="col-lg-2">Jumlah</th>
                                                    <th class="col-lg-2">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tablebarangbeli">
                                                <!-- Diisi lewat JavaScript -->
                                            </tbody>
                                        </table>
                                        <div class="row text-right">
                                            <label class="col-lg-10 text-right">Total :</label><p class="col-lg-2 text-left" id="totalbelanja">0</p>
                                        </div>
                                        <button type="button" class="btn btn-success fa fa-check"> Order</button>
                                    </form>
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
            var counter = 0;
            var total = 0;
            function addBarangBeli(namaBarang,harga,banyak){
                var table = document.getElementById('tablebarangbeli');
                var row = table.insertRow(counter);

                var cell0 = row.insertCell(0);
                var cell1 = row.insertCell(1);
                var cell2 = row.insertCell(2);
                var cell3 = row.insertCell(3);
                var cell4 = row.insertCell(4);

                cell0.innerHTML = counter+1;
                cell1.innerHTML = namaBarang;
                cell2.innerHTML = harga;
                cell3.innerHTML = '<label id="banyakBarangDibeli">'+banyak+'</label>'
                cell4.innerHTML = harga*banyak;

                total = total+(harga*banyak);
                var totalbelanja = document.getElementById('totalbelanja');
                totalbelanja.innerHTML = total;
                console.log(total);

                counter++;
            }
        </script>
        <script>
            function removeBarangBeli(counter){
                console.log(counter);
                // var table = document.getElementById('tablebarangbeli');
                // table.deleteRow(counter);
            }
        </script>
    </body>
</html>
