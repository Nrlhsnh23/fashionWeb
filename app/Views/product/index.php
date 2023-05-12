<?= $this->extend('base/baseAdmin') ?>
<?= $this->section('content') ?>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">     
                        <div class="col-md-10">
                        <h6 class=" font-weight-bold text-primary"> List berita.   </h6>
                        </div>

                        <div class="col-md-2">
                        <a class="btn btn-primary btn-sm float-end" href="/product/new"> Create Berita </a> 
                        </div>
                    </div>
                </div>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th scope="col ">ID</th>
                                        <th scope="col ">Photo</th>
                                        <th scope="col ">Title News</th>
                                        <th scope="col ">Caption</th>
                                        <th scope="col ">Category</th>
                                        <th scope="col ">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th scope="col ">ID</th>
                                        <th scope="col ">Photo</th>
                                        <th scope="col ">Title News</th>
                                        <th scope="col ">Caption</th>
                                        <th scope="col ">Category</th>
                                        <th scope="col ">Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $no = 0; ?>
                                        <?php foreach ($products as $item): ?>
                                        <tr>
                                            <td><?= $no += 1; ?></td>
                                            <td><img src="/photos/<?= $item['photo'] ?>" alt="" width=100 height=100></td>
                                            <td><?= $item['title'] ?></td>
                                            <td><?= $item['caption'] ?></td>  
                                            <td><?= $item['category'] ?></td>
                        
                                            <td>
                                                <div class="btn-group " role="group " aria-label="Basic example ">
                                                    <form action="/product/<?= $item['id'] ?>" method="POST" onsubmit="return confirm(`Are you sure?`)">

                                                        <a href="/product/<?= $item['id'] ?>/edit" class="btn btn-success btn-sm "> Edit </a>
                                                        <input type="hidden" name="_method" value="DELETE" /> <button class="btn btn-danger btn-sm" type="submit"> Delete </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="col-12">
                        <?= $pager->links('products', 'custom_pagination') ?>
                        </div>

            </div>

<?= $this->endSection() ?>