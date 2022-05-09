<?PHP
    include "../../controller/commandeC.php";
	
    require_once "../../config.php";
	$commandeC = new commandeC();
	$ListeCommande=$commandeC->afficherCommande();

	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<a class="logo" href="afficherListeCommande.php">
      
        </a>
		<title> Afficher Liste des commande </title>
    </head>
    <body onload="window.print()">

		<hr>
		<table border=1 align = 'center'>
			<tr>
                <th>id_commande</th>
				<th>commandeDate</th>
				<th>commandePrix</th>
                <th>commandeNom</th>
            
           
				
			</tr>
		

			<?PHP
				foreach ($ListeCommande as $commande){
			?>
            		<tr>
                    <td><?PHP echo $commande['id_commande']; ?></td>
					<td><?PHP echo $commande['commandeDate']; ?></td>
					<td><?PHP echo $commande['commandePrix']; ?></td>
                    
                    <td><?PHP echo $commande['commandeNom']; ?></td>
                    
                    
					
					
				</tr>
			<?PHP
				}
			?>
			<?PHP
				
			?>
		</table>
	</body>
</html>