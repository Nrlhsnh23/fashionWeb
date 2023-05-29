<style>
    .navbar-custom {
        background-color: maroon; /* Mengubah warna background navbar menjadi merah maroon */
    }
</style>

<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container px-5">
        <div>
            <a class="navbar-brand" href="<?= base_url(); ?>">HOME</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <form action="<?php echo base_url('/user/search')?>" action="GET" method="GET">
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <div class="container px-5">
                <div class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group" align=center>
                        <input type="text" class="form-control bg-light border-0 small" style="width: 450px;" placeholder="Search for..." name="cari" value="<?= isset($_GET['cari']) ? $_GET['cari'] : '' ?>">
                        <div class="input-group-append">
                            <button class="btn btn-primary btn-lg" type="submit" value="cari">
                                <i class="fas fa-search fa-lg" style="width: 30px;"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            </form>
 
            <ul class="navbar-nav ms-auto">
                <li class="navbar-brand"><a class="nav-link" href="/user/fashion">FASHION</a></li>
                <li class="navbar-brand"><a class="nav-link" href="/user/beauty">BEAUTY</a></li>
                <li class="navbar-brand"><a class="nav-link" href="/user/lifestyle">LIFESTYLE</a></li>
            </ul>
        </div>
    </div>
</nav>
