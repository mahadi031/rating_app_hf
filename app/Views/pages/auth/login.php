<?= $this->extend('layouts/auth-layout') ?>
<?= $this->section('content') ?>
<div class="login-box bg-white box-shadow border-radius-10">
    <div class="login-title">
        <h2 class="text-center text-primary">Login To Rating App Admin</h2>
    </div>
    <?= $validation = \config\Services::validation(); ?>
    <form action="" method="POST">
        <?= csrf_field(); ?>
        <div class="input-group custom">
            <input type="text" class="form-control form-control-lg" placeholder="Username" />
            <div class="input-group-append custom">
                <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
            </div>
        </div>
        <div class="input-group custom">
            <input type="password" class="form-control form-control-lg" placeholder="**********" />
            <div class="input-group-append custom">
                <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
            </div>
        </div>
        <div class="row pb-30">
            <div class="col-6">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck1" />
                    <label class="custom-control-label" for="customCheck1">Remember</label>
                </div>
            </div>
            <div class="col-6">
                <div class="forgot-password">
                    <a href="forgot-password.html">Forgot Password</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="input-group mb-0">
                    <input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
                </div>

            </div>
        </div>
    </form>
</div>
<?= $this->endSection() ?>