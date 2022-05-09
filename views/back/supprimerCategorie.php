<?php
 include_once 'C:\xampp\htdocs\shop\Controller\CategorieC.php';
 $categorie = new CategorieC();
 if(isset($_GET['IdCategorie'])){
     $categorie->supprimerCategorie($_GET['IdCategorie']);
 
    header('Location:afficherListeCategorie.php');
    }

 ?>