<?php include "header.php" ?>


<div class="container content">
  <h3><?php echo value($data, "nom") ?></h3>
  <hr>
  <div class="row">
    <form method="post" class="form-horizontal" enctype="multipart/form-data">
      <legend>Informations</legend>
      <div class="form-group">
        <div class="col-md-6">
            <input value="<?php echo value($data, "nom") ?>" name="nom" placeholder="Nom" class="form-control input-md" type="text">
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-6">
            <input value="<?php echo value($data, "année") ?>" name="année" placeholder="Année" class="form-control input-md" type="text">
            <span class="help-block">Exemple: 2015</span>  
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-6">
            <input value="<?php echo value($data, "durée") ?>" name="durée" placeholder="Durée" class="form-control input-md" type="text">
            <span class="help-block">Exemple: 2h34min</span>  
        </div>
      </div>

      <div class="form-group">
        <div class="col-md-6">
            <input type="file" name="photo"> 
        </div>
      </div>

      <br>
      <legend >Réalisateur & Acteurs</legend>
      <div class="form-group">
        <div class="col-md-6">
            <input value="<?php echo value($data, "réalisateur") ?>" name="réalisateur" placeholder="Réalisateur" class="form-control input-md" type="text">
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-6">
            <input value="<?php echo value($data, "acteurs") ?>" name="acteurs" placeholder="Acteurs" class="form-control input-md" type="text">
            <span class="help-block">Séparer par des virgules</span>  
        </div>
      </div>
      <br>
      <legend>Genres</legend>
      <div class="form-group">
        <div class="col-md-6">
            <input value="<?php echo value($data, "genres") ?>" name="genres" placeholder="Genres" class="form-control input-md" type="text">
            <span class="help-block">Séparer par des virgules</span>  
        </div>
      </div>
      <hr>
      <button type="submit" class="btn btn-default">Submit</button>
      <br>
    </form>
  </div>
</div>
<?php include "footer.php" ?>