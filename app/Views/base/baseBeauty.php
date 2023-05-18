<!DOCTYPE html>
<html lang="en">
    <head>
    <?= $this->include('layouts/home-user/head') ?>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <?= $this->include('layouts/home-user/navigation') ?>
        <!-- Page Content-->
        <div class="container px-4 px-lg-5" style="margin-top: 150px;">
            <!-- Heading Row-->
            <?= $this->include('layouts/sub-home/heading-row') ?>
            <!-- Content Row-->
            <?= $this->include('layouts/sub-home/content-row') ?>
        </div>
        <!-- Footer-->
        <?= $this->include('layouts/home-user/footer') ?>
        <!-- Scripts-->
        <?= $this->include('layouts/home-user/scripts') ?>
    </body>
</html>
