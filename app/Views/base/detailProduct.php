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
        <div class="row">
            <div class="col-lg-9">
                <div class="mb-4">
                    <h1 class="fw-bolder mb-1"> <?= $product['title']; ?> </h1>
                    <a class="badge bg-secondary text-decoration-none link-light"> <?= $product['category']; ?></a>
                </div>

                <div class="mb-4">
					<img class="img-fluid rounded" src="<?= base_url('photos/') . $product['photo']; ?>" style="width:300px;height: 250px;"  alt="..." />
                </div>
                    <!-- Post content-->
                <div class="mb-5">
                    <p class="fs-5 mb-4"><?= $product['caption']; ?></p>
                </div>
            </div>
                <div class="col-lg-3">
                    <div class="card mb-3">
                        <div class="card-header">News </div>
                        
                        <?php foreach($products as $product) : ?>
                        <div class="card-body">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h2 class="card-title"><?= $product['title']; ?></h2>
                                    <p class="card-text"><?= substr($product['caption'], 0, 50) ?>.....</p>
                                </div>
                                <div class="card-footer"> 
                                    <a class="btn btn-primary" href="user/detail/<?= $product['id']; ?>">Read More.</a></div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                
                <div class="col-lg-12 mt-5">
                <a href="/" class="btn btn-primary"> Back to home </a>
                </div> 

        </div> 
    </div>
            
    <!-- Footer-->
    <?= $this->include('layouts/home-user/footer') ?>
    <!-- Scripts-->
    <?= $this->include('layouts/home-user/scripts') ?>
</body>
</html>
