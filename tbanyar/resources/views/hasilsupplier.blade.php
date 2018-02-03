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
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(count($listSupplier) == 1)
                                            <tr>
                                                <td>1</td>
                                                <td>{{$listSupplier[0]->nama}}</td>
                                                <td>{{$listSupplier[0]->alamat}}</td>
                                                <td>{{$listSupplier[0]->telp}}</td>
                                                @if($listSupplier[0]->status == 1)
                                                <td><button type="button" class="btn btn-success" disabled> Aktif</button></td>
                                                @else
                                                <td><button type="button" class="btn btn-danger" disabled> Tidak Aktif</button></td>
                                                @endif
                                            </tr>
                                            @else
                                            @foreach($listSupplier as $supplier)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$supplier->suppliers->nama}}</td>
                                                <td>{{$supplier->suppliers->alamat}}</td>
                                                <td>{{$supplier->suppliers->telp}}</td>
                                                @if($supplier->suppliers->status == 1)
                                                <td><button type="button" class="btn btn-success" disabled> Aktif</button></td>
                                                @else
                                                <td><button type="button" class="btn btn-danger" disabled> Tidak Aktif</button></td>
                                                @endif
                                            </tr>
                                            @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                                @if(count($listSupplier) == 1)
                                <div class="row">
                                    <div class="col-lg-5">
                                        <hr>
                                        <div class="panel-heading">
                                            Tidak ada perbandingan supplier
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class="row">
                                    <div class="col-lg-5">
                                        <hr>
                                        <div class="panel-heading">
                                            Perhitungan Bobot Kriteria
                                        </div>
                                        <table class="table table-striped table-bordered table-hover">
                                            <tbody>
                                                <tr>
                                                    <td><label>Alternatif/Kriteria</label></td>
                                                    <td>Harga</td>
                                                    <td>Kecepatan Pengiriman</td>
                                                    <td>Jatuh Tempo</td>
                                                    <td>Ketersediaan Produk</td>
                                                </tr>
                                                <tr>
                                                    <td><label>Cost/Benefit</label></td>
                                                    <td>Cost</td>
                                                    <td>Cost</td>
                                                    <td>Benefit</td>
                                                    <td>Benefit</td>
                                                </tr>
                                                <tr>
                                                    <td><label>Kepentingan</label></td>
                                                    <td>{{$harga}}</td>
                                                    <td>{{$kecepatan_pengiriman}}</td>
                                                    <td>{{$jatuh_tempo}}</td>
                                                    <td>{{$ketersediaan}}</td>
                                                </tr>
                                                @foreach($listSupplier as $supplier)
                                                <tr>
                                                    <td><label>{{$supplier->suppliers->nama}}</label></td>
                                                    <td>{{$supplierDetail[$loop->iteration-1]->hargabeli}}</td>
                                                    <td>{{$supplierDetail[$loop->iteration-1]->suppliers->lamapengiriman}}</td>
                                                    <td>{{$supplierDetail[$loop->iteration-1]->suppliers->jatuhtempo}}</td>
                                                    <td>{{$banyakTransaksi[$loop->iteration-1]}}</td>
                                                </tr>
                                                @endforeach
                                                <tr style="color: green">
                                                    <td><label>Pembagi</label></td>
                                                    <td>{{$pembagiharga}}</td>
                                                    <td>{{$pembagikecepatanpengiriman}}</td>
                                                    <td>{{$pembagijatuhtempo}}</td>
                                                    <td>{{$pembagiketersediaan}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                @endif
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
    </body>
</html>
