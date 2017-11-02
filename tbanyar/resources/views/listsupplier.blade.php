@include('layout.header')

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">List Supplier</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                List Detail Supplier
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th class="col-lg-1">No.</th>
                                                <th class="col-lg-3">Nama Supplier</th>
                                                <th class="col-lg-3">Alamat</th>
                                                <th class="col-lg-2">No. Telp</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd gradeX">
                                                <td>1</td>
                                                <td>Semen Tiga Roda</td>
                                                <td>Cipamokolan, Rancasari, Bandung City, West Java 40292</td>
                                                <td class="center">44534563456242</td>
                                            </tr>
                                            <tr class="even gradeC">
                                                <td>2</td>
                                                <td>Jaya Aman Sentosa</td>
                                                <td>Jalan Raya Cibeureum No.50, Campaka, Andir, Kota Bandung, Jawa Barat 40184</td>
                                                <td class="center">54563456345623</td>
                                            </tr>
                                            <tr class="odd gradeA">
                                                <td>3</td>
                                                <td>Kopo Jaya</td>
                                                <td>Jl. LL. RE. Martadinata No.74-80, Cihapit, Bandung Wetan, Kota </td>
                                                <td class="center">54564534512363</td>
                                            </tr>
                                            <tr class="even gradeA">
                                                <td>4</td>
                                                <td>First Media Tech. Office (HUB)</td>
                                                <td>Jl. Jendral Gatot Subroto No.236, Binong, Batununggal, Kota Bandung, Jawa Barat 40275</td>
                                                <td class="center">64563786497896</td>
                                            </tr>
                                            <tr class="odd gradeA">
                                                <td>5</td>
                                                <td>Gardu Cahaya</td>
                                                <td>Jl. BKR, Cijagra, Lengkong, Kota Bandung, Jawa Barat 40253</td>
                                                <td class="center">71234124567645</td>
                                            </tr>
                                            <tr class="even gradeA">
                                                <td>6</td>
                                                <td>Sentosa Citra</td>
                                                <td>Jl. Soekarno Hatta No.216, Babakan Ciparay, Kota Bandung, Jawa Barat 40223</td>
                                                <td class="center">61234123452345</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>7</td>
                                                <td>Angkasa Putra</td>
                                                <td>Jl. Raya Tim. Tagog No.100, Karangmekar, Cimahi Tengah, Kota Cimahi, Jawa Barat 40523</td>
                                                <td class="center">11234123456785</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>8</td>
                                                <td>Sriwijaya Agung</td>
                                                <td>Jl. Cilengkrang II, Palasari, Cibiru, Kota Bandung, Jawa Barat 40615</td>
                                                <td class="center">12349058202340</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>9</td>
                                                <td>Jaya Cell</td>
                                                <td>Jl. Aria Bar. No.7, Cipamokolan, Rancasari, Kota Bandung, Jawa Barat 40292</td>
                                                <td class="center">12345903480620</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>10</td>
                                                <td>Anggarabrata</td>
                                                <td>Jl. Soekarno Hatta No.216, Babakan Ciparay, Kota Bandung, Jawa Barat 40223</td>
                                                <td class="center">11234123456785</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>11</td>
                                                <td>Camino 1.0</td>
                                                <td>Jl. Raya Tim. Tagog No.100, Karangmekar, Cimahi Tengah, Kota Cimahi, Jawa Barat 40523</td>
                                                <td class="center">12349058202340</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>12</td>
                                                <td>Camino 1.5</td>
                                                <td>Jl. Aria Bar. No.7, Cipamokolan, Rancasari, Kota Bandung, Jawa Barat 40292</td>
                                                <td class="center">71234124567645</td>
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
