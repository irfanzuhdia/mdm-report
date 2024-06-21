<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container" style=" padding-top : 100px;">
    <div class="card">
        <div class="card-header">
            <h3>Update Data Aktivitas</h3>
        </div>
        <div class="card-body">
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <h4>Periksa Entrian Form</h4>
                    </hr />
                    <?php echo session()->getFlashdata('error'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <form method="post" action="<?= base_url('aktivitas/update/' . $aktivitas->id_aktivitas) ?>">
                <?= csrf_field(); ?>

                <div class="form-group">
                    <label for="nama">Proyek</label>
                    <input type="text" class="form-control" id="proyek" name="proyek" value="<?= $aktivitas->proyek; ?>">
                </div>

                <div class="form-group">
                    <label for="nama">Lokasi</label>
                    <input type="text" class="form-control" id="lokasi" name="lokasi" value="<?= $aktivitas->lokasi; ?>">
                </div>

                <div class="form-group">
                    <label for="alamat">Aktivitas</label>
                    <textarea class="form-control" name="aktivitas" id="aktivitas"><?= $aktivitas->aktivitas; ?></textarea>
                </div>

                <div class="form-group">
                    <input type="submit" value="Update" class="btn btn-info" />
                </div>

            </form>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>