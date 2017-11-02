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
                                            <tr class="odd gradeX">
                                                <td>1</td>
                                                <td id="namabarang">Pasir Urug</td>
                                                <td><button type="button" class="btn btn-info" onclick="pilihBarang(document.getElementById('namabarang').innerHTML)">Pilih Barang</button></td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>2</td>
                                                <td>Sirtu</td>
                                                <td><button type="button" class="btn btn-info">Pilih Barang</button></td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>3</td>
                                                <td>Kayu Papan Borneo Super</td>
                                                <td><button type="button" class="btn btn-info">Pilih Barang</button></td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>4</td>
                                                <td>Bilik Bambu Hitam Varias</td>
                                                <td><button type="button" class="btn btn-info">Pilih Barang</button></td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>5</td>
                                                <td>Batu Gosok ( Apung )</td>
                                                <td><button type="button" class="btn btn-info">Pilih Barang</button></td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>6</td>
                                                <td>Karpet Kelas Baik LN</td>
                                                <td><button type="button" class="btn btn-info">Pilih Barang</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                                <hr>
                                <form role="form">
                                    <div class="row">
                                        <div class="form-group col-lg-12">
                                            <div class="alert alert-success">
                                                <label class="col-lg-2">Nama Barang</label>
                                                <input type="text" name="namabarang" id="namaBarangDipilih" disabled>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    Parameter
                                                </div>
                                                <!-- /.panel-heading -->
                                                <div class="panel-body">
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
                                                                        <select name="aspek1">
                                                                            <option value="harga" selected>Harga</option>
                                                                            <option value="kecepatan">Kecepatan Pengiriman</option>
                                                                            <option value="tempo">Jatuh Tempo</option>
                                                                            <option value="ketersediaan">Ketersediaan Barang</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>
                                                                        <select name="aspek1">
                                                                            <option value="harga">Harga</option>
                                                                            <option value="kecepatan" selected>Kecepatan Pengiriman</option>
                                                                            <option value="tempo">Jatuh Tempo</option>
                                                                            <option value="ketersediaan">Ketersediaan Barang</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>3</td>
                                                                    <td>
                                                                        <select name="aspek1">
                                                                            <option value="harga">Harga</option>
                                                                            <option value="kecepatan">Kecepatan Pengiriman</option>
                                                                            <option value="tempo" selected>Jatuh Tempo</option>
                                                                            <option value="ketersediaan">Ketersediaan Barang</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>4</td>
                                                                    <td>
                                                                        <select name="aspek1">
                                                                            <option value="harga">Harga</option>
                                                                            <option value="kecepatan">Kecepatan Pengiriman</option>
                                                                            <option value="tempo">Jatuh Tempo</option>
                                                                            <option value="ketersediaan" selected>Ketersediaan Barang</option>
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
                                            <button type="button" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
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
                                            <tr>
                                                <td>1</td>
                                                <td>Semen Tiga Roda</td>
                                                <td>Cipamokolan, Rancasari, Bandung City, West Java 40292</td>
                                                <td>44534563456242</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Kopo Jaya</td>
                                                <td>Jl. LL. RE. Martadinata No.74-80, Cihapit, Bandung Wetan, Kota</td>
                                                <td>54564534512363</td>
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
            function pilihBarang(namaBarang){
                var namaBarangDipilih = document.getElementById('namaBarangDipilih');
                namaBarangDipilih.value = namaBarang;
            }
        </script>
    </body>
</html>
