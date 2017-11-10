@include('layout.header')

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Penjualan</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Detail Penjualan
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <form method="post" action="penjualan/addfaktur">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="form-group col-lg-4">
                                                <label>Hari/Tanggal</label>
                                                <input type="text" name="tanggal">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-4">
                                                <label>Konsumen &nbsp&nbsp</label>
                                                <input type="text" name="namakonsumen">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-4">
                                                <label>Alamat &nbsp &nbsp&nbsp  &nbsp&nbsp&nbsp</label>
                                                <input type="text" name="alamatkonsumen">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-4">
                                                <label>Keterangan / Request</label>
                                                <textarea class="form-group" name="keterangan" rows="3" cols="50"></textarea>
                                            </div>
                                        </div>
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
                                            <tbody class="form-group" id="tablebarangbeli">
                                                <!-- Diisi lewat JavaScript -->
                                            </tbody>
                                        </table>
                                        <div class="form-group row text-right">
                                            <label class="col-lg-10 text-right">Total :</label><p class="col-lg-2 text-left" id="totalbelanja">0</p>
                                            <input type="hidden" name="belanjatotal" id="belanjatotal">
                                        </div>
                                        <button type="submit" class="btn btn-success fa fa-check"> Purchase</button>
                                    </form>
                                        <hr>
                                        <div class="alert alert-warning">
                                        <strong>List Barang</strong>
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
                                                @foreach($items as $item)
                                                <tr class="odd gradeX">
                                                    <td>{{$loop->iteration}}</td>
                                                    <input type="hidden" id="item_id{{$loop->iteration}}" name="item_id" value={{$item->id}}>
                                                    <td><label id="nama{{$loop->iteration}}">{{$item->nama}}</label></td>
                                                    <td><label id="harga{{$loop->iteration}}">{{$item->hargajual}}</label></td>
                                                    <td class="center"><input type="number" name="banyak" id="banyak{{$loop->iteration}}" value="0"></td>
                                                    <td class="center"><button type="button" class="btn btn-info fa fa-plus" onclick="addBarangBeli(document.getElementById('nama{{$loop->iteration}}').innerHTML, document.getElementById('harga{{$loop->iteration}}').innerHTML, document.getElementById('banyak{{$loop->iteration}}').value, document.getElementById('item_id{{$loop->iteration}}').value)">Add</button></td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    <hr>
                                    <form role="role">
                                        
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
            function addBarangBeli(namaBarang,harga,banyak,item_id){

                var table = document.getElementById('tablebarangbeli');
                var row = table.insertRow(counter);

                var cell0 = row.insertCell(0);
                var cell1 = row.insertCell(1);
                var cell2 = row.insertCell(2);
                var cell3 = row.insertCell(3);
                var cell4 = row.insertCell(4);

                cell0.innerHTML = counter+1;
                cell1.innerHTML = '<label>'+namaBarang+'</label><input type="hidden" name="item_id'+counter+'" value="'+item_id+'"><input type="hidden" name="counter" value="'+counter+'">';
                cell2.innerHTML = '<label>'+harga+'</label>';
                cell3.innerHTML = '<label>'+banyak+'</label><input type="hidden" name="banyakBarang'+counter+'" value="'+banyak+'">';
                cell4.innerHTML = '<label>'+harga*banyak+'</label><input type="hidden" name="totalbelanjaan'+counter+'" value="'+harga*banyak+'">';

                total = total+(harga*banyak);
                var totalbelanja = document.getElementById('totalbelanja');
                totalbelanja.innerHTML = total;

                var belanjatotal = document.getElementById('belanjatotal');
                belanjatotal.value = total;

                counter++;
            }
        </script>
    </body>
</html>
