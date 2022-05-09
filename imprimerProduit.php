<?PHP
    include "../../controller/produitC.php";
	include "../../controller/categorieC.php";
    require_once "../../config.php";
	$produitC = new produitC();
	$listepproduit=$produitC->afficherProduit();
	$categorieC = new categorieC();
	$listecategorie=$categorieC->affichercategorie();
	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<a class="logo" href="showProduit.php">
    
        </a>
		<title> Afficher Liste des Produits </title>
    </head>
    <body onload="window.print()">

		<hr>
		<table border=1 align = 'center'>
			<tr>
                <th>ID</th>
				<th>Image</th>
				<th>Produit</th>
                <th>Type Produit</th>
                <th>Prix</th>
                <th>Description</th>
                <th>Catégorie</th>
                
				
			</tr>
			<?PHP
				foreach ($listecategorie as $categorie){
			?>

			<?PHP
				foreach ($listepproduit as $produit){
			?>
            		<tr>
                    <td><?PHP echo $produit['id']; ?></td>
					<td><?PHP echo $produit['img']; ?></td>
					<td><?PHP echo $produit['Nomjeux']; ?></td>
                    <td><?PHP echo $categorie['Typejeux']; ?></td>
                    <td><?PHP echo $produit['prix']; ?></td>
                    <td><?PHP echo $produit['description']; ?></td>
                    <td><?PHP echo $produit['categorie']; ?></td>
                    <
					
					
				</tr>
			<?PHP
				}
			?>
			<?PHP
				}
			?>
		</table>
	</body>
</html>