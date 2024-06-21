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
            <form method="post" action="<?= base_url('admin/pegawai/update/' . $users->username) ?>">
                <?= csrf_field(); ?>
<!--                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" value="<?= $users->username; ?>" readonly="">
                </div>
               <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" value="<?= $users->password; ?>">
                </div>
                <div class="mb-3">
                    <label for="password_conf" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="password_conf" name="password_conf">
                </div>
-->                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?= $users->name; ?>">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?= $users->email; ?>">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="<?= $users->phone; ?>">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address" value="<?= $users->address; ?>">
                </div>
                <div class="mb-3">
                    <label for="divisi" class="form-label">Divisi</label>
                    <input type="text" class="form-control" id="divisi" name="divisi" value="<?= $users->divisi; ?>">
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
