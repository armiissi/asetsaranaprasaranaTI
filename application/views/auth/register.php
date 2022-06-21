<!doctype html>
<html lang="en">

<head>
    <title><?= $title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>temp/css/style.css">

</head>

<body class="img js-fullheight" style="background-image: url(temp/images/uns.jpg);">
    <section class="ftco-section">
        <div class="container">
            <!-- <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Login #10</h2>
                </div>
            </div> -->
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5 mx-auto">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center">Registration</h3>
                        <form action="<?= base_url('auth/register') ?>" class="user" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="Username" name="Username" placeholder="Username" value="<?= set_value('Username'); ?>">
                                <?= form_error('Username', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <!-- <div class="form-group">
                                <input id="password-field" type="password" class="form-control" placeholder="Password" required>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div> -->
                            <div class="form-group">
                                <input id="password-field1" type="password" class="form-control" placeholder="Password" name="Password1">
                                <span toggle="#password-field1" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                <?= form_error('Password1', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password-field2" name="Password2" placeholder="Repeat Password">
                                <span toggle="#password-field2" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                <?= form_error('Password2', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <!-- <div class="form-group row">
                                <div class="col-sm-6 mb-2 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" id="password-field" name="Password1" placeholder="Password">
                                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                    <?= form_error('Password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control" id="Password2" name="password-field" placeholder="Repeat Password">
                                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                    <?= form_error('Password2', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div> -->

                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Sign Up</button>
                            </div>

                            <!-- <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary">Remember Me
                                        <input type="checkbox" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="w-50 text-md-right">
                                    <a href="#" style="color: #fff">Forgot Password</a>
                                </div>
                            </div> -->
                        </form>
                        <!-- <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
                        <div class="social d-flex text-center">
                            <a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
                            <a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a>
                        </div> -->
                        <div class="text-center">
                            <a class="small" href="<?= base_url('auth'); ?>">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="<?php echo base_url() ?>temp/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>temp/js/popper.js"></script>
    <script src="<?php echo base_url() ?>temp/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>temp/js/main.js"></script>

</body>

</html>