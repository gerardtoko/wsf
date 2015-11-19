<?php include "common/header.php" ?>

<div id="movies">
  <h4>Membres <a href="/membres/logout">Logout</a></h4>
  <hr>
  <div class="container">
    <div class="row">
      <?php foreach($data as $key => $game) { ?>
        <div class="col-md-3">
          <a href="/game?id=<?php echo $key ?>">
            <img src="<?php echo $game["Poster"] ?>" class="img-mov img-thumbnail">
            <div><?php echo $game["Nom"] ?></div>
            <div class="line2">
              <?php echo $game["Annee"] ?> (<?php echo $game["Durée"] ?>)<br>
            </div>
          </a>
        </div>
      <?php } ?>
    </div>
  </div>
</div>


<?php include "common/footer.php" ?>