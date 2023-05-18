<section>
    <div class="container px-5">
        <div class="row gx-4 gx-lg-5 mt-5">
            <h1 align="center" class="text-primary">Blogs</h1>
        <?php foreach($products as $product) : ?>
            <div class="col-md-4 mt-3 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                    <p align="center">
                    <img class="img-fluid rounded" src="<?= base_url('photos/') . $product['photo']; ?>" style="width:250px;height: 150px;" alt="..." />
                    </p>
                        <h2 class="card-title"><?= $product['title']; ?></h2>
                        <p class="card-text"><?= substr($product['caption'], 0, 100) ?>.....</p>
                    </div>
                    <div class="card-footer"> <a class="btn btn-primary" href="user/detail/<?= $product['id']; ?>">Read More.</a></div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</div>
</section>