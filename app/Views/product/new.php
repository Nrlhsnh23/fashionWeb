<?= $this->extend('base/baseAdmin') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4" align=center >Create Berita</h5>

            <form action="/product" method="post" enctype="multipart/form-data">

            <div class="form-group">
                    <label for="example-product-photo">Photo</label>
                    <input type="file" class="form-control" id="example-product-photo" aria-describedby="photoHelp" name="photo">
            </div>
            
            <div class="form-group">
                    <label for="example-product-title">Title News</label>
                    <input type="text" class="form-control" id="example-product-title" aria-describedby="emailHelp" 
                        placeholder="Enter title news" required name="title">
                </div>

                <div class="form-group">
                    <label for="example-product-caption">Caption</label>
                    <textarea type="input" rows="15" class="form-control" id="example-product-caption" aria-describedby="emailHelp" 
                        placeholder="Enter caption" required name="caption">
                    </textarea>
                </div>

                <div class="form-group">
                    <label for="example-product-category">Category</label>
                    <select class="form-control" name="category" id="example-product-category">
                        <option value="Tren_Fashion"> Tren Fashion </option>
                        <option value="Beauty"> Beauty </option>
                        <option value="Life_Culture"> Life Culture </option>
                    </select>
                </div>

                <br>
                <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit </button>
                <a href="<?= base_url('product') ?>" class="btn btn-danger btn-primary float-end"> Back </a>
                </div>

            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

