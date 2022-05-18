<?php ob_start(); ?>

<table class="table  table-hover text-center shadow">
  <thead class="bg-secondary">
    <tr>
      <th scope="col">Marque</th>
      <th scope="col">Modèle</th>
      <th scope="col">Couleur</th>
      <th scope="col">Immatriculation</th>
      <th scope="col" colspan="2">Actions</th>
    </tr>
  </thead>
  <tbody>

     <?php foreach($cars as $car) :?>
        <tr>
          <td><?= $car->getMarque() ?></td>
          <td><?= $car->getModele() ?></td>
          <td><?= $car->getCouleur() ?></td>
          <td><?= $car->getImmatriculation() ?></td>
          <td><a href="<?= URL ?>vehicule/edit/<?= $car->getIdVehicule() ?>"><i class="fa-solid fa-edit"></i></a></td>
          <td><a href="<?= URL ?>vehicule/delete"><i class="fa-solid fa-trash"></i></a></td>
        </tr>
     <?php endforeach; ?>   

  </tbody>
</table>

<a class="btn btn-success w-25 d-block m-auto" href="<?= URL ?>vehicule/add">Ajouter un véhicule</a>

<?php

$content =ob_get_clean();
$title = "Liste des véhicules";
require_once "base.html.php";

?>


