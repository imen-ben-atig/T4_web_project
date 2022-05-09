<?php

    include_once '../../controller/panier.php';
    $panier  = new paniers();
    $curr_panier = $panier->getCurrentPanier();
    $listeDomaine=[".com",".tn",".io",".ro",".gov",".org"];
    $listePrix = [20,12,16,9,5,30];
    if(isset($_POST['produit'])){
        try{
            
            $panier->ajouterAuPanier($_POST['produit'],$_POST['prix'],$curr_panier);
        }catch(Error $e){
           echo $e;
        }
        
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  padding: 25px;
  background-color: white;
  color: black;
  font-size: 25px;
}

.dark-mode {
  background-color: black;
  color: white;
}
.alert{
  position: fixed !important;
  top:50%;
  z-index:100;
  left:50%;
  transform: translate(-50%);
  transition-duration: 1s;
  display:none;
  
}

</style>






    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mode</title>

    <link rel="stylesheet" href="assets/css/custom/style2.css">
    <link rel="stylesheet" href="assets/css/responsive/responsive.css">
    <!-- favicon -->
    <link rel="icon" type="image/png" href="img1/favicon.png">
    

</head>

<body>

<div id="ajouter-alert" class="alert alert-success " role="alert">
  Produit ajouté avec succée
</div>
     
<button onclick="myFunction()">change mode</button>

<script>
function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
</script>

     

    <!-- ======= 1.01 Header Area ====== -->
    <?php
     
    
//    if(empty($_SESSION['e']))
//     {
//     ?>
//     <a href="connexion.php">Connexion</a>
//     <?php
    
//     }
    
//     else{
//         $x=$_SESSION['e'];

//     $db = config::getConnexion();
//     $sql ="SELECT id_client from client
//     WHERE email ='$x'";
     
//     $id1=$db->query($sql);
//  $id1->execute();
//  $id0=$id1->fetch(PDO::FETCH_ASSOC); 
    //      $id=$id0["id_client"];?> <a href="connexion.php">deconnexion </a> <a href="updateClient.php?id=<?PHP echo $id; ?>"> // <a href="#" class="mu-readmore-btn">Profile</a> // <a href="panier.php" class="mu-readmore-btn">Panier</a>   </a>
    // <?php
// echo 'Bienvenue Utilisateur ', $x; 
//         }




    
    //  include "header.php" ?>
    
    <!-- ======= /1.01 Header Area ====== -->


    <!-- ======= /1.02 Home Area ====== -->
<body>
    <!-- ======= 1.03 Domain Area ====== -->
    <div class="domainArea">
        <div class="container animated">
            <div class="row">
                <div class="col-md-12 clearfix">
                    <div class="domainTxt">
                        <p>Search your item, <br>purchase one.</p>
                    </div>
                    <form action="domainSearch.php" class="domainForm" method="get">
                        <!-- replace domainSearch.html with your php file -->
                        <div class="domainTop">
                            <input type="search" name="search"  placeholder= <?php if (!isset($_GET)) echo "'Enter your domain name here'"; else echo $_GET["search"]; ?> >
                            <input type="submit" name="submit" value="Search Domain">
                        </div>
                        <div class="domainCheck">
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ======= /1.03 Domain Area ====== -->

    <div class="domains-table container" style="color:grey !important">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col"></th>
                <th scope="col">nom</th>
                <th scope="col">prix</th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 1; $i < count($listeDomaine) ; $i++) { ?>
                    <tr>
                    <th scope="row"><?php echo $i ?></th>
                    <td><?php echo $_GET["search"].$listeDomaine[$i] ?></td>
                    <td><?php echo $listePrix[$i] ?> <span style="font-weight:800">DT</span></td>
                    <td><button type="button" class="btn btn-primary" style="margin-left: auto;display: block;" onClick="ajouterAuPanier(<?php echo "'".$_GET["search"].$listeDomaine[$i]."'".","."'".$listePrix[$i]."'" ?>)" >Ajouter au panier</button></td>
                    </tr>
                    </div>
                    <!-- End Card -->
                    </div> 
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- ======= 1.07 client Area ====== -->
    <div class="clientArea secPdng animated">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sectionTitle">
                        <div class="h2">We give <span>awesome service,</span><br>Some of our trusted clients.</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="singleClient"><a href="#"><assets/img1 src="assets/img1/client-1.jpg" alt=""></a></div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="singleClient"><a href="#"><assets/img1 src="assets/img1/client-2.jpg" alt=""></a></div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="singleClient"><a href="#"><assets/img1 src="assets/img1/client-3.jpg" alt=""></a></div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="singleClient"><a href="#"><assets/img1 src="assets/img1/client-4.jpg" alt=""></a></div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="singleClient"><a href="#"><assets/img1 src="assets/img1/client-5.jpg" alt=""></a></div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="singleClient"><a href="#"><assets/img1 src="assets/img1/client-6.jpg" alt=""></a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- ======= /1.07 client Area ====== -->

    <!-- ======= 1.08 ctaTwo Area ====== -->
    <div class="ctaTwo">
        <div class="container">
            <div class="row">
                <div class="col-md-12 animated">
                    <span class="ctaTxtTwo">20,000+ People trust Sparks! Be one of them today.</span>
                    <div class="ctaBtn"><a href="#" class="btnOne Btn">Get Started now</a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- ======= /1.08 ctaTwo Area ====== -->

    <!-- ======= 1.09 footer Area ====== -->
    <?php include "footer.php" ?>
    <!-- ======= 1.09 footer Area ====== -->
   
    <!-- ======= /1.09 footer Area ====== -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/active.js"></script>
    <script src="js/chatScript.js" type="text/javascript"></script>
    <script src="assets/js/produits.js" type="text/javascript"></script>


</body>

</html>