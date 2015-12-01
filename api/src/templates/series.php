<?php include "common/header.php" ?>

<div id="movies">
  <h4>Movies <a href="/membres">Accès aux membres</a></h4>
  <hr>
  <div class="container">
    <div class="row">
      <?php foreach($data["series"] as $key => $serie) { ?>
        <div class="col-md-3">
          <img src="<?php echo $serie["Poster"] ?>" class="img-mov img-thumbnail">
          <div><?php echo $serie["Nom"] ?></div>
          <div class="line2">
            <?php echo $serie["Annee"] ?> (<?php echo $serie["Durée"] ?>)<br>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</div>

<?php include "common/footer.php" ?>