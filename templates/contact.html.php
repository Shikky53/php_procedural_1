<div class="container py-5">

<div class="row aling-items-center justify-space-around">

<?php foreach($staff as $staff) : ?>

<div class="col-sm-12 col-md-6 col-lg-3 mt-2">
    
    <div class="card" style="width: 18rem;">
  <img src="<?= $staff['imagePath'] ?>" class="imageCard card-img-top" alt="...">
  <div class="card-body">
      <h5 class="card-text"><?= $staff['lastName'] ?></h5>
    <h5 class="card-title"><?= $staff['name'] ?></h5>
    <p class="card-title"><?= $staff['post'] ?></p>
    <a href="#" class="btn btn-primary">Send message</a>
</div>
<a href="pageStaff.php?id=<?= $staff['id']?>" class="btn btn-danger">Voir le profil</a>
  </div>
    </div>
    <?php endforeach ?>

</div>
</div>