<?php include "header.php" ?>


<div class="container content">
  <h3><?php echo value($data, "nom") ?></h3>
  <hr>
  <div class="row">
    <form method="post" class="form-horizontal">
      <div class="form-group">
        <div class="col-md-6">
            <h6><strong>Nom</strong></h6>
            <input value="<?php echo value($data, "nom") ?>" name="nom" placeholder="Nom" class="form-control input-md" type="text">
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-6">
            <h6><strong>Année</strong></h6>
            <input value="<?php echo value($data, "année") ?>" name="année" placeholder="Année" class="form-control input-md" type="text">
            <span class="help-block">Exemple: 2015</span>  
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-6">
            <h6><strong>Durée</strong></h6>
            <input value="<?php echo value($data, "durée") ?>" name="durée" placeholder="Durée" class="form-control input-md" type="text">
            <span class="help-block">Exemple: 2h34min</span>  
        </div>
      </div>

      <div class="form-group">
        <div class="col-md-6">
            <h6><strong>URL de la photo</strong></h6>
            <input value="<?php echo value($data, "photo") ?>" name="photo" placeholder="Photo URL" class="form-control input-md" type="text">
            <span class="help-block">Url de la photo</span>  
        </div>
      </div>

      <br>
      <div class="form-group">
        <div class="col-md-6">
            <h6><strong>Réalisateur</strong></h6>
            <input value="<?php echo value($data, "réalisateur") ?>" name="réalisateur" placeholder="Réalisateur" class="form-control input-md" type="text">
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-6">
            <h6><strong>Acteurs</strong></h6>
            <input value="<?php echo value($data, "acteurs") ?>" name="acteurs" placeholder="Acteurs" class="form-control input-md" type="text">
            <span class="help-block">Séparer par des virgules</span>  
        </div>
      </div>
      <br>
      <div class="form-group">
        <div class="col-md-6">
            <h6><strong>Genres</strong></h6>
            <input value="<?php echo value($data, "genres") ?>" name="genres" placeholder="Genres" class="form-control input-md" type="text">
            <span class="help-block">Séparer par des virgules</span>  
        </div>
      </div>

      <div class="form-group">
        <div class="col-md-6">
            <?php
              // Test si le type existe
              $active = ""; 
              if(isset($data['isActive'])){
                $active = $data['isActive'];
              }
            ?>
            <h6><strong>Statut</strong></h6>
            <input <?php echo checked("0", $active) ?> type="radio" name="isActive" value="0"> Brouillion<br>
            <input <?php echo checked("1", $active) ?> type="radio" name="isActive" value="1"> Publié<br>
        </div>
      </div>
      <hr>
      <button type="submit" class="btn btn-default">Submit</button>
      <br>
    </form>
  </div>
</div>
<?php include "footer.php" ?>