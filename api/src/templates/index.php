<?php include "common/header.php" ?>

<div id="movies">
  <h4>Movies</h4>
  <hr>
  <div class="container">
    <div class="row">
      <?php foreach($data as $key => $movie) { ?>
        <div class="col-md-3">
          <img src="<?php echo $movie["Poster"] ?>" class="img-mov img-thumbnail">
          <div><?php echo $movie["Nom"] ?></div>
          <div class="line2">
            <?php echo $movie["Annee"] ?> (<?php echo $movie["Durée"] ?>)<br>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</div>

<?php include "common/footer.php" ?>