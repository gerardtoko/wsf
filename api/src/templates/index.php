<?php include "common/header.php" ?>

<div id="movies">
  <h4>Movies</h4>
  <hr>
  <div class="container">
    <div class="row">
      <?php foreach($data["movies"] as $key => $movie) { ?>
        <div class="col-md-3">
          <img src="<?php echo $movie["photo"] ?>" class="img-mov img-thumbnail">
          <div><?php echo $movie["nom"] ?></div>
          <div class="line2">
            <?php echo $movie["année"] ?> (<?php echo $movie["durée"] ?>)<br>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</div>

<?php include "common/footer.php" ?>