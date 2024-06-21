<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
    <!-- Page Wrapper -->
    <div id="wrapper" style=" padding-top:100px">
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">
                <?php if (!empty(session()->getFlashdata('message'))) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo session()->getFlashdata('message'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php endif; ?>
                    <hr>
                    <!-- Page Heading -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Aset Dipinjam</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Aset</th>
                                            <th>Jumlah Pinjam</th>
                                            <th>Tanggal Pinjam</th>
                                            <th>Tanggal Pengembalian</th>
                                            <th>Status Pengajuan</th>
                                            <th>Status Aset</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($peminjaman as $row) {
                                            ?>
                                            <tr>
                                            <td><?= $no++; ?></td>
                                                <td><?= $row['nama_aset']; ?></td>
                                                <td><?= $row['jumlah_pinjam']; ?></td>
                                                <td><?= $row['tgl_pinjam']; ?></td>
                                                <td><?= $row['tgl_pengembalian']; ?></td>
                                                <td><?= $row['status_pengajuan']; ?></td>
                                                <td><?= $row['status_barang']; ?></td>
                                                <td>
                                                   <?php $dataedit = $row['id_peminjaman'];?>
                                                   <?php 
                                                   if($row['status_pengajuan'] == 'Menunggu Konfirmasi'){
                                                   ?>
                                                <a title="Edit" href="<?= base_url("aset/pinjam/edit/$dataedit") ?>" class="btn btn-info">Edit</a>
                                                <a title="Delete" href="<?= base_url("aset/pinjam/delete/$dataedit") ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')">Delete</a></p>
                                                   <?php }
                                                   else{
                                                       echo "No Action";
                                                   }
                                                ?>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Aset Tersedia</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Aset</th>
                                            <th>Jumlah Tersedia</th>
                                            <th>Lokasi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($aset as $row) {
                                            ?>
                                            <tr>
                                            <td><?= $no++; ?></td>
                                                <td><?= $row->nama_aset; ?></td>
                                                <td><?= $row->jumlah_tersedia; ?></td>
                                                <td><?= $row->lokasi; ?></td>
                                                <td>
                                                    <a title="Pinjam" href="<?= base_url("aset/pinjam/$row->id_aset"); ?>" class="btn btn-info">Pinjam</a>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url("admin/vendor/jquery/jquery.min.js"); ?>"></script>
    <script src="<?= base_url("admin/vendor/bootstrap/js/bootstrap.bundle.min.js"); ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url("admin/vendor/jquery-easing/jquery.easing.min.js"); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url("admin/js/sb-admin-2.min.js"); ?>"></script>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<?= $this->endSection('content'); ?>