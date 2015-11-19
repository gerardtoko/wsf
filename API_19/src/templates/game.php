<?php include "common/header.php" ?>

<div id="movies">
  <h4>Game - <?php echo $data["Nom"] ?></h4>
  <hr>
  <div class="container">
    <div class="row">
        <div class="col-md-8">
          <img src="<?php echo $data["Poster"] ?>" class="img-thumbnail">
        </div>
        <div class="col-md-4">
          <h4><strong><?php echo $data["Nom"] ?></strong> <span class="line2">(<?php echo $data["Like"] ?> Likes)</span></h4>
          <div class="line2">
            <?php echo $data["Annee"] ?> (<?php echo $data["Durée"] ?>)<br>
          </div>
          <hr>
          <h5><strong>Réalisateur</strong></h5>
          <div><div class="line2"><?php echo $data["Réalisateur"] ?></div></div>
          <h5><strong>Acteurs</strong></h5>
          <div><div class="line2"><?php echo join($data["Acteurs"], ", ") ?></div></div>
          <hr>
          <h5><strong>Genres</strong></h5>
          <div><div class="line2"><?php echo join($data["Genres"], ", ") ?></div></div>
        </div>
    </div>
  </div>
</div>

<?php include "common/footer.php" ?>