<div class="container py-5">
<div class="row">

<div class="col-sm-12 col-md-6 col-lg-6 mt-2">
    <div class="card" style="width: 18rem;">
  <img src="<?= $product['imagePath'] ?>" class="imageCard card-img-top" alt="...">
</div>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-6 mt-2">
    <div class="card" style="width: 18rem;">
  <img src="<?= $product['imagePath'] ?>" class="imageCard card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?= $product['name'] ?></h5>
    <p class="card-text"><?= formatPriceEuro($product['price']) ?></p>
    <a href="pageproduit.php" class="btn btn-primary" id=<?= $product['id'] ?>>Ajoutez à l'archive</a>
  </div>
</div>
    </div>

</div>
</div>