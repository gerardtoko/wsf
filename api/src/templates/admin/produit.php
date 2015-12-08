<?php include "header.php" ?>


<div class="container content">
  <h3><?php echo value($data, "nom") ?></h3>
  <hr>
  <div class="row">
    <form method="post" class="form-horizontal" enctype="multipart/form-data">
      <h6><strong>Nom</strong></h6>
      <div class="form-group">
        <div class="col-md-6">
            <input value="<?php echo value($data, "nom") ?>" name="nom" placeholder="Nom" class="form-control input-md" type="text">
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-6">
            <h6><strong>Description</strong></h6>
            <textarea class="form-control" rows="5" cols="50" name="description"><?php echo value($data, "description") ?></textarea>
            <span class="help-block">Description de la catégorie</span>  
        </div>
      </div>

      <div class="form-group">
        <div class="col-md-6">
            <h6><strong>Prix</strong></h6>
            <input value="<?php echo value($data, "prix") ?>" name="prix" placeholder="Prix" class="form-control input-md" type="text">
            <span class="help-block">En EUR</span>  
        </div>
      </div>

      <div class="form-group">
        <div class="col-md-6">
            <h6><strong>Taille</strong></h6>
            <input value="<?php echo value($data, "taille") ?>" name="taille" placeholder="Taille" class="form-control input-md" type="text">
            <span class="help-block">S, M, L, XL etc...</span>  
        </div>
      </div>

      <div class="form-group">
        <div class="col-md-6">
            <h6><strong>Type</strong></h6>
            <?php
              // Test si le type existe
              $type = ""; 
              if(isset($data['type'])){
                $type = $data['type'];
              }
            ?>
            <select class="form-control" name="type">
              <option <?php echo selected("Vestes", $type) ?> value="Vestes" checked="checked"> Vestes</option>
              <option <?php echo selected("Jeans", $type) ?> value="Jeans"> Jeans</option>
              <option <?php echo selected("T-shirts", $type) ?> value="T-shirts"> T-shirts</option>
              <option <?php echo selected("Pulls", $type) ?> value="Pulls"> Pulls</option>
              <option <?php echo selected("Jupes", $type) ?> value="Jupes"> Jupes</option>
              <option <?php echo selected("Chaussures", $type) ?> value="Chaussures"> Chaussures</option>
              <option <?php echo selected("Sacs", $type) ?> value="Sacs"> Sacs</option>
              <option <?php echo selected("Pantalons", $type) ?> value="Pantalons"> Pantalons</option>
            <select>
        </div>
      </div>

      <div class="form-group">
        <div class="col-md-6">
            <?php
              // Test si le type existe
              $active = ""; 
              if(isset($data['activé'])){
                $active = $data['activé'];
              }
            ?>
            <h6><strong>Statut</strong></h6>
            <input <?php echo checked("0", $active) ?> type="radio" name="activé" value="0"> Brouillion<br>
            <input <?php echo checked("1", $active) ?> type="radio" name="activé" value="1"> Publié<br>
        </div>
      </div>
      <button type="submit" class="btn btn-sm btn-success">Soumettre</button>
    </form>
  </div>
</div>
<?php include "footer.php" ?>