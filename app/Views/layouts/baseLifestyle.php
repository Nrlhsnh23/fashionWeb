<!DOCTYPE html>
<html lang="en">
    <head>
    <?= $this->include('layouts/fashion/head') ?>
    </head>
    <body>
        <!-- Responsive navbar-->
        <?= $this->include('layouts/fashion/navbar') ?>
        <!-- Page Content-->
        <div class="container px-4 px-lg-5" >
            <!-- Heading Row-->
            <?= $this->include('layouts/fashion/heading-row') ?>
            <!-- Content Row-->
            <?= $this->include('layouts/fashion/content-row') ?>
        </div>
        <!-- Footer-->
        <?= $this->include('layouts/fashion/footer') ?>
         <!-- Scripts-->
         <?= $this->include('layouts/fashion/scripts') ?>
    </body>
</html>
