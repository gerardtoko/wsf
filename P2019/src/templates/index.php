<?php include "common/header.php" ?>

<div id="movies">
  <h4>Movies <a href="/membres">Membre</a></h4>
  <hr>
  <div class="container">
    <div class="row">
      <?php foreach($data["movies"] as $key => $movie) { ?>
        <div class="col-md-3">
          <a href="/movie?id=<?php echo $key ?>">
            <img src="<?php echo $movie["Poster"] ?>" class="img-mov img-thumbnail">
            <div><?php echo $movie["Nom"] ?></div>
            <div class="line2">
              <?php echo $movie["Annee"] ?> (<?php echo $movie["Durée"] ?>)<br>
            </div>
          </a>
        </div>
      <?php } ?>
    </div>
  </div>
</div>

<div id="series">
  <h4>Séries</h4>
  <hr>
  <div class="container">
    <div class="row">
      <?php foreach($data["series"] as $movie) { ?>
        <div class="col-md-3">
          <img src="<?php echo $movie["Poster"] ?>" class="img-mov img-thumbnail">
          <div><?php echo $movie["Nom"] ?></div>
          <div class="line2">
            <?php echo $movie["Annee"] ?> (<?php echo $movie["Like"] ?>)<br>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</div>

<?php include "common/footer.php" ?>