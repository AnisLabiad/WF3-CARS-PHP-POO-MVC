<?php ob_start(); ?>

<table class="table  table-hover text-center shadow">
  <thead class="bg-secondary text-white">
    <tr>
      <th scope="col">Titre</th>
      <th scope="col">Nombres de joueurs</th>
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
          <td><a href="<?= URL ?>vehicule/edit/<?= $car->getId() ?>"><i class="fa-solid fa-edit"></i></a></td>
          <td><a href="<?= URL ?>vehicule/delete"><i class="fa-solid fa-trash"></i></a></td>
        </tr>
     <?php endforeach; ?>   

  </tbody>
</table>

<a class="btn btn-success w-25 d-block m-auto" href="<?= URL ?>vehicule/add">Ajouter un jeu</a>

<?php

$content =ob_get_clean();
$title = "Liste de jeux";
require_once "base.html.php";

?>


