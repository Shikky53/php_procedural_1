

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://wallpapersqueen.com/wp-content/uploads/2021/05/Cool-Anime-Wallpaper-1024x576.jpg" class="imageCaroussel w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://wallpapersqueen.com/wp-content/uploads/2021/12/Tom-Clancys-Rainbow-Six-Extraction-Backgrounds-Wallpapers-1024x576.jpg" class="imageCaroussel w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://wallpapersqueen.com/wp-content/uploads/2021/11/Blue-Lock-Background-Photos-1024x576.jpg" class="imageCaroussel w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container py-5">
<div class="row align-items-center justify-space-around">

<?php foreach($products as $product) : ?>

<div class="col-sm-12 col-md-6 col-lg-4 mt-2">
    <div class="card" style="width: 18rem;">
  <img src="<?= $product['imagePath'] ?>" class="imageCard card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?= $product['name'] ?></h5>
    <p class="card-text"><?= formatPriceEuro($product['price']) ?></p>
    <a href="pageproduit.php" class="btn btn-primary" id=<?= $product['id'] ?>>Go check</a>
  </div>
</div>
    </div>
    <?php endforeach ?>

    <div class="col-sm-12 col-md-6 col-lg-4 mt-2">
    <div class="card" style="width: 18rem;">
  <img src="https://i.pinimg.com/originals/27/fd/ed/27fdedc32af3de54854acf497f410b88.jpg" class="imageCard card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>
    </div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
