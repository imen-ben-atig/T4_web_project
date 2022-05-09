<?php
 include_once 'C:\xampp\htdocs\shop\Controller\OffreC.php';
 $offre = new OffreC();
 if(isset($_GET['idOffre'])){
     $offre->supprimerOffre($_GET['idOffre']);
 
    header('Location:afficherListeOffre.php');
    }

 ?>