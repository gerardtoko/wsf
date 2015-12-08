<?php include "common/header.php" ?>

<div id="movies">
  <h4>Produits</h4>
  <hr>
  <form>
    <div class="form-group">
      <div class="col-md-3">
          <select class="form-control" name="type">
            <?php
              // Test si le type existe
              $type = ""; 
              if(isset($_GET['type'])){
                $type = $_GET['type'];
              }
            ?>
            <option <?php echo selected("Vestes", $type) ?> value="Vestes" checked="checked"> Vestes</option>
            <option <?php echo selected("Jeans", $type) ?> value="Jeans"> Jeans</option>
            <option <?php echo selected("T-shirts", $type) ?> value="T-shirts"> T-shirts</option>
            <option <?php echo selected("Pulls", $type) ?> value="Pulls"> Pulls</option>
            <option <?php echo selected("Jupes", $type) ?> value="Jupes"> Jupes</option>
            <option <?php echo selected("Chaussures", $type) ?> value="Chaussures"> Chaussures</option>
            <option <?php echo selected("Sacs", $type) ?> value="Sacs"> Sacs</option>
            <option <?php echo selected("Pantalons", $type) ?> value="Pantalons"> Pantalons</option>
          <select>
          <button type="submit" class="btn btn-sm btn-success">Filtrer</button>
      </div>
    </div>
  </form>
  <div class="container">
    <div class="row">
      <?php foreach($data["produits"] as $key => $produit) { ?>
        <div class="col-md-3">
          <img src="<?php echo $produit["photo"] ?>" class="img-mov img-thumbnail">
          <div><?php echo $produit["nom"] ?></div>
          <div class="line2">
            <?php echo $produit["année"] ?> (<?php echo $produit["durée"] ?>)<br>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</div>

<?php include "common/footer.php" ?>