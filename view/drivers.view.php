<?php  
require_once "modele/PilotManager.php";
$pilotManager = new PilotManager();
$pilotManager->loadPilots();
$upilot = $pilotManager->getPilots();
ob_start(); 
?>

<table class="table  table-hover text-center shadow">
  <thead class="bg-secondary text-white">
    <tr>
      <th scope="col">Prénom</th>
      <th scope="col">Nom</th>
      <th scope="col" colspan="2">Actions</th>
    </tr>
  </thead>
  <tbody>

     <?php foreach($pilots as $pilot) :?>
        <tr>
          <td><?= $pilot->getNom() ?></td>
          <td><?= $pilot->getPrenom() ?></td>
          <td><a href=""><i class="fa-solid fa-edit"></i></a></td>
          <td><a href=""><i class="fa-solid fa-trash"></i></a></td>
        </tr>
     <?php endforeach; ?>   

  </tbody>
</table>

<a class="btn btn-success w-25 d-block m-auto" href="<?= URL ?>conducteur/add">Ajouter un conducteur</a>

<?php

$content =ob_get_clean();
$title = "Liste des conducteurs";
require_once "base.html.php";

?>


