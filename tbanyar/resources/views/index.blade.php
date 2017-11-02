@include('layout.header')
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Welcome to TB Anyar Administrator</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Mind Map
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <h3>1. Penjualan</h3>
                                    <p>Menginput No Faktur, nama konsumen, memilih barang yang akan dibeli beserta harga yang harus dibayar</p>
                                    <h3>2. Supplier</h3>
                                    <tr>List Supplier : Menampilkan supplier-supplier yang menjadi langganan toko</tr>
                                    <tr>Input Supplier Baru : Mengisi detail data supplier baru</tr>
                                    <h3>3. Barang</h3>
                                    <p>List Barang : Menampilkan barang apa saja yang dijual di toko beserta detail stocknya</p>
                                    <p>Input Barang Baru: Mengisi detail untuk barang baru di toko</p>
                                    <h3>4. Validasi PO</h3>
                                    <p>Validasi tanggal berapa barang PO sampai di toko</p>
                                    <h3>5. Evaluasi Supplier</h3>
                                    <p>Dengan memilih kriteria dari segi mana supplier dinilai, sistem akan menampilkan pilihan supplier terbaik untuk kriteria tersebut</p>
                                    <h3>6. Input PO</h3>
                                    <p>Memesan barang dari supplier</p>
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
    </body>
</html>