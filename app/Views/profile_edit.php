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
            <?php
            $usernow = session()->get('username');            
            ?>
            <form method="post" action="<?= base_url('profile/update/' . $usernow) ?>">
                <?= csrf_field(); ?>


                <div class="form-group">
                    <label for="nama">Upload</label>
                    <input type="text" class="form-control" id="" name="" value="tes">
                </div>

                <div class="form-group">
                    <label for="alamat">Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" id="deskripsi"><?= $users->deskripsi; ?></textarea>
                </div>

                <div class="form-group">
                    <input type="submit" value="Update" class="btn btn-info" />
                </div>

            </form>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>