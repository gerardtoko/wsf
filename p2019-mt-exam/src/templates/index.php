<?php include "common/header.php" ?>

<div id="movies">
  <h4>Films</h4>
  <hr>
  <div class="container">
    <div class="row">
      <?php foreach($data["films"] as $key => $film) { ?>
        <div class="col-md-3">
          <img src="<?php echo $film["photo"] ?>" class="img-mov img-thumbnail">
          <div><?php echo $film["nom"] ?></div>
          <div class="line2">
            <?php echo $film["année"] ?> <?php echo $film["durée"] ?><br>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</div>

<?php include "common/footer.php" ?>