 <?php if(isset($product)) { ?>
 	<div class="row mb-5">
 		<div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="<?= base_url('photos/') . $product['photo']; ?>" style="width:100%;height: 350px;" /></div>
 		<div class="col-lg-5">
 			<h1 class="font-weight-light"><?= $product['title']; ?></h1>
 			<p> <?= substr($product['caption'], 0, 300) ?>.....</p>
 			<a class="btn btn-primary" href="detail/<?= $product['id']; ?>">Read More.</a>
 		</div>
 	</div>

 <?php }else{ ?>

 	<div class="row gx-4 gx-lg-5 align-items-center my-5">
 		<div class="col-lg-12" style="margin-bottom: 286px;">
 			<h1 align="center">Halaman Kosong</h1>
 		</div>
 	</div>

 	<?php } ?>