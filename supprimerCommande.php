<?php
 include_once 'C:\xampp\htdocs\ak\controller\commandeC.php';
 $commande = new commandeC();
 if(isset($_GET['id_commande'])){
     $commande->supprimerCommande($_GET['id_commande']);
 
    header('Location:afficherListeCommande.php');
    }

 ?>