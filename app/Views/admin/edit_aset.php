<?= $this->extend('layout/template_admin'); ?>
<?= $this->section('content'); ?>
    
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800"></h1>

<div class="container">

<div class="card o-hidden border-0 shadow-lg my-5">
<div class="card-body p-0">
<!-- Nested Row within Card Body -->
     <div class="row">
        <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
            <div class="col-lg-7">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                </div>
<?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <h4>Periksa Entrian Form</h4>
                    </hr />
                    <?php echo session()->getFlashdata('error'); ?>
                </div>
            <?php endif; ?>
            <form method="post" action="<?= base_url('admin/aset/update/' . $aset->id_aset) ?>">
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Aset</label>
                    <input type="text" class="form-control" id="nama_aset" name="nama_aset" value="<?= $aset->nama_aset; ?>">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Jumlah Tersedia</label>
                    <input type="text" class="form-control" id="jumlah_tersedia" name="jumlah_tersedia" value="<?= $aset->jumlah_tersedia; ?>">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Lokasi</label>
                    <input type="text" class="form-control" id="lokasi" name="lokasi" value="<?= $aset->lokasi; ?>">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
            <hr />

  

    </div>
                    </div>
                </div>
            </div>
        </div>

        </div>


    </div>
<?= $this->endSection('content'); ?>
