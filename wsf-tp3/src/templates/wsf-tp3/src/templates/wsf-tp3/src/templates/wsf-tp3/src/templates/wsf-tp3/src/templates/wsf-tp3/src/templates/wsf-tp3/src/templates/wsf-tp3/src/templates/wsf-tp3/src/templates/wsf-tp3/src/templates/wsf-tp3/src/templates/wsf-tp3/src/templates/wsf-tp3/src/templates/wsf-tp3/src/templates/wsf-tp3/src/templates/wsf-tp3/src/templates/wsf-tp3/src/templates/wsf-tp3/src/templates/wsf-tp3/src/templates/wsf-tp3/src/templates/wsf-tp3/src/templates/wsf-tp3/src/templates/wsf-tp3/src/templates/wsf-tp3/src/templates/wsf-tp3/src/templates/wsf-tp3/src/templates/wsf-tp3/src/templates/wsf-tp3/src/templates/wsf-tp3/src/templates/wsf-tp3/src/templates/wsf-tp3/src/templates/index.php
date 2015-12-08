<?php include "common/header.php" ?>

<div id="movies">
  <h4>Produits</h4>
  <hr>
  <form>
    <div class="form-group">
      <div class="col-md-3">
          <select class="form-control" name="type">
            <option value="Vestes" checked="checked"> Vestes</option>
            <option value="Jeans"> Jeans</option>
            <option value="T-shirts"> T-shirts</option>
            <option value="Pulls"> Pulls</option>
            <option value="Jupes"> Jupes</option>
            <option value="Chaussures"> Chaussures</option>
            <option value="Sacs"> Sacs</option>
            <option value="Pantalons"> Pantalons</option>
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