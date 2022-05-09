<?php
include_once 'C:\xampp\htdocs\ak\controller\commandeC.php';
$commandeC=new commandeC();




if(
    isset($_POST['commandeDate']) && !empty($_POST['commandeDate'])
    && isset($_POST['commandePrix']) && !empty($_POST['commandePrix'])
    && isset($_POST['commandeNom']) && !empty($_POST['commandeNom'])
){
    $commande = new commande($_POST['commandeDate'],$_POST['commandePrix'],$_POST['commandeNom']);
    $commandeC->ajouterCommande($commande);


    header('Location:indexCommande.php');

}
else
{
echo 'Erreur test';
}
?>