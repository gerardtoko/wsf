<?php include "common/header.php" ?>

<div style="margin-top:30px">


<div class="col-md-4">

<div class="container">
<form class="form-horizontal" method="post">
<fieldset>

<!-- Form Name -->
<legend>Création d'un compte membre</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Email</label>  
  <div class="col-md-4">
  <input id="textinput" name="email" type="text" placeholder="Email" class="form-control input-md">
  <span class="help-block">Une adresse email française se terminant par .fr</span>
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Mot de passe</label>
  <div class="col-md-4">
    <input id="passwordinput" name="password" type="password" placeholder="Mot de passe" class="form-control input-md">
    <span class="help-block">Que des chiffres et lettres compris entre 6 et 20</span>  
  </div>
</div>

<!-- Identifiant Twitter-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Identifiant Twitter</label>
  <div class="col-md-4">
    <input id="passwordinput" name="twitter" type="text" placeholder="Identifiant Twitter" class="form-control input-md">
    <span class="help-block">Votre identifiant Twitter, exemple: @gerard02, @wsf_75 </span>  
  </div>
</div>

<!-- Nom d'utilisateur-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Numero de téléphone mobile</label>
  <div class="col-md-4">
    <input id="passwordinput" name="telephone_mobile" type="text" placeholder="Téléphone mobile" class="form-control input-md">
    <span class="help-block">Numéro de téléphone mobile valide, exemple: 06 28 98 39 90, 07 20 87 30</span>  
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-sm btn-success">Soumettre</button>
  </div>
</div>


</fieldset>


</form>

</div>

</div>

<?php include "common/footer.php" ?>