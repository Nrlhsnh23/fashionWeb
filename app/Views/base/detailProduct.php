<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->include('layouts/home-user/head') ?>
</head>
<body id="page-top">
    <!-- Navigation-->
    <?= $this->include('layouts/home-user/navigation') ?>
    <!-- Page Content-->

    <div class="container px-4 px-lg-5" style="margin-top: 100px; margin-bottom: 100px;">
                <div class="mb-4">
                    <h1 class="fw-bolder mb-1"> <?= $product['title']; ?> </h1>
                    <a class="badge bg-secondary text-decoration-none link-light"> <?= $product['category']; ?></a>
                </div>

                <div class="mb-4" align=center >
					<img class="img-fluid rounded" src="<?= base_url('photos/') . $product['photo']; ?>" style="width:650px;height: 500px;"  alt="..." />
                </div>
                    <!-- Post content-->
                <div class="mb-5">
                    <p class="fs-5 mb-4"><?= $product['caption']; ?></p>
                </div>

                <div class="col-lg-12 mt-5">
                <a href="/" class="btn btn-primary"> Back to home </a>
                </div> 

    </div>
            
    <!-- Footer-->
    <?= $this->include('layouts/home-user/footer') ?>
    <!-- Scripts-->
    <?= $this->include('layouts/home-user/scripts') ?>
</body>
</html>