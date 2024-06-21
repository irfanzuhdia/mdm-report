<?= $this->extend('layout/template_admin'); ?>
<?= $this->section('content'); ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"></h1>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Report</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Id</th>
                                            <th>Nama</th>
                                            <th>Tanggal</th>
                                            <th>Id Proyek</th>
                                            <th>Progress</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Id</th>
                                            <th>Nama</th>
                                            <th>Tanggal</th>
                                            <th>Id Proyek</th>
                                            <th>Progress</th>
                                            <th>Status</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>111AAA</td>
                                            <td>Anji</td>
                                            <td>2022/02/22</td>
                                            <td>111PPP</td>
                                            <td>1. bekerja </td>
                                            <td>Terlambat</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
<?= $this->endSection('content'); ?>
