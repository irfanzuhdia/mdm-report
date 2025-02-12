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
                    <a href="<?= base_url('/aktivitas/tambah'); ?>" class="btn btn-success btn-icon-split" >
                    <span class="text">Tambah Aktivitas</span>
                    </a>
                    <hr>
                    <!-- Page Heading -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Aktivitas</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Dibuat</th>
                                            <th>Diedit</th>
                                            <th>Proyek</th>
                                            <th>Lokasi</th>
                                            <th>Aktivitas</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        $usernow = session()->get('username');
                                        foreach ($aktivitas as $row) {
                                            ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $row->created_at; ?></td>
                                                <td><?= $row->updated_at; ?></td>
                                                <td><?= $row->proyek; ?></td>
                                                <td><?= $row->lokasi; ?></td>
                                                <td><?= $row->aktivitas; ?></td>
                                                <td>
                                                    <a title="Edit" href="<?= base_url("aktivitas/edit/$row->id_aktivitas"); ?>" class="btn btn-info">Edit</a>
                                                    <a title="Delete" href="<?= base_url("aktivitas/delete/$row->id_aktivitas") ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')">Delete</a>
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
    <script src="admin/vendor/jquery/jquery.min.js"></script>
    <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="admin/js/sb-admin-2.min.js"></script>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<?= $this->endSection('content'); ?>