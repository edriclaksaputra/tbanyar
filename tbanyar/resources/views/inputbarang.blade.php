@include('layout.header')
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Input Barang Baru</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Data Barang
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body col">
                                <div class="row col-lg-12">
                                    <form role="form">
                                        <div class="row">
                                            <div class="form-group col-lg-4">
                                                <label>Kode Barang &nbsp&nbsp</label>
                                                <input type="text" name="kodesupplier">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-4">
                                                <label>Nama Barang &nbsp</label>
                                                <input type="text" name="namasupplier">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-4">
                                                <label>Supplier &nbsp   &nbsp   &nbsp   &nbsp   &nbsp</label>
                                                <select name="aspek1">
                                                    <option value="harga" selected>Semen Tiga Roda</option>
                                                    <option value="kecepatan">Jaya Aman Sentosa</option>
                                                    <option value="tempo">Kopo Jaya</option>
                                                    <option value="ketersediaan">Gardu Cahaya</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-4">
                                                <label>Harga Beli &nbsp &nbsp   &nbsp&nbsp</label>
                                                <input type="text" name="namasupplier">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-4">
                                                <label>Harga Jual &nbsp &nbsp   &nbsp</label>
                                                <input type="text" name="namasupplier">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-4">
                                                <label>Stok &nbsp &nbsp &nbsp   &nbsp&nbsp &nbsp &nbsp   &nbsp&nbsp&nbsp</label>
                                                <input type="text" name="namasupplier">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="button" class="btn btn-success fa fa-check"> Save</button>
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
        <script>
            function addNamaBarang(namaBarang){
                document.getElementById('namanamabarang').value += namaBarang + '/';
                document.getElementById('addnama').value = "";
            }
        </script>
    </body>
</html>
