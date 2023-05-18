<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->include('layouts/home-user/head') ?>
</head>
<body id="page-top">
    <!-- Navigation-->
    <?= $this->include('layouts/home-user/navigation') ?>
    <!-- Page Content-->
    <div class="container px-4 px-lg-5" style="margin-top: 150px; margin-bottom: 140px;">
        <!-- Heading Row-->
        <div class="row gx-4 gx-lg-5 align-items-center my-5">
            <div class="col-lg-12 text-center">
                <img class="img-fluid rounded mb-4 mb-lg-0" src="<?= base_url('photos/') . $product['photo']; ?>" style="width:500px;height: 350px;" /></div>
            <div class="col-lg-12 mt-5">
                
                <h1 class="font-weight-light mb-3" align="center"><?= $product['title']; ?></h1>
                <p><?= $product['caption']; ?></p>

                <a href="/" class="btn btn-primary">Back to home</a>
            </div>
        </div>
    </div>
    <!-- Footer-->
    <?= $this->include('layouts/home-user/footer') ?>
    <!-- Scripts-->
    <?= $this->include('layouts/home-user/scripts') ?>
</body>
</html>
