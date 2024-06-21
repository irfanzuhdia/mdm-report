<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container" style=" padding-top : 100px;">
    <div class="card">
        <div class="card-header">
            <h3>Data Pegawai</h3>
        </div>
        <div class="card-body">
            <?php if (!empty(session()->getFlashdata('message'))) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo session()->getFlashdata('message'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <a href="<?= base_url('/aktivitas/tambah'); ?>" class="btn btn-primary">Tambah</a>
            <hr />
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Id Aktivitas</th>
                    <th>username</th>
                    <th>proyek</th>
                    <th>lokasi</th>
                    <th>aktivitas</th>
                    <th>Action</th>
                </tr>
                <?php
                $no = 1;
                $usernow = session()->get('username');

                foreach ($aktivitas as $row) {
                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row->id_aktivitas; ?></td>
                        <td><?= $row->username; ?></td>
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
            </table>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>