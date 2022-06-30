<!doctype html>
<html lang="en">
<!-- Header -->

<head>
    <title><?= $title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>temp/css/style.css">
</head>
<!-- End Header -->

<!-- Page -->

<body class="img js-fullheight" style="background-image: url(temp/images/uns.jpg);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center">Login</h3>

                        <?php if ($this->session->flashdata('message')) : ?>
                            <?= $this->session->flashdata('message'); ?>
                        <?php endif; ?>

                        <form class="user" method="post" action="<?= base_url('auth') ?>">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Username" id="" name="Username" placeholder="Username" value="<?= set_value('Username') ?>">
                                <?= form_error('Username', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input id="password-field" type="password" class="form-control" placeholder="Password" name="Password">
                                <?= form_error('Password', '<small class="text-danger pl-3">', '</small>'); ?>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Page -->
    <script src="<?php echo base_url() ?>temp/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>temp/js/popper.js"></script>
    <script src="<?php echo base_url() ?>temp/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>temp/js/main.js"></script>

</body>

</html>