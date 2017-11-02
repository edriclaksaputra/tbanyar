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
                                    <form role="form">
                                        <div class="row">
                                            <div class="form-group col-lg-4">
                                                <label>Kode Supplier &nbsp&nbsp</label>
                                                <input type="text" name="kodesupplier">
                                            </div>
                                        </div>
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
                                                <input type="text" name="namasupplier">
                                            </div>
                                        </div>
                                        <!-- <div class="row">
                                            <div class="form-group col-lg-4">
                                                <label>Nama Barang  &nbsp&nbsp&nbsp&nbsp</label>
                                                <input type="text" name="namabarang" id="addnama">
                                                <button type="button" class="btn btn-info fa fa-plus" onclick="addNamaBarang(document.getElementById('addnama').value)"> Add</button>
                                                <br><br>
                                                <div class="form-group">
                                                    <div class="panel panel-success">
                                                        <div class="panel-heading">
                                                            List Barang
                                                        </div>
                                                        <div class="panel-body">
                                                            <input class="col-sm-12" type="text" id="namanamabarang" name="listbarang">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="button" class="btn btn-success fa fa-check"> Save</button>
                                        </div> -->
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
