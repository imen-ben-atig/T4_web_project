<?PHP


include "../../controller/produitC.php";
include "../../controller/localC.php";
include "../../controller/categorieC.php";


$produitC = new produitC();
$listeProduit= $produitC->afficherProduit();
$categorieC= new categorieC();
$listeCategorie= $categorieC->afficherCategorie();
$categorieC= new categorieC();
$localC = new localC();
$listeLocal= $localC->afficherLocal();   
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>tunifashion</title>

    <link rel="stylesheet" href="assets/css/custom/style.css">
    <link rel="stylesheet" href="assets/css/responsive/responsive.css">

    <!-- Favicon 
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">-->

    <!-- Font awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">    
    <!-- Date Picker -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datepicker.css">   
     <!-- Gallery Lightbox -->
    <link href="assets/css/magnific-popup.css" rel="stylesheet"> 
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">     

     

   
    <!-- Google Fonts -->

    <!-- Prata for body  -->
    <link href='https://fonts.googleapis.com/css?family=Prata' rel='stylesheet' type='text/css'>
    <!-- Tangerine for small title -->
    <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>   
    <!-- Open Sans for title -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    
  </head>
  <body>

  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>
    </a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header section -->
  <?php include "header.php" ?>
  <!-- End header section -->
 

 

 

 <!-- Start Restaurant game -->
 <section id="mu-chef">
 <div class="pageTitleArea animated">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="pageTitle">
                        <div class="h2">Produits</div>
                        <ul class="pageIndicate">
                            <li><a href="">home</a></li>
                            <li><a href="">Produits</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- ======= /2.21 Page Title Area ====== -->

                          
    <div class="blogArea secPdng">
        <div class="container">
            <article class="row">

            <?php 



                foreach($listeProduit as $produit){
                ?>
<div class="col-lg-4 col-md-6">
                        <div class="singlePost">
                            <div class="postImg">
                                
                                <img src="../back/images/<?php echo $produit["img"]; ?>" length="80" height="180" alt="clothes">
                            </div>
                            <div class="postContent">
                            <?php echo $produit['date_ajout']; ?>
                                <a href="#" class="postTitle h4"><?php echo $produit['Nomjeux']; ?></a>
                                
                                <div class="postDate"><?php echo $produit['prix'];  ?> DT</div>
                                <div class="postExcerpt">
                                <p><?PHP echo $produit['description']; ?></p>
                                  
                                </div>
                                <div>

                                    <div>
                                    <form action="ajouterpanier.php" method="GET">
                              <input type="hidden" id="id" name="id" value="<?php echo  $produit["id"] ?> ">
                              <input type="hidden" id="	img" name="img" value="<?php echo  $produit["img"] ?> ">
                              
                              <input type="hidden" id="	Nomjeux" name="Nomjeux" value="<?php echo  $produit["Nomjeux"] ?>s ">
                              <input type="hidden" id="prix" name="prix" value="<?php echo  $produit['prix'] ?> ">
                              <button class="btn btn-info">ajouter panier</button> </form>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
     
           


<?PHP
}
?>
   </article>
            
        </div>
    </div>

   
 

  

 

             
  
  
  

  

  

  <!-- Start Footer -->
  
  <!-- End Footer -->
  
  <!-- jQuery library -->
  <script src="assets/js/jquery.min.js"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.js"></script>   
  <!-- Slick slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="assets/js/simple-animated-counter.js"></script>
  <!-- Gallery Lightbox -->
  <script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
  <!-- Date Picker -->
  <script type="text/javascript" src="assets/js/bootstrap-datepicker.js"></script> 
  <!-- Ajax contact form  -->
  <script type="text/javascript" src="assets/js/app.js"></script>
 
  <!-- Custom js -->
  <script src="assets/js/custom.js"></script> 

  </body>
</html>
