<!DOCTYPE html>
<html lang="en">
    <head>
    <?= $this->include('layouts/sub-home/head') ?>
    </head>
    <body>
        <!-- Responsive navbar-->
        <?= $this->include('layouts/sub-home/navbar') ?>
        <!-- Page Content-->
        <div class="container px-4 px-lg-5" >
            <!-- Heading Row-->
            <?= $this->include('layouts/sub-home/heading-row') ?>
            <!-- Content Row-->
            <?= $this->include('layouts/sub-home/content-row') ?>
        </div>
        <!-- Footer-->
        <?= $this->include('layouts/sub-home/footer') ?>
         <!-- Scripts-->
         <?= $this->include('layouts/sub-home/scripts') ?>
    </body>
</html>
