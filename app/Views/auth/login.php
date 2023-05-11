<?= $this->extend('base/login/base2') ?>
<?= $this->section('content') ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">

            <div class="p-5">
                <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Login to continue</h1>
                </div>

            <?php if(session()->getFlashData('success')) { ?>
                <div class="alert alert-success">
                    <?= session()->get('success') ?>
                </div>
            <?php } ?>

            <?php if(session()->getFlashdata('errors')) { ?>
                <div class="alert alert-danger">
                    <?= session()->getFlashdata('errors') ?>
                </div>
            <?php } ?>

            <form class="user" action="/login" method="post">

                <div class="form-group">
                    <label for="example-email">Email</label>
                    <input type="text" class="form-control form-control-user" id="example-email" aria-describedby="emailHelp" 
                        placeholder="Enter email" name="email" value="<?= old('email') ?>">
                </div>

                <div class="form-group">
                    <label for="example-password">Password</label>
                    <input type="password" class="form-control form-control-user" id="example-password" aria-describedby="emailHelp" 
                        placeholder="Enter password" name="password">
                </div>

                <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>

                <hr>
                            
                <div class="text-center">
                      <a class="small" href="/register">Create an Account!</a>
                </div>
            
            </form>
            </div>
        </div>
        </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>