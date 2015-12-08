<?php include "header.php" ?>


<div class="container content">
  <h3>Categories <a class="btn btn-default" href="/admin/categories/add">Ajouter une categorie</a></h3>
  <hr>
  <div class="row">
    <div class="span5">
            <table class="table table-striped table-condensed">
                  <thead>
                  <tr>
                      <th>Nom</th>
                      <th>Description</th>
                      <th>Opérations</th>
                  </tr>
              </thead>   
              <tbody>
                <?php foreach($data["categories"] as $value) { ?>
                  <tr>
                      <td><a href="/admin/categories/update?id=<?php echo $value["id"] ?>"><?php echo $value["nom"] ?></a></td>
                      <td><?php echo $value["nom"] ?></td>
                      <td><?php echo $value["description"] ?></td>
                      <td>
                        <a href="/admin/categories/update?id=<?php echo $value["id"] ?>" class="btn btn-default">Mettre à jour</a>
                        <a onclick="return confirm('Are you sure?')" href="/admin/categories/delete?id=<?php echo $value["id"] ?>" class="btn btn-danger">Supprimer</a>
                      </td>                                       
                  </tr>
                <?php } ?>                                 
              </tbody>
            </table>
            </div>
  </div>
</div>
<?php include "footer.php" ?>