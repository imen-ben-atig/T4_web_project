<?php 
include '../../config.php';
    $sql="SELECT * FROM offres";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
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

</style>






    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Best shopping</title>

    <link rel="stylesheet" href="assets/css/custom/style2.css">
    <link rel="stylesheet" href="assets/css/responsive/responsive.css">
    <!-- favicon -->
    <link rel="icon" type="image/png" href="img1/favicon.png">
    

</head>

<body>


     
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
    //      $id=$id0["id_client"];?> <a href="connexion.php">deconnexion </a> <a href="updateClient.php?id=<?PHP echo $id; ?>"> <button type="submit" class="mu-readmore-btn">Profile</button>   </a>
    // <?php
// echo 'Bienvenue Utilisateur ', $x; 
//         }




    
    //  include "header.php" ?>
    
    <!-- ======= /1.01 Header Area ====== -->

    <!-- ======= 1.02 Home Area ====== -->
    <div class="homeArea animated">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="homeassets/img1Table">
                        <div class="homeassets/img1">
                            <assets/img1 src="assets/img1/home-dsk-1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-7">
                    <div class="homeContent">
                        <span class="topTxt">Simple &nbsp; - &nbsp; Easy to use &nbsp; - &nbsp; 10x Better!</span>
                        <span class="h2 homeTitle">MODE <br>Best shopping service for everyone.</span>
                        <p>Get the best service. buy <br>Any product you want!.</p>
                        <!-- <p>Add an offer <br>Any product you want!.</p> -->
                      <h1>ADD an offer</h1>
                        <div class="homeBtn">
                            <!-- <a href="#" class="btnOne Btn"><i class="icofont icofont-rocket-alt-2"></i>special offers</a> -->
                            <!-- <a href="#" class="btnTwo Btn">See other product</a> -->

                        </div>
                        <form action="ajouterCategorie.php" method="post">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="NomCategorie">Nom Catégorie:
                        </label>
                    </td>
                    <td><input type="text" name="NomCategorie" id="NomCategorie" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="NomOffre">Les offres:
                        </label>
                    </td>
                    <td> 
                        <select name="NomOffre">
                        <?php
                         foreach($liste as $offres) {
                        ?>
                                <option value="<?php echo $offres['NomOffre'] ?>"><?php echo $offres['NomOffre'] ?></option>
                                     <?php }  ?>
                    </select>;  
                    </td>
                </tr>              
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" class="btn" value="Envoyer"> 
                    </td>
                    <td>
                        <input type="reset" class="btn" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
                    </div>

                </div>

            </div>

            

            <div class="clouds">
                <assets/img1 src="assets/img1/clouds/cloud-1.png" alt="" class="cloud1">
                <assets/img1 src="assets/img1/clouds/cloud-2.png" alt="" class="cloud2">
                <assets/img1 src="assets/img1/clouds/cloud-3.png" alt="" class="cloud3">
                <assets/img1 src="assets/img1/clouds/cloud-4.png" alt="" class="cloud4">
                <assets/img1 src="assets/img1/clouds/cloud-5.png" alt="" class="cloud5">
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


    <script src="js/jquery.1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/active.js"></script>
    <script src="js/chatScript.js" type="text/javascript"></script>


</body>

</html>




