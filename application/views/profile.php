<!-- Begin Page Content -->
<section class="section">
    <div style="margin-top:100px; margin-left:350px; " class="row align-items-top">
        <div class="col-lg-9">
            <div class="card mb-5">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <br>
                            <div class="col-16">
                                <label for="email" class="form-label">EMAIL</label>
                                <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
                            </div>
                            <br>
                            <div class="col-12">
                                <label for="name" class="form-label">NAMA</label>
                                <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>" readonly>
                            </div>
                            <br>
                            <div class="col-12">
                                <label for="nik" class="form-label">NIK</label>
                                <input type="text" class="form-control" id="nik" name="nik" value="<?= $user['nik']; ?>" readonly>
                            </div>
                            <br>
                            <div class="col-12">
                                <label for="nik" class="form-label">tanggal di buat </label>
                                <input type="text" class="form-control" id="nik" name="nik" value="<?= $user['date_created']; ?>" readonly>
                            </div>
                            <br>
                            <a href="<?= base_url('profile/edit_profile'); ?>" class="btn btn-primary"><i class="bx bx-pencil"></i> edit profil</a>

                        </div>
                    </div>
                </div>
            </div>

        </div>
</section>