<?php include "header.php" ?>


<div class="container content">
  <h3>Movies <a class="btn btn-default" href="/admin/movies/add">Ajouter un film</a></h3>
  <hr>
  <div class="row">
    <div class="span5">
            <table class="table table-striped table-condensed">
                  <thead>
                  <tr>
                      <th>Nom</th>
                      <th>Année</th>
                      <th>Réalisateur</th>
                      <th>Durée</th>                                          
                      <th>Genres</th>
                      <th>Opérations</th>
                  </tr>
              </thead>   
              <tbody>
                <?php foreach($data["movies"] as $value) { ?>
                  <tr>
                      <td><a href="/admin/movies/update?id=<?php echo $value["id"] ?>"><?php echo $value["nom"] ?></a></td>
                      <td><?php echo $value["année"] ?></td>
                      <td><?php echo $value["réalisateur"] ?></td>
                      <td><?php echo $value["durée"] ?></td>
                      <td><?php echo $value["genres"] ?></td>
                      <td>
                        <a href="/admin/movies/update?id=<?php echo $value["id"] ?>" class="btn btn-default">Update</a>
                        <a onclick="return confirm('Are you sure?')" href="/admin/movies/delete?id=<?php echo $value["id"] ?>" class="btn btn-danger">Delete</a>
                      </td>                                       
                  </tr>
                <?php } ?>                                 
              </tbody>
            </table>
            </div>
  </div>
</div>
<?php include "footer.php" ?>