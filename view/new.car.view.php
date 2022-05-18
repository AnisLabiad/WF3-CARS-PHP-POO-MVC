<?php  ob_start();?>

<form method="POST" action="<?= URL ?>vehicule/gvalid">
  <div class="form-group">
    <label for="marque">Marque</label>
    <input type="text" name="marque" class="form-control" id="marque">
  </div>
  <div class="form-group">
    <label for="modele">Modèle</label>
    <input type="text" name="modele" class="form-control" id="modele">
  </div>
  <div class="form-group">
    <label for="Couleur">Couleur</label>
    <input type="text" name="Couleur" class="form-control" id="Couleur">
  </div>
  <div class="form-group">
    <label for="Immatriculation">Immatriculation</label>
    <input type="text" name="Immatriculation" class="form-control" id="Immatriculation">
  </div>
  <button class="btn btn-success" type="submit">Ajouter un véhicule</button>
</form>

<?php

$content =ob_get_clean();
$title = "Ajouter un véhicule";
require_once "base.html.php";

?>