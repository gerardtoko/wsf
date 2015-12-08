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
            <h6><strong>Statut</strong></h6>
            <input type="radio" name="activé" value="0" checked="checked"> Brouillion<br>
            <input type="radio" name="activé" value="1"> Publié<br>
        </div>
      </div>
      <button type="submit" class="btn btn-sm btn-success">Soumettre</button>
    </form>
  </div>
</div>
<?php include "footer.php" ?>