@include('layout.header')
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Input Barang Supplier</h1>
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
                                    <form method="post" action="listbarangsupplier.detail.addsupplier.save">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="form-group col-lg-4">
                                                <label>Nama Barang &nbsp</label>
                                                <input type="text" value="{{$itemDetail->nama}}" disabled>
                                                <input type="hidden" name="idbarang" value="{{$itemDetail->id}}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-4">
                                                <label>Supplier &nbsp   &nbsp   &nbsp   &nbsp   &nbsp</label>
                                                <select class="form-group" name="idsupplier">
                                                    @foreach($suppliers as $supplier)
                                                    <option value={{$supplier->id}}>{{$supplier->nama}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-4">
                                                <label>Harga Beli dari Supplier&nbsp &nbsp   &nbsp&nbsp</label>
                                                <input type="text" name="hargabeli">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success fa fa-check"> Save</button>
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
