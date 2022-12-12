<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url('assets/'); ?>img/favicon.png" rel="icon">
    <link href="<?= base_url('assets/'); ?>img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="<?= base_url('assets/'); ?>vendor/https://fonts.gstatic.com" rel="preconnect">
    <link href="<?= base_url('assets/'); ?>vendor/https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets/'); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('assets/'); ?>css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>



<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">aplikasi perjalanan</span>
            </a>
        </div><!-- End Logo -->




        <nav class="header-nav ms-auto">
            <li style="margin-bottom: 25px;" class="nav-item dropdown pe-3">

                <!-- <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <img src="assets/img/news-3.jpg" alt="Profile" class="rounded-circle">
                    <span class="d-none d-md-block dropdown-toggle ps-2">Diva Oliviya</span>
                </a> -->
                <!--End Profile Iamge Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        <h6>Diva Oliviya Mayantika</h6>
                        <span>Web Designer</span>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                            <i class="bi bi-person"></i>
                            <span>My Profile</span>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Sign Out</span>
                        </a>
                    </li>

                </ul>
                <!--End Profile Dropdown Items -->
            </li>
            <!--End Profile Nav -->

        </nav>
        <!--End Icons Navigation -->

    </header>
    <!--End Header-->


    <section style="margin-left:330px; margin-top:150px; margin-bottom:-500px;" class="section">
        <div class="row">
            <div class="lg-6">

                <div class="card">
                    <div class="card-body">
                        <!-- Begin Page Content -->

                        <br>
                        <!-- Page Heading -->
                        <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
                        <br>
                        <div class="row">
                            <div class="col-lg-8">
                                <?php echo form_open_multipart('profile/edit_profile'); ?>
                                <div class="row mb-3">
                                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
                                    </div>
                                    <br><br>
                                    <label for="name" class="col-sm-2 col-form-label">Full Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>">
                                    </div>
                                    <br><br>
                                    <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nik" name="nik" value="<?= $user['nik']; ?>">
                                    </div>
                                    <br><br>
                                    <div class="form-group row">
                                        <div class="col-sm-2">Picture</div>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail">
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="costume-file">
                                                        <input type="file" class="costume-file-input" id="image" name="image">
                                                        <label class="costume-file-label" for="image">Pilih File</label>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="form-group ro justify-content-end">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary mr-4"><i class="fas fa-fw fa-pencil"></i> Edit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- /.container-fluid -->

                        </div>
                        <!-- End of Main Content -->
                    </div>
                </div>



            </div>
        </div>

    </section>