<?= $this->extend('base/baseAdmin') ?>

<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4" align=center>Update Berita <?= $data['title'] ?></h5>

            <form action="/product/<?= $data['id'] ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="put" />

                <div class="form-group">
                    <label for="example-product-photo">Photo</label>

                    <div class="mb-3">
                    <img src="<?= base_url('photos/'.$data['photo']) ?>" alt="Product Image" width="300px" height="300px" >
                    </div>

                    <input type="file" class="form-control" id="example-product-photo" aria-describedby="photoHelp" 
                        placeholder="Enter photo" required name="photo" value="<?= $data['photo'] ?>">
                </div>

                <div class="form-group">
                    <label for="example-product-title">Title News</label>
                    <input type="text" class="form-control" id="example-product-title" aria-describedby="emailHelp" 
                        placeholder="Enter title news" required name="title" value="<?= $data['title'] ?>">
                </div>

                <div class="form-group">
                    <label for="example-product-caption">Caption</label>
                    <textarea type="input" rows="15" class="form-control" id="example-product-caption" aria-describedby="emailHelp" 
                        placeholder="Enter caption" required name="caption" > <?= $data['caption'] ?>
                    </textarea>
                </div>

                <div class="form-group">
                    <label for="example-product-category">Category</label>
                    <select class="form-control" name="category" id="example-product-category">
                        <option value="Tren_Fashion" <?= $data['category'] == "Tren_Fashion" ? "selected" : "" ?>>Tren Fashion</option>
                        <option value="Beauty" <?= $data['category'] == "Beauty" ? "selected" : "" ?>> Beauty </option>
                        <option value="Life_Culture" <?= $data['category'] == "Life_Culture" ? "selected" : "" ?>> Life Culture </option>
                    </select>
                </div>

                <br>
                <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit </button>
                <a href="<?= base_url('product') ?>" class="btn btn-danger btn-primary"> Back </a>
                </div>

            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>